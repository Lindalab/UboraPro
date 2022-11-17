<?php 
    require_once("../../controllers/payment_controller.php");
    require_once("../../controllers/cart_controller.php");

    session_start();
    $user_id = $_SESSION['user_id'];
    $reciept_no = mt_rand();
    $order_date = date("Y-m-d");
    $order_status = "success";
    $order_type = 1;
    $order_id = addtoOrder_ctr($user_id,$reciept_no,$order_date,$order_type,$order_status);

   
    //payment

    $ref = $_GET['reference'];

    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_50902229f2c6e2eac75bfdc2b90cc0211df24a5b",
        "Cache-Control: no-cache",
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
  
    curl_close($curl);

    $res = json_decode($response, true);

    $amount =  $res['data']['amount'];
    $currency = $res['data']['currency'];
    $payment_date = date("Y-m-d");

    $result = makePayment_ctr($paid_amt,$user_id,$order_id,$currency,$payment_date);


    // move cart to orderdetails
    $ip_add = $_SERVER['REMOTE_ADDR'];

    $itemcartlist = showAPersonItemsCart_ctr($user_id,$ip_address);

    foreach ($itemcartlist as $cart) {
        $item_id = $cart['item_id'];
        $qty = 1;
        $order_type = 1;
        addToOrderItemHistroy_ctr($order_id,$item_id,$item_qty);
        
        deleteItemsCart_ctr($user_id, $ip_address,$item_id);
    }


    if($res['data']['status'] === 'success'){
        echo "success";
    }else{
        echo "failed";
    }
    
?>
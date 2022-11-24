<?php
    
    require_once("../../controllers/payment_controller.php");
    require_once("../../controllers/cart_controller.php");

    session_start();
    $user_id = $_SESSION['user_id'];
    $reciept_no = mt_rand();
    $date = new DateTime();
    $current_date = $date->format("Y-m-d");
    $order_status = "success";
    $order_type = 1;
    $order_id = addtoOrder_ctr($user_id,$reciept_no,$current_date,$order_type,$order_status);

    
    
    $curl = curl_init();
    // $data = "T032500960937628";
    $data = $_GET["reference"];
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.paystack.co/transaction/verify/'.$data,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
        "Cache-Control: no-cache",
      ),
    ));
    
    $response = json_decode(curl_exec($curl), true);
    $err = curl_error($curl);
  
    curl_close($curl);
     
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $amount = $response->data->amount;
      $currency = $response->data->currency;
  
      $result = makePayment_ctr($amount,$user_id,$order_id,$currency,$current_date);
      
      
      $ip_add = $_SERVER['REMOTE_ADDR'];

      // delete items from cart;
      $itemcartlist = showAPersonItemsCart_ctr($user_id,$ip_add);

      if($itemcartlist){
        foreach ($itemcartlist as $key => $cart) {
          $item_id = $cart['item_id'];
          $item_qty = $cart['item_qty'];
          $order_type = 1;
          
          addToOrderItemHistroy_ctr($order_id,$item_id,$item_qty);
          
        }
        deleteItemsCart_ctr($user_id);

        $ticketList = showAPersonTicketCart_ctr($user_id,$ip_add);
        if($ticketList){
          $ticket_id = $ticketList['ticket_id'];
          $qty = $ticketList['ticket_qty'];
          $order_type = 2;
          addToticketHistroy_ctr($order_id,$ticket_id,$qty);
        }
          deleteTicketCart_ctr($ticket_id);
          echo "success";
    }

  
      // delete ticket from cart;
      
  }
?>

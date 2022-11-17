<?php 
    require_once("../classes/payment_class.php");

    function makePayment_ctr($paid_amt,$user_id,$order_id,$currency,$payment_date){
        $payment = new Payment;

        return $payment->makePayment($paid_amt,$user_id,$order_id,$currency,$payment_date);
    }

    function addtoOrder_ctr($user_id,$reciept_no,$order_date,$order_type,$order_status){
        $payment = new Payment;

        return $payment->addtoOrder($user_id,$reciept_no,$order_date,$order_type,$order_status);
    }

    function addToOrderItemHistroy_ctr($order_id,$item_id,$item_qty){
        $payment = new Payment;

        return $payment->addToOrderItemHistroy($order_id,$item_id,$item_qty);
    }

    function addToticketHistroy_ctr($order_id,$ticket_id,$ticket_qty){
        $payment = new Payment;

        return $payment->addToticketHistroy($order_id,$ticket_id,$ticket_qty);
    }

    

?>
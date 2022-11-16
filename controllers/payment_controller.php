<?php 
    require_once("../classes/payment_class.php");

    function makePayment_ctr($paid_amt,$user_id,$order_id,$currency,$payment_date){
        $payment = new Payment;

        return $payment->makePayment($paid_amt,$user_id,$order_id,$currency,$payment_date);
    }

?>
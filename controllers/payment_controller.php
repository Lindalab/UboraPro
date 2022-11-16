<?php 
    require_once("../classes/payment_class.php");

    function makePayment($amount, $user_id, $payment_reference, $payment_type){
        $payment = new Payment;

        return $payment->makePayment($amount, $user_id, $payment_reference, $payment_type);
    }

?>
<?php 
    require_once("../settings/db_class.php");

    class Payment extends db_connection{

        function makePayment($paid_amt,$user_id,$order_id,$currency,$payment_date){
            $sql = "INSERT INTO `payment`(`paid_amt`, `user_id`, `order_id`, `currency`, `payment_date`) VALUES ('$paid_amt','$user_id','$order_id','$currency','$payment_date')";

            return $this->db_query($sql);
        }

        // Functions for Order for item and ticket

        function  addtoOrder($user_id,$reciept_no,$order_date,$order_type,$order_status){
            $sql="INSERT INTO `orders`(`user_id`, `reciept_no`, `order_date`, `order_type`, `order_status`) VALUES ('$user_id','$reciept_no','$order_date','$order_type','$order_status')";
            return $this->db_query($sql);

        }

        function  addToOrderItemHistroy($order_id,$item_id,$item_qty){
            $sql="INSERT INTO `orderhistory`(`order_id`, `item_id`, `item_qty`) VALUES ('$order_id',',$item_id','$item_qty')";
            return $this->db_query($sql);

        }


        function  addToticketHistroy($order_id,$ticket_id,$ticket_qty){
            $sql="INSERT INTO `tickethistroy`(`order_id`, `ticket_id`, `item_qty`) VALUES ('$order_id','$ticket_id','$ticket_qty')";
            return $this->db_query($sql);

        }
    }




?>

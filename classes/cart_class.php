<?php 
    require_once("../settings/db_class.php");

    class Cart extends db_connection{

        // adds a user cart to the database
        function addToCart($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id){
            $sql = "INSERT INTO `cart`(`food_qty`, `transport_id`, `ticket_id`, `ip_address`, `user_id`) VALUES ('$food_id','$food_qty','$transport_id','$ticket_id','$ip_address','$user_id')";

            return $this->db_query($sql);
        }

        // deletes every item from user's cart 
        function deleteCart($user_id, $ip_address){
            $sql = "DELETE FROM `cart` WHERE  `ip_address`= '$ip_address' and `user_id`='$user_id'";

            return $this->db_query($sql);
        }

        // updates elements in a cart
        function updateCart($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id){
            $sql = "UPDATE `cart` SET `food_id`='$food_id',`food_qty`='$food_qty',`transport_id`='$transport_id',`ticket_id`='$ticket_id' WHERE `ip_address`='$ip_address',`user_id`='$user_id'";

            return $this->db_query($sql);
        }

        // update payment status after payment is done
        function updateCartOnPaymentSuccess($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id,$payment_status){
            $sql = "UPDATE `cart` SET `payment_status`='$payment_status' WHERE `food_id`='$food_id',`food_qty`='$food_qty',`transport_id`='$transport_id',`ticket_id`='$ticket_id',`ip_address`='$ip_address',`user_id`='$user_id' ";

            return $this->db_query($sql);
        }

        // select all items in cart table that are not paid for by a user.
        function selectCartItemsWithoutPayment($user_id, $ip_address){
            $sql = "SELECT *  FROM `cart` WHERE `ip_address` = '$user_id'and  `user_id` ='$ip_address',`payment_status`=0";
            
            return $this->fetchAllData($sql);
        }

        // function selectCartItemsWithPayment($user_id, $ip_address){
        //     $sql = "SELECT *  FROM `cart` WHERE `ip_address` = '$user_id'and  `user_id` ='$ip_address',`payment_status`=1";
            
        //     return $this->fetchAllData($sql);
        // }

        // gets all the items in a cart paid by a user
        function showPurchaseHistory($user_id, $ip_address){
            $sql = "SELECT *  FROM `cart` WHERE `ip_address` = '$user_id'and  `user_id` ='$ip_address',`payment_status`=1 ";

            return $this->fetchAllData($sql);
        }        
    }



?>
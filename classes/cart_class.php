<?php 
    require_once("../settings/db_class.php");

    class Cart extends db_connection{

        // adds a user cart to the database
        function addToCart($item_id,$ticket_id, $ip_address, $user_id,$item_qty){
            $sql = "INSERT INTO `cart`(`item_id`, `ticket_id`, `ip_add`, `user_id`, `item_qty`) VALUES ('$item_id','$ticket_id','$ip_address',' $user_id','$item_qty')";

            return $this->db_query($sql);
        }

        // deletes every item from user's cart 
        function deleteCart($user_id, $ip_address){
            $sql = "DELETE FROM `cart` WHERE `ip_add`='$ip_address' and `user_id`='$user_id' ";

            return $this->db_query($sql);
        }

        // updates elements in a cart
        function updateCart($item_id, $ticket_id, $ip_add, $user_id, $item_qty){
            $sql = "UPDATE `cart` SET `item_id`='$item_id',`ticket_id`='$ticket_id',`item_qty`='$item_qty' WHERE `ip_add`='$ip_add' and `user_id`='$user_id' ";

            return $this->db_query($sql);
        }


        function showAPersonCart($c_id,$ip_add){
            $sql="";
            return $this->fetchAllData($sql);
        }

        function showAllProductInCart(){
            
        }

        // update payment status after payment is done
        // function updateCartOnPaymentSuccess($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id,$payment_status){
        //     $sql = "";

        //     return $this->db_query($sql);
        // }

        // select all items in cart table that are not paid for by a user.
        function selectCartItems($user_id, $ip_address){
            $sql = "SELECT `item_id`, `ticket_id`, `ip_add`, `user_id`, `item_qty` FROM `cart` WHERE ";
            
            return $this->fetchAllData($sql);
        }

        // function selectCartItemsWithPayment($user_id, $ip_address){
        //     $sql = "SELECT *  FROM `cart` WHERE `ip_address` = '$user_id'and  `user_id` ='$ip_address',`payment_status`=1";
            
        //     return $this->fetchAllData($sql);
        // }

        // gets all the items in a cart paid by a user
        function showPurchaseHistory($user_id, $ip_address){
            $sql = "";

            return $this->fetchAllData($sql);
        }        
    }



?>
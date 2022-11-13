<?php 
    require_once("../settings/db_class.php");

    class Cart extends db_connection{

        // adds a user cart to the database
        function addToCart($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id){
            $sql = "";

            return $this->db_query($sql);
        }

        // deletes every item from user's cart 
        function deleteCart($user_id, $ip_address){
            $sql = "";

            return $this->db_query($sql);
        }

        // updates elements in a cart
        function updateCart($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id){
            $sql = "";

            return $this->db_query($sql);
        }

        // select all items in cart table that are not paid for by a user.
        function selectCartItems($user_id, $ip_address){
            $sql = "";
            
            return $this->fetchAllData($sql);
        }

        // gets all the items in a cart paid by a user
        function showPurchaseHistory($user_id, $ip_address){
            $sql = " ";

            return $this->fetchAllData($sql);
        }        
    }



?>
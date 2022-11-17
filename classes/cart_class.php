<?php 
    require_once("../settings/db_class.php");

    class Cart extends db_connection{
         
        /** 
         * Item cart Operations
        */
        
        // adds a user cart to the database
        function addToItemsCart($item_id,$ip_address,$user_id,$item_qty){
            $sql = "INSERT INTO `item_cart`(`item_id`, `ip_address`, `user_id`, `item_qty`) VALUES ('$item_id','$ip_address','$user_id','$item_qty')";

            return $this->db_query($sql);
        }

        // deletes every item from user's cart 
        function deleteItemsCart($user_id, $ip_address,$item_id){
            $sql = "DELETE FROM `item_cart` WHERE  `ip_address` ='$ip_address' and `user_id`='$user_id' and `item_id`='$item_id'  ";

            return $this->db_query($sql);
        }

        // updates elements in a cart by 1
        function increaseItemsCartByOne($item_id,$ip_address, $user_id){

            $sql = "UPDATE `item_cart` SET `item_qty`=item_qty+1 WHERE `ip_address`='$ip_address' and `user_id`='$user_id' and `item_id`='$item_id' ";

            return $this->db_query($sql);
        }

        // Decerease item cart Item by 1
        function decreaseItemsCartByOne($item_id,$ip_address, $user_id){
           
            $sql = "UPDATE `item_cart` SET `item_qty`= item_qty-1 WHERE `ip_address`='$ip_address' and `user_id`='$user_id' and `item_id`='$item_id' ";

            return $this->db_query($sql);
        }

       // Show a person Cart Item
        function showAPersonItemsCart($user_id,$ip_address){
            $sql="SELECT item.item_id, items.item_name,items.item_price,items.item_image, item_cart.item_qty,item_cart.user_id,item_cart.ip_address FROM `item_cart`, `items` WHERE items.item_id=item_cart.item_id and item_cart.user_id ='$user_id' and item_cart.ip_address='$ip_address' ;";
            return $this->fetchAllData($sql);
        }


        /**
         * Actions for Ticket Cart
         */

         function addToTicketCart($ticket_id,$ip_address,$user_id,$ticket_qty){
            $sql="INSERT INTO `ticket_cart`(`ticket_id`, `ip_address`, `user_id`, `ticket_qty`) VALUES ('$ticket_id','$ip_address','$user_id','$ticket_qty')";
            return $this->db_query($sql);
         }

         function deleteTicketCart($ticket_id,$ip_address,$user_id,$item_qty){
            $sql="DELETE FROM `ticket_cart` WHERE `ticket_id`='$ticket_id' and `ip_address`='$ip_address' and `user_id` ='$user_id' and `item_qty`= '$item_qty'";
            return $this->db_query($sql);
         }

         function increaseTicketCartByOne($ticket_id,$ip_address, $user_id,$ticket_qty){
            $sql="UPDATE `ticket_cart` SET `ticket_qty`=$ticket_qty+1 WHERE `ticket_id`='$ticket_id' and `ip_address`='$ip_address' and `user_id`=' $user_id' ";
            return $this->db_query($sql);
         }

         function decreaseTicketCartByOne($ticket_id,$ip_address, $user_id,$ticket_qty){
            $sql="UPDATE `ticket_cart` SET `ticket_qty`=$ticket_qty-1 WHERE `ticket_id`='$ticket_id' and `ip_address`='$ip_address' and `user_id`=' $user_id'";
            return $this->db_query($sql);
         }

         function showAPersonTicketCart($user_id,$ip_address){
            $sql="SELECT ticket.ticket_id,ticket.ticket_type,ticket.ticket_price,ticket.ticket_date, ticket_cart.ip_address,ticket_cart.user_id, ticket_cart.ticket_qty FROM `ticket_cart`,ticket WHERE ticket.ticket_id=ticket_cart.ticket_id and ticket_cart.user_id='$user_id' and ticket_cart.ip_address = '$ip_address' ";
            return $this->db_query($sql);
         }


    }



?>
<?php 
    require_once("../classes/cart_class.php");

    // add a new cart item to the cart
    function addToCart($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id){
        $cart = new Cart;

        return $cart->addToCart($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id);
    }

    function deleteCart($user_id, $ip_address){
        $cart = new Cart;

        return $cart->deleteCart($user_id, $ip_address);
    }

    function updateCart($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id){
        $cart = new Cart;

        return $cart->updateCart($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id);
    }

    function selectCartItems($user_id, $ip_address){
        $cart = new Cart;

        return $cart->selectCartItems($user_id, $ip_address);
    }

    function showPurchaseHistory($user_id, $ip_address){
        $cart = new Cart;

        return $cart->showPurchaseHistory($user_id, $ip_address);
    }

?>
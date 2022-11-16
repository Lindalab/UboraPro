<?php 
    require_once("../classes/cart_class.php");

    // add a new cart item to the cart
    function addToCart_ctr($item_id,$ticket_id, $ip_address, $user_id,$item_qty){
        $cart = new Cart;

        return $cart->addToCart($item_id,$ticket_id, $ip_address, $user_id,$item_qty);
    }

    function deleteCart_ctr($user_id, $ip_address){
        $cart = new Cart;

        return $cart->deleteCart($user_id, $ip_address);
    }

    function updateCart_ctr($item_id, $ticket_id, $ip_add, $user_id, $item_qty){
        $cart = new Cart;

        return $cart->updateCart($item_id, $ticket_id, $ip_add, $user_id, $item_qty);
    }

    function selectCartItems_ctr($user_id, $ip_address){
        $cart = new Cart;

        return $cart->selectCartItems($user_id, $ip_address);
    }

    // function showPurchaseHistory_ctr($user_id, $ip_address){
    //     $cart = new Cart;

    //     return $cart->showPurchaseHistory($user_id, $ip_address);
    // }

    // function updateCartOnPaymentSuccess_ctr($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id,$payment_status){
    //     $cart = new Cart;
    //     return $cart->updateCartOnPaymentSuccess($food_id, $food_qty, $transport_id, $ticket_id, $ip_address, $user_id,$payment_status);
    // }

?>
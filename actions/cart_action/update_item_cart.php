<?php

require_once("../../controllers/cart_controller.php");

$item_id = $_GET['item_id'];
$ip_address = $_SERVER['REMOTE_ADDR'];

session_start();
$user_id = $_SESSION['user_id'];

if (isset($_GET['addButton'])) {
    $result = increaseItemsCartByOne_ctr($item_id, $ip_address, $user_id);
} else if (isset($_GET['subtractButton'])) {
    $result = decreaseItemsCartByOne_ctr($item_id, $ip_address, $user_id);
}

?>


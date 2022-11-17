<?php 

require_once("../../controllers/ticket_controller.php");

$ticket_id = $_GET['ticket_id'];
$ticket_status = $_GET['ticket_status'];
$ticket_type = $_GET['ticket_type']; $ticket_price = $_GET['ticket_price']; $valid_period = $_GET['valid_period'];


$result = updateTicket_ctr($ticket_id, $ticket_status, $ticket_type, $ticket_price, $valid_period);

if($result)
{
    echo "success";
}else{
    echo "failed";
}
?>
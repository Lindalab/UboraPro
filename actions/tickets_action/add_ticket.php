<?php 
    require_once("../../controllers/ticket_controller.php");

    $ticket_status = $_GET['ticket_status'];
    $ticket_type = $_GET['ticket_type']; $ticket_price = $_GET['ticket_price'];
    $ticket_description=$_GET['ticket_description'];
     $valid_period = $_GET['valid_period'];
    
    $result = createTicket_ctr($ticket_status, $ticket_type, $ticket_price,$ticket_description, $ticket_date);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }


?>
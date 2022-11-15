<?php 
    require_once("../../controllers/ticket_controller.php");

    $ticket_id = $_GET['ticket_id'];

    $result = deleteTicket_ctr($ticket_id);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }

?>
<?php 
    
    require_once dirname(__FILE__)."/../../controllers/ticket_controller.php";



    //ticket status 1= active, 2 =inactive
    $ticket_status = 1;
    $ticket_type = $_POST['ticket_type'];
    $ticket_price = $_POST['ticket_price'];
    $ticket_description=$_POST['ticket_description'];
     $valid_period = $_POST['valid_period'];
    
    $result = createTicket_ctr($ticket_status, $ticket_type, $ticket_price,$ticket_description, $ticket_date);

    if($result){
        echo "success";
        //header("location:./../../admin/admin.php");
    }else{
        echo "failed";
    }


?>
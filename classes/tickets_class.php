<?php 

require_once("../settings/db_class.php");

class Tickets extends db_connection{

    function createTicket($ticket_status, $ticket_type, $ticket_price, $valid_period){
        $sql = "INSERT INTO `ticket`(`ticket_status`, `ticket_type`, `ticket_price`, `valid_period`) VALUES ('$ticket_status',' $ticket_type','$ticket_price','$valid_period')";
        return $this->db_query($sql);
        
    }

    function deleteTicket($ticket_id){
        $sql = "DELETE FROM `ticket` WHERE `ticket_id`= $ticket_id";
        return $this->db_query($sql);
    }

    function getAllTickets(){
        $sql = "SELECT * FROM `ticket`";
        return $this->fetchAllData($sql);
    }


    function getOneTicket($ticket_id){
        $sql = "SELECT * FROM `ticket` WHERE `ticket_id` = $ticket_id ";
        return $this->fetchOne($sql);
    }

    function updateTicket($ticket_id, $ticket_status, $ticket_type, $ticket_price, $valid_period){
        $sql = "UPDATE  SET `ticket_status`=' $ticket_status',`ticket_type`='$ticket_type',`ticket_price`='$ticket_price',`valid_period`='$valid_period' WHERE `ticket`= $ticket_id ";

        return $this->db_query($sql);
    }

    function countTicketsSold($ticket_type){
        $sql = "SELECT cart.ticket_id FROM `cart`,ticket WHERE cart.ticket_id=ticket.ticket_id and cart.payment_status = 1 and ticket.ticket_type ='$ticket_type'";
        $result= $this->fetchAllData($sql);
        return $this->countData();
    }
}


?>
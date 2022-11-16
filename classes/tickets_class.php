<?php 

require_once("../settings/db_class.php");

class Tickets extends db_connection{

    function createTicket($ticket_status, $ticket_type, $ticket_price, $ticket_date){
        $sql = "INSERT INTO `ticket`(`ticket_status`, `ticket_type`, `ticket_price`, `ticket_date`) VALUES ('$ticket_status','$ticket_type','$ticket_price','$ticket_date')";
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

    function updateTicket($ticket_id, $ticket_status, $ticket_type, $ticket_price, $ticket_date){
        $sql = "UPDATE  SET `ticket_status`=' $ticket_status',`ticket_type`='$ticket_type',`ticket_price`='$ticket_price',`ticket_date`='$ticket_date' WHERE `ticket`= $ticket_id ";

        return $this->db_query($sql);
    }

    function countTicketsSold(){
        $sql = "SELECT order_id FROM `tickethistroy` ";
        $result= $this->fetchAllData($sql);
        return $this->countData();
    }

    function countTicketsTypeSold($ticket_type){
        $sql = "SELECT order_id FROM `tickethistroy`,ticket WHERE ticket.ticket_id=tickethistroy.ticket_id and ticket.ticket_type='$ticket_type' ";
        $result= $this->fetchAllData($sql);
        return $this->countData();
    }
}


?>
<?php 

require_once("../settings/db_class.php");

class Tickets extends db_connection{

    function createTicket($ticket_status, $ticket_type, $ticket_price, $valid_period){
        $sql = "";

        return $this->db_query($sql);
        
    }

    function deleteTicket($ticket_id){
        $sql = "";

        return $this->db_query($sql);
    }

    function getAllTickets(){
        $sql = "";

        return $this->fetchAllData($sql);
    }

    function getOneTicket($ticket_id){
        $sql = "";

        return $this->db_query($sql);
    }

    function updateTicket($ticket_id, $ticket_status, $ticket_type, $ticket_price, $valid_period){
        $sql = "";

        return $this->db_query($sql);
    }

    function countTickets($award_id){
        $sql = "";

        return $this->fetchAllData($sql);
    }
}


?>
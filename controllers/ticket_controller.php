<?php 
    require_once("../classes/tickets_class.php");

    function createTicket($ticket_status, $ticket_type, $ticket_price, $valid_period){
        $ticket = new Tickets;
        
        return $ticket->createTicket($ticket_status, $ticket_type, $ticket_price, $valid_period);
    }


    function deleteTicket($ticket_id){
        $ticket = new Tickets;

        return $ticket->deleteTicket($ticket_id);
    }

    function getAllTickets(){
        $ticket = new Tickets;

        return $ticket->getAllTickets();
    }

    function getOneTicket($ticket_id){
        $ticket = new Tickets;

        return $ticket->getOneTicket($ticket_id);
    }

    function updateTicket($ticket_id, $ticket_status, $ticket_type, $ticket_price, $valid_period){
        $ticket = new Tickets;

        return $ticket->updateTicket($ticket_id, $ticket_status, $ticket_type, $ticket_price, $valid_period);
    }

    function countTickets($award_id){
        $ticket = new Tickets;

        // return $ticket->countTickets($award_id);
    }



?>
<?php 
    require_once("../classes/tickets_class.php");

    function createTicket_ctr($ticket_status, $ticket_type, $ticket_price, $valid_period){
        $ticket = new Tickets;
        
        return $ticket->createTicket($ticket_status, $ticket_type, $ticket_price, $valid_period);
    }


    function deleteTicket_ctr($ticket_id){
        $ticket = new Tickets;

        return $ticket->deleteTicket($ticket_id);
    }

    function getAllTickets_ctr(){
        $ticket = new Tickets;

        return $ticket->getAllTickets();
    }

    function getOneTicket_ctr($ticket_id){
        $ticket = new Tickets;

        return $ticket->getOneTicket($ticket_id);
    }

    function updateTicket_ctr($ticket_id, $ticket_status, $ticket_type, $ticket_price, $valid_period){
        $ticket = new Tickets;

        return $ticket->updateTicket($ticket_id, $ticket_status, $ticket_type, $ticket_price, $valid_period);
    }

    // function countTickets($award_id){
    //     $ticket = new Tickets;

    //     return $ticket->countTickets($award_id);
    // }


    function countTicketsSold_ctr($ticket_type){
        $ticket = new Tickets;

        // return $ticket->countTickets($award_id);
    }



?>
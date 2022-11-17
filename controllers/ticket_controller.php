<?php 
    require_once("../classes/tickets_class.php");

    function createTicket_ctr($ticket_status, $ticket_type, $ticket_price, $ticket_date){
        $ticket = new Tickets();
        
        return $ticket->createTicket($ticket_status, $ticket_type, $ticket_price, $ticket_date);
    }


    function deleteTicket_ctr($ticket_id){
        $ticket = new Tickets();

        return $ticket->deleteTicket($ticket_id);
    }

    function getAllTickets_ctr(){
        $ticket = new Tickets();

        return $ticket->getAllTickets();
    }

    function getOneTicket_ctr($ticket_id){
        $ticket = new Tickets;

        return $ticket->getOneTicket($ticket_id);
    }

    function updateTicket_ctr($ticket_id, $ticket_status, $ticket_type, $ticket_price, $ticket_date){
        $ticket = new Tickets();

        return $ticket->updateTicket($ticket_id, $ticket_status, $ticket_type, $ticket_price, $ticket_date);
    }



    function countTicketsSold_ctr(){
        $ticket = new Tickets;

        return $ticket->countTicketsSold();
    }

    function countTicketsTypeSold_ctr($ticket_type){
        $ticket = new Tickets;

        return $ticket->countTicketsTypeSold($ticket_type);
    }

    function deletefromTicketCart_ctr($ticket_id,$ip_address,$user_id){
        $ticket = new Tickets;

        return $ticket->deletefromTicketCart($ticket_id,$ip_address,$user_id);

    }



?>
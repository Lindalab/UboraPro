<?php 
    require_once("../controllers/ticket_controller.php");

    function showTypeOfTicket(){
        $data= getAllTickets_ctr();
        foreach($data as $tickets){
            $ticket_id=$tickets['ticket_id'];
            $ticket_type=$tickets['ticket_type'];
            $ticketName=tickettype($ticket_type);
            $ticket_price=$tickets['ticket_price'];
            $ticket_description=$tickets['ticket_description'];
            ticketName($ticket_id,$ticketName,$ticket_price,$ticket_description);
            

        }
    }



    function ticketName($ticket_id,$ticketName,$ticket_price,$ticket_description){
        
        echo "<div class='u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1'>
        <div class='u-border-2 u-border-grey-50 u-container-layout u-container-layout-1'>
          <h4 class='u-text u-text-1'>$ticketName</h4>
          <h2 class='u-text u-text-2'>$ticket_price ghc</h2>
          <p class='u-text u-text-3'>$ticket_description</p>
          <a href='../actions/cart_action/add_tickets_cart.php?ticket_id=$ticket_id' class='u-btn u-button-style u-grey-15 u-hover-palette-2-base u-btn-2'>Order Now</a>
        </div>
      </div>";
       
    }


    function tickettype($ticket_type){
        $ticket_name= "";
        if($ticket_type == 1){
            $ticket_name= "Regular";

        }
        else if($ticket_type == 2){
            $ticket_name= "Couple";

        }
        else if($ticket_type == 3){
            $ticket_name= "VIP";
        }
       return $ticket_name;
    }


   

   


    ?>

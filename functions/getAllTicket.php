<?php
require_once dirname(__FILE__)."/../controllers/ticket_controller.php";

function showTypeOfTicket()
{

    $data = getAllTickets_ctr();
    if ($data) {

        foreach ($data as $tickets) {

            $ticket_id = $tickets['ticket_id'];
            $ticket_type = $tickets['ticket_type'];
            $ticketName = tickettype($ticket_type);
            $ticket_price = $tickets['ticket_price'];
            $ticket_description = $tickets['ticket_description'];

            ticketName($ticket_id, $ticketName, $ticket_price, $ticket_description);
        }
    } else {
        echo "failed to load tickets";
    }
}



function ticketName($ticket_id, $ticketName, $ticket_price, $ticket_description)
{

    echo "<div class='u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1'>
        <div class='u-border-2 u-border-grey-50 u-container-layout u-container-layout-1'>
          <h4 class='u-text u-text-1'>$ticketName</h4>
          <h2 class='u-text u-text-2'>$ticket_price ghc</h2>
          <p class='u-text u-text-3'>$ticket_description</p>
          <a href='../actions/cart_action/add_tickets_cart.php?ticket_id=$ticket_id' class='u-btn u-button-style u-grey-15 u-hover-palette-2-base u-btn-2'>Order Now</a>
        </div>
      </div>";
}


function tickettype($ticket_type)
{
    $ticket_name = "";
    if ($ticket_type == 1) {
        $ticket_name = "Regular";
    } else if ($ticket_type == 2) {
        $ticket_name = "Couple";
    } else if ($ticket_type == 3) {
        $ticket_name = "VIP";
    }
    return $ticket_name;
}


// Show this onAdmin page
function showTicketsAdmin_fnc()
{
    $data = getAllTickets_ctr();
   
     if($data){
        echo "<table class='table'>
            <thead class='table-warning'>
              <tr>
                <th scope='col'>Ticket Name</th>
                <th scope='col'>Ticket Price</th>
                <th scope='col'>Ticket Type</th>
                <th scope='col'>Ticket Description</th>
                <th scope='col'>Delete</th>
                <th scope='col'>Edit</th>
              </tr>
            </thead>
            <tbody>";

        foreach ($data as $tickets) {
            $ticket_id = $tickets['ticket_id'];
            $ticket_type = $tickets['ticket_type'];
            $ticketName = tickettype($ticket_type);
            $ticket_price = $tickets['ticket_price'];
            $ticket_description = $tickets['ticket_description'];
            showTicketRowAdmin_fnc($ticket_id,$ticketName,$ticket_type,$ticket_price,$ticket_description);
        }
        echo "
        </tbody>
    </table>";
     }

      
  
}
function showTicketRowAdmin_fnc($ticket_id,$ticketName,$ticket_type,$ticket_price,$ticket_description)
{
    echo "
    <tr>
    <td>$ticketName</td>
    <td>$ticket_price</td>
      <td>$ticket_type</td>
      <td>$ticket_description</td>
      
    
      <td>
      <a href = '?id=$ticket_id' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
      </td>
      <td>
      <a href = '?id=$ticket_id&tickettype=$ticket_type&ticketPrice=$ticket_price&ticketdescription=$ticket_description' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
      </td>
    </tr>
    ";
  
}

<?php
 
require("../controllers/awards_controller.php");
// Get all brand in a drop down function
 
function getAllAwards()
{
    $data = getAllAwards_ctr();
    $awardId = NULL;
    $awardName = NULL;
    echo "
    <select class='custom-select' name='award_id' id='mybrand' >
    ";
    foreach ($data as $award) {
        $awardId = $award['award_id'];
        $awardName = $award['award_name'];
        myawards( $awardId, $awardName);
    }
    echo "</select>";
}

function  myawards( $awardId, $awardName)
{
    echo "
    <option value='$awardId'>$awardName</option>
    
    ";
}


function diaplayAllAwards()
{
    $data = getAllAwards_ctr();
    echo "<table class='table'>
    <thead class='table-warning'>
      <tr>
        <th scope='col'>Award Name</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($data as $award) {
        $awardId = $award['award_id'];
        $awardName = $award['award_name'];
        displayawards( $awardId, $awardName);
    }
    echo "
    </tbody>
</table>";
}

function  displayawards( $awardId, $awardName)
{
    echo "
    <tr>
      <td>$awardName</td>
      <td>
      <a href = './../actions/items_action/delete_category.php?id=$awardId' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
      </td>
      <td>
      <a href = '?id=$awardId&brName=$awardId' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
      </td>
    </tr>
    ";
}


?>
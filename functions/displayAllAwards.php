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


?>
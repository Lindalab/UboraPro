<?php
 
require("../controllers/item_controller.php");
// Get all brand in a drop down function


function getAllItemCatgory()
{
    $data = getAllFromCategory_ctr();
    $catId = NULL;
    $catName = NULL;
    echo "
    <select class='custom-select' name='category_name' id='mybrand' >
    ";
    foreach ($data as $award) {
        $catId = $award['cat_id'];
        $catName = $award['cat_name'];
        myawards( $catId, $catName);
    }
    echo "</select>";
}

function  myawards( $catId, $catName)
{
    echo "
    <option value='$catId'>$catName</option>
    
    ";
}


?>
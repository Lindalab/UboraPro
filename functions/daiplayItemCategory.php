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


// Get All Category
  function showrandCTable_fnc()
{
    $data = getAllFromCategory_ctr();

    echo "<table class='table'>
    <thead class='table-warning'>
      <tr>
        <th scope='col'>Catgory Name</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($data as $award) {
        $catId = $award['cat_id'];
        $catName = $award['cat_name'];
        showCategoryRow_fnc( $catId, $catName);
    }
    echo "
    </tbody>
</table>";
}


function showCategoryRow_fnc( $catId, $catName)
{
    echo "
    <tr>
      <td>$catName</td>
      <td>
      <a href = './../actions/items_action/delete_category.php?id=$catId' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
      </td>
      <td>
      <a href = '?id=$catId&brName=$catName' class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
      </td>
    </tr>
    ";
}




?>
<?php
//connect to database class
require_once dirname(__FILE__)."/../settings/db_class.php";

/**
*General class to handle all functions 
*/
/**
 *@author Arthur & Gadzi
 *
 */

class item_class extends db_connection
{

    //Create category
    
    function createCategory($cat_name){
        $sql="INSERT INTO `cart`(`cat_name`) VALUES ('$cat_name')";
        return $this->db_query($sql);
    }

    function updateCategory($cat_id,$cat_name){
        $sql="UPDATE `cart` SET `cat_name`='$cat_name' WHERE `cat_id`='$cat_id'";
        return $this->db_query($sql);
    }

    function deleteItemCategory($cat_id){
        $sql="DELETE FROM `cart` WHERE cart_id='$cat_id'";
        return $this->db_query($sql);
    }

    function getAllFromCategory(){
        $sql="SELECT * FROM `cart`";
        return $this->fetchAllData($sql);
    }


	function addToItem($item_cat,$item_name,$item_price,$item_description,$item_image,$item_keyword){
        $sql="INSERT INTO `items`(`item_cat`, `item_name`, `item_price`, `item_description`, `item_image`, `item_keyword`) VALUES ('$item_cat','$item_name','$item_price','$item_description','$item_image','$item_keyword')";
        return $this->db_query($sql);
    }

    function deleteItem($item_id){
        $sql="DELETE FROM `items` WHERE `item_id`=$item_id ";
        return $this->db_query($sql);

    }

    function updateItem($item_id,$item_cat,$item_price,$item_description,$item_image,$item_keyword){
        $sql="UPDATE `items` SET `item_cat`='$item_id',`item_name`='$item_cat',`item_price`='$item_price',`item_description`='$item_description',`item_image`='$item_image',`item_keyword`='$item_keyword' WHERE `item_id`='$item_id' ";
        return $this->db_query($sql);
    }

    function selectAnItem($item_id){
        $sql="SELECT * FROM `items` WHERE `item_id`='$item_id' ";
        return $this->fetchOne($sql);
    }

    function allItems(){
        $sql="SELECT * FROM `items`";
        return $this->fetchAllData($sql);
    }

    function allAnItemCatgeory($item_cat){
        $sql="SELECT * FROM `items` where item_cat='$item_cat' ";
        return $this->fetchAllData($sql);
    }

    function getAllItemCatgeory($cat_name){
        $sql="SELECT items.* FROM `items` JOIN cart where item_cat=cart.cat_id AND cart.cat_name LIKE '%$cat_name%'";
        return $this->fetchAllData($sql);
    }


	

}

?>
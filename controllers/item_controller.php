<?php
require_once dirname(__FILE__)."/../classes/item_class.php";

function createCategory_ctr($cat_name){
    $category = new item_class();
    return $category->createCategory($cat_name);
}

function updateCategory_ctr($cat_id,$cat_name){
    $category = new item_class();
    return $category->updateCategory($cat_id,$cat_name);
}

/**
 * Items
 * */

 function  addToItem_ctr($item_cat,$item_name,$item_price,$item_description,$item_image,$item_keyword){
    $item = new item_class();
    return $item->addToItem($item_cat,$item_name,$item_price,$item_description,$item_image,$item_keyword);
 }

 function  deleteItem_ctr($item_id){
    $item = new item_class();
    return $item->deleteItem($item_id);
 }

 function  updateItem_ctr($item_id,$item_cat,$item_price,$item_description,$item_image,$item_keyword){
    $item = new item_class();
    return $item->updateItem($item_id,$item_cat,$item_price,$item_description,$item_image,$item_keyword);
 }

 function  selectAnItem_ctr($item_id){
    $item = new item_class();
    return $item->selectAnItem($item_id);
 }

 function  allItems(){
    $item = new item_class();
    return $item->allItems();
 }

?>
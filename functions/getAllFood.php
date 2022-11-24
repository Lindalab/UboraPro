<?php 
    require_once("../controllers/item_controller.php");
     
    
    function showfoodItem_fnc($cat_name){
        $data=getAllItemCatgeory($cat_name);
        if($data){
        foreach($data as $food){
            $item_id= $food['item_id'];
            $item_name=$food['item_name'];
            $item_price=$food['item_price'];
            $item_description=$food['item_description'];
            $item_image=$food['item_image'];
            $item_cat=$food['item_cat'];
            $item = $food['cat_name'];
            foodRow_fnc($item_id,$item_name,$item_price, $item_image, $item_cat, $item);
        }
    }
    }

    function foodRow_fnc($item_id,$item_name,$item_price, $item_image, $item_cat, $item){
        echo '
        <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-20 u-size-20-md u-layout-cell-1">
                <div class="u-border-2 u-border-grey-50 u-container-layout u-container-layout-1">
                  <img class="u-image u-image-default u-image-1" src="'.$item_image.'" alt="" data-image-width="1280" data-image-height="853">
                  <h2 class="u-text u-text-1">'.$item_price.' ghc</h2>
                  <p class="u-text u-text-2">'.$item_name.'</p>
                  <a href="../actions/cart_action/add_item_cart.php?item_id='.$item_id.'&cat='.$item_cat.'&item_type='.$item.'" class="u-btn u-button-style u-grey-15 u-hover-palette-2-base u-btn-1">Order Now</a>
                </div>
              </div>
        ';
    }


    




?>



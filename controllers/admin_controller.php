<?php 

    function deleteUser_ctr($user_id, $admin_id){
        $admin = new Admin;
        
        return $admin->deleteUser($user_id, $admin_id);
    }
?>
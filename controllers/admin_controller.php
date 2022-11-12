<?php 

    function deleteUser($user_id, $admin_id){
        $admin = new Admin;
        
        return $admin->deleteUser($user_id, $admin_id);
    }
?>
<?php 

require_once("user_class.php");

class Admin extends Users{
    
    // delete a user from the databse; 
    function deleteUser($user_id, $admin_id){
        $role = $this->checkUserPrivilege($admin_id);
        if($role){
            $sql = " DELETE FROM `user` WHERE `user_id` = '$user_id'";
            return $this->db_query($sql);
        }

        return false;
    }


    
    


}

?>
<?php 

require_once("user_class.php");

class Admin extends Users{
    
    // delete a user from the databse; 
    function deleteUser($user_id, $admin_id){
        $role = $this->checkUserPrivilege($admin_id);
        if($role){
            $sql = "";
            return $this->db_query($sql);
        }

        return false;
    }
    


}

?>
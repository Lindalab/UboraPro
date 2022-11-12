<?php
require_once("../settings/db_class.php");

class Users extends db_connection
{

// add a user to the database
    function registerUser($user_name, $user_email, $user_school_id, $password, $phone_number)
    {
        $sql = "";

        return $this->db_query($sql);
    }
// voting for a candidate under an award
    function vote($award_id, $nomimee_id, $user_id)
    {
        $sql = "";

        return $this->db_query($sql);
    }

    // selects All users in the database
    function getAllUser(){
        $sql = "";

        return $this->fetchAllData($sql);
    }

    //returns a particuler user details  
    function getAUser($user_id){
        $sql = "";

        return $this->fetchOne($sql);
    }

    // used to access the userRole of a user
    function getUserRole($user_id){
        $sql = "";

        return $this->db_query($sql);
    }


    // if login is true, it should return only 1 data from the database
    function login($user_email, $password){
        $sql = "";

        return $this->countData($sql);
    }

    // checks if the user role is 0. if not then the person is not an admin
    function checkUserPrivilege($user_id){
        $role = $this->getUserRole($user_id);

        return $role === 0;
    }  
    
    function updateUser($user_name, $user_email, $user_school_id, $password, $phone_number){
        $sql = "";

        return $this->db_query($sql);
    }
    
}

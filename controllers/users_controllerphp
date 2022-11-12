<?php 
    require_once("../classes/user_class.php");

    function registerUser($user_name, $user_email, $user_school_id,$phone_number, $password){
        $user = new Users;

        return $user->registerUser($user_name, $user_email, $user_school_id,$phone_number, $password);
    }


    function vote($user_id,$nomimee_id,$award_id ){
        $user = new Users;

        return $user->vote($user_id,$nomimee_id,$award_id );
    }

    function getAllUser(){
        $user = new Users;

        return $user->getAllUser();
    }

    function getAUser($user_id){
        $user = new Users;

        return $user->getAUser($user_id);
    }

    function getUserRole($user_id){
        $user = new Users;

        return $user->getUserRole($user_id);
    }

    function login($user_email, $password){
        $user = new Users;

        return $user->login($user_email, $password);
    }

    function checkUserPrivilege($user_id){
        $user = new Users;

        return $user->checkUserPrivilege($user_id);
    }

    function updateUser($user_id,$user_name, $user_email, $user_school_id, $password, $phone_number){
        $user = new Users;

        return $user->updateUser($user_id,$user_name, $user_email, $user_school_id, $password, $phone_number);
    }
?>
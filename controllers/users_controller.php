<?php 
    require_once("../classes/user_class.php");

    function registerUser_ctr($user_name, $user_email, $user_school_id,$phone_number, $password){
        $user = new Users;

        return $user->registerUser($user_name, $user_email, $user_school_id,$phone_number, $password);
    }


    function vote_ctr($user_id,$nomimee_id,$award_id ){
        $user = new Users;

        return $user->vote($user_id,$nomimee_id,$award_id );
    }

    function getAllUser_ctr(){
        $user = new Users;

        return $user->getAllUser();
    }

    function checkEmail_ctr($user_email){
        $user = new Users;

        return $user->checkEmail($user_email);
    }

<<<<<<< HEAD
    function getAUser_ctr($user_id){
=======
    function  getAUserDetails($user_email){
        $user = new Users;

        return $user-> getAUserDetails($user_email);
    }

    function getAUser($user_id){
>>>>>>> 9687e6e98bc3be90dd73d7174b526f2038e505f1
        $user = new Users;

        return $user->getAUser($user_id);
    }

    function getUserRole_ctr($user_id){
        $user = new Users;

        return $user->getUserRole($user_id);
    }

    function login_ctr($user_email, $password){
        $user = new Users;

        return $user->login($user_email, $password);
    }

    function checkUserPrivilege_ctr($user_id){
        $user = new Users;

        return $user->checkUserPrivilege($user_id);
    }

    function updateUser_ctr($user_id,$user_name, $user_email, $user_school_id, $password, $phone_number){
        $user = new Users;

        return $user->updateUser($user_id,$user_name, $user_email, $user_school_id, $password, $phone_number);
    }
?>
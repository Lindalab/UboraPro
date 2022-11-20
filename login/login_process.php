<?php
session_start();
require_once("../controllers/users_controller.php");

if (isset($_POST['login'])) {
    $user_email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $hashed_password = base64_encode($password);

    $login = login_ctr($user_email, $hashed_password);

    if ($login) {
        $_SESSION['user_id'] = $login['user_id'];
        $_SESSION['user_name'] = $login['user_name'];
        $_SESSION['user_email'] = $login['user_email'];
        $_SESSION['user_school_id'] = $login['user_school_id'];
        $_SESSION['phone_number'] = $login['phone_number'];
        $_SESSION['password'] = $login['password'];
        $_SESSION['user_role'] = $login['user_role'];
        $_SESSION['userLogin']=true;   
        
        header("Location: ../index.php");
    } else {
        $_SESSION["log_msg"] = "Invalid Credentials";
        header("Location: Login.php");
        }
<<<<<<< HEAD

        // if($db_email === $email && $db_password === $password){
        //     session_start();
        //     $user_detail =  getAUserDetails_ctr($user_email);
        //     foreach($user_detail as $user){
        //         $_SESSION['user_id'] = $user['user_id'];
        //         $_SESSION['user_name'] = $user['user_name'];
        //         $_SESSION['user_email'] = $user['user_email'];
        //         $_SESSION['user_school_id'] = $user['user_school_id'];
        //         $_SESSION['phone_number'] = $user['phone_number'];
        //         $_SESSION['password'] = $user['password'];
        //         $_SESSION['user_role'] = $user['user_role']; 
                  
        //     }    
        //     echo "success";
        // }else{
        //     echo "failed";
        // }
    }
=======
    
>>>>>>> 0e0c9270af8c5131970bb37f3328d7e825e9c5d5
}



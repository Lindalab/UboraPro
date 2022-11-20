<?php
require("settings/core.php");


function checkUserRoleToDisplay()
{
    if (checkLogin() == true) {
        if (isset($_SESSION['user_role'])) {
            if (checkUserRole($_SESSION['user_role'])) {
                // header("location:./admin.php");
                echo "
                <a href='../admin/admin.php' class='u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-1'>Login As Admin</a>
                ";
            } else {
                // header("location:../index.php");
                echo "
                <a href='./view/voting.php' class='u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-1'>vote Now!</a>
                <a href='./view/Tickets.php' class='u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-2'> Buy tickets!</a>
                ";
            }
        }
    } else {
        // header("location:login/Login.php");
 
        echo "
                <a href='./login/Login.php' class='u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-1'>Login</a>
                <a href='./login/Register.php' class='u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-2'>Register</a>
        
        ";
    }
}

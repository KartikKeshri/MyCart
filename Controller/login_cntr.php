
<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_cntr
 *
 * @author kartik- pc
 */
include_once '../Model/login_set_get.php';
include_once '../Model/login_model.php';
new login_cntr();
class login_cntr {
    //put your code here
    public function __construct() {
        $this->login();
    }
    public function login()
    {
        $user = $_REQUEST["username"];
        $pass = $_REQUEST["password"];
        $lo = new login_set_get();
        $lo->set_username($user);
        $lo->set_password($pass);
        $ch = new login_model();
        $rs = $ch->verify($lo);
        if($rs == "success")
        {
            $_SESSION["login"]=$user;
            $msg = "successfully logged in";
            header("location:../View/index.php");      
        }
        else
        {
            $msg = "Incorrect username or Password";
            header("location:../View/login.php?msg=$msg");
        }
    }
}

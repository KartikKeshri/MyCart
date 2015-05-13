<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signout_cntr
 *
 * @author kartik- pc
 */
new signout_cntr();
class signout_cntr {
    public function __construct() {
        $this->process();
    }
    public function process()
    {   
    if( isset($_SESSION["login"]))
    {
        $_SESSION["sno"]=0;
        
        unset($_SESSION["login"]);
        header("location:../View/index.php");
    }
    }
}

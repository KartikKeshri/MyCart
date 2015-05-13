<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myacnt_cntr
 *
 * @author kartik- pc
 */
new myacnt_cntr();
class myacnt_cntr {
    public function __construct() {
        $this->process();
    }
    public function process()
    {
        if(isset($_SESSION["login"]))
        {
            header("location:../View/myacntshow.php");
        }
        else
        {
            $msg = "Login First!";
            header ("location:../View/index.php?msg2=$msg");
        }
    }
        
}

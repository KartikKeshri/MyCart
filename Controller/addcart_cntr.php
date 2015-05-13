<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addcart_cntr
 *
 * @author kartik- pc
 */
include_once '../Model/DBConn.php';
new addcart_cntr();
class addcart_cntr {
    
//put your code here
    static $i=0;
    public function __construct() {
        $this->process();    
        }
    public function process()
    {
        
        if(isset($_REQUEST["id"]))
        {
            $var = stripcslashes($_REQUEST["id"]);
            $x=$_SESSION["sno"];
            $_SESSION["sno"]=$x+1;
			header("location:../View/addacrt.php?db='$var'");
		}    
        else
        {
                header("location:../View/index.php");
        }
    }
}

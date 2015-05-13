<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of reg_cntr
 *
 * @author kartik- pc
 */
include_once '../Model/reg_set_get.php';
include_once '../Model/reg_model.php';
include_once '../Model/DBConn.php';
new reg_cntr();
class reg_cntr {
    //put your code here
    public function __construct()
    {
        $this->process();
    }
    public function process()
    {
       $reg_user = $_REQUEST["reg_user"];
       $reg_pass = $_REQUEST["reg_pass"];
       $reg_mob = $_REQUEST["reg_mob"];
       $reg_email = $_REQUEST["reg_email"];
       $reg_cnfpass = $_REQUEST["reg_cnfpass"];
       $reg_cntry = $_REQUEST["reg_cntry"];
       $reg_add = $_REQUEST["reg_add"];
       $ac=strlen($reg_user);
	   $reg_email = trim($reg_email);
	   $reg_email = stripslashes($reg_email);
	   $reg_email = htmlspecialchars($reg_email);
	   
	   if($reg_user == ""||strlen($reg_user)<5||strlen($reg_user)>12)
	   {
		   $msg = "Enter a valid username 5-12 in length";
           header("location:../View/Register.php?msg1=$msg");
	   }
	   else if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$reg_email))
	   {
		   $msg = "Enter a valid Email Address"."<br>";
           header("location:../View/Register.php?msg1=$msg");
	   }
	   else if($reg_pass!=$reg_cnfpass)
	   {
		   $msg = "Passwords didn't matched"."<br>"."Try Again!";
           header("location:../View/Register.php?msg1=$msg");
	   }
	   else if(strlen($reg_mob)!=10)
	   {
		   $msg = "Enter a valid mobile number."."<br>";
           header("location:../View/Register.php?msg1=$msg");
	   }
	   
	   else{
	   $reg = new reg_set_get();
       
       $reg->set_reg_user($reg_user);
       $reg->set_reg_pass($reg_pass);
       $reg->set_reg_mob($reg_mob);
       $reg->set_reg_email($reg_email);
       $reg->set_reg_cnfpass($reg_cnfpass);
       $reg->set_reg_cntry($reg_cntry);
       $reg->set_reg_add($reg_add);
       $obj = new reg_model();
       $rs = $obj->insert($reg);
       if($rs == "success")
       {
           header("location:../View/index.php?msg1=$ac");
       }
       else 
       {
           $msg = "Username already registered"."<br>"."Try Again!";
           header("location:../View/Register.php?msg1=$msg");
       }
	   }
    }
}

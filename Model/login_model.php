<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author kartik- pc
 */
include_once 'DBConn.php';
class login_model {
    //put your code here
    public function verify($login)
    {
        $username = $login->get_username();
        $password = $login->get_password();
        $sql = "select * from registration where reg_user = '$username' and reg_pass = '$password'"; 
        
        $db = new DBConn();
        $rs = $db->runQuery($sql);
        $row = mysql_fetch_array($rs);
        if($row[0] == $username )
            return "success" ;
        else
            return "failure";
        
    }
}

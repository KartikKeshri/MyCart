<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myacnt_model
 *
 * @author kartik- pc
 */
include_once 'DBConn.php';
new myacnt_model();
class myacnt_model {
    //put your code here
    public function __construct() {
        $this->process();
    }
    public function process(){
        session_start();
        $ob = new login_set_get();
        $ob = $_SESSION["login"];
        $row = mysql_fetch_array($ob);
        $a = $row[0];
        $db = new DBConn();
        $db->connect();
        $rs = new reg_set_get();
        $sql = "select * from registration where usernmae = $a";
        $rs = $db->runQuery($sql);
        return $rs; 
    }
}

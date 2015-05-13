<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reg_model
 *
 * @author kartik- pc
 */
include_once 'DBConn.php';
class reg_model {
    //put your code here
    function insert($reg)
    {
        $reg_user = $reg->get_reg_user();
        $reg_pass = $reg->get_reg_pass();
        $reg_cnfpass = $reg->get_reg_cnfpass();
        $reg_email = $reg->get_reg_email();
        $reg_cntry = $reg->get_reg_cntry();
        $reg_mob = $reg->get_reg_mob();
        $reg_add = $reg->get_reg_add();
        $sql = "insert into registration values ('$reg_user','$reg_pass','$reg_mob','$reg_email','$reg_cnfpass','$reg_cntry','$reg_add')";
        $db = new DBConn();
        
        $rs = $db->runQuery($sql);
        if($rs == 1)
            return "success";
        else
            return "failure";
    }
    function get_info($reg_user)
    {
        $sql = "select * from registration where reg_user = '$reg_user' ";
        $db = new DBConn();
        $rs = $db->runQuery($sql);
        $obj = new reg_set_get();
        if($row = mysql_fetch_array($rs))
        {
            $obj->set_reg_user($row[0]);
            $obj->set_reg_pass($row[1]);
            $obj->set_reg_mob($row[2]);           
            $obj->set_reg_email($row[3]);
            $obj->set_reg_cnfpass($row[4]);
            $obj->set_reg_cntry($row[5]);
            $obj->set_reg_add($row[6]);
        }
        else
            $obj = "failure";
        return $obj;
    }
}

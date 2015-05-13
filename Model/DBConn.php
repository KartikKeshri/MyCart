<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of DBConn
 *
 * @author kartik- pc
 */
class DBConn {
    private $conn;
    private function connect()
    {
        $this->conn = mysql_connect("localhost:3306","root","");
        if(!$this->conn)
        die("Connection Error".mysql_error());
        else
        mysql_select_db("kkcart",$this->conn);
    }
    public function runQuery($qry)
    {
        $this->connect();
        $rs = mysql_query($qry,$this->conn);
        mysql_close($this->conn);
        return $rs;
    }
}

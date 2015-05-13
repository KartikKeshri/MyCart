<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reg_set_get
 *
 * @author kartik- pc
 */
class reg_set_get {
    //put your code here
    private $reg_user;
    private $reg_pass;
    private $reg_mob;
    private $reg_email;
    private $reg_cnfpass;
    private $reg_cntry;
    private $reg_add;
    public function set_reg_user($reg_user)
    {
        $this->reg_user=$reg_user;
    }
    public function get_reg_user()
    {
        return $this->reg_user;
    }
    public function set_reg_pass($reg_pass)
    {
        $this->reg_pass=$reg_pass;
    }
    public function get_reg_pass()
    {
        return $this->reg_pass;
    }
    public function set_reg_mob($reg_mob)
    {
        $this->reg_mob=$reg_mob;
    }
    public function get_reg_mob()
    {
        return $this->reg_mob;
    }
    public function set_reg_email($reg_email)
    {
        $this->reg_email=$reg_email;
    }
    public function get_reg_email()
    {
        return $this->reg_email;
    }
    public function set_reg_cnfpass($reg_cnfpass)
    {
        $this->reg_cnfpass=$reg_cnfpass;
    }
    public function get_reg_cnfpass()
    {
        return $this->reg_cnfpass;
    }
    public function set_reg_cntry($reg_cntry)
    {
        $this->reg_cntry=$reg_cntry;
    }
    public function get_reg_cntry()
    {
        return $this->reg_cntry;
    }
    public function set_reg_add($reg_add)
    {
        $this->reg_add=$reg_add;   
    }
    public function get_reg_add()
    {
        return $this->reg_add;
    }
}

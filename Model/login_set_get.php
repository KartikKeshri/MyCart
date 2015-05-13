<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_set_get
 *
 * @author kartik- pc
 */
class login_set_get {
    //put your code here
    private $username;
    private $password;
    public function set_username($username)
    {
        $this->username=$username;
    }
    public function get_username()
    {
        return $this->username;
    }
    public function set_password($password)
    {
       $this->password=$password;
    }
    public function get_password()
    {
        return $this->password;
    }
}

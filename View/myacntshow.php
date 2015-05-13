<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    include_once '../Model/reg_set_get.php';
    include_once '../Model/reg_model.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $reg_user = $_SESSION["login"];
            $obj = new reg_model();
            $rs = new reg_set_get();
            $rs = $obj->get_info($reg_user);       
        ?>
        <table align="center" border="10" width="1000" height="200">
            <tr><td colspan="2" bgcolor="blue"><h1>User Details</h1></td></tr>
            <tr><td>Username</td><td><?php echo $rs->get_reg_user();?></td></tr>
            <tr><td>Mobile no.</td><td><?php echo $rs->get_reg_mob();?></td></tr>
            <tr><td>Email</td><td><?php echo $rs->get_reg_email();?></td></tr>
            <tr><td>Country</td><td><?php echo $rs->get_reg_cntry();?></td></tr>
            <tr><td>Address</td><td><?php echo $rs->get_reg_add();?></td></tr>
        </table>
    </body>
</html>

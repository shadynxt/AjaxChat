<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$user = $_COOKIE['user'];
$id = $_COOKIE['id'];
$user_id = $_COOKIE['user_id'];
if(!isset($user)||!isset($id)||!isset($user_id)){
    header("Location: CheckLogin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat APP</title>

<link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="public/css/bootstrap-theme.min.css" />


        
        
        <!--<link rel="shortcut icon" href="/wp-content/themes/omm_wp14/favicon.ico">-->
        <link rel='stylesheet' href='public/css/default-theme.css'/>
        <link rel='stylesheet' href='public/css/hover.css'/>
        <link rel='stylesheet' href='public/css/animate.css'/>
		<link rel='stylesheet' href='public/css/style.css'/>
		
        

<style type="text/css"> 
	.chat .messages{
		border:1px solid #ccc;
		width:450px;
		height:550px;
		padding:10px;
		margin-left:100px;
		margin-top:100px;
		overflow-y:scroll;
		}
	.chat .entry{
		width:450px;
		height:60;
		padding:5px;
		margin-left:100px;
		margin-top:5px;
		background-color:#008dde;
		}		
</style>


</head>

<body>

		
        <!-- start of NavBar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!--Collapse Button in Mobile-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#OurNavBar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand buzz" href="index.php">Try To<span style="color:#008dde;">Chat</span></a>
                </div>
                <div class="collapse navbar-collapse" id="OurNavBar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="index.php">Events</a></li>
              
                        <li><a href="index.php">Services</a></li>
                        <li><a href="index.php">Contact Us</a></li>
                        <li><a href="index.php">About</a></li>
                    </ul>
                    	 <a href="logout.php" class="btn btn-danger pull-right" style="margin-top: 20px;margin-left: 20px">Logout</a>
                         <a href="register.php" class="btn btn-warning pull-right" style="margin-top: 20px;margin-left: 20px">Register</a>
                    
                </div>
                <!-- navbar-collapse -->
            </div>
            <!-- container-fluid -->
        </nav>



<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'inc/cookie.php';
require 'classes/Core.php';
require 'classes/Chat.php';
?>






<div class="chat">
	<div class="messages"></div>
    <textarea class="entry" placeholder="Type your message Here and Press Enter"></textarea>
</div>
		
		
		


      
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<script src="js/chat.js" type="text/javascript"></script>
</body>
</html>
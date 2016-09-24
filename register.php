<?php
       
    
        mysql_connect('127.0.0.1', 'root', 'Admin');
        mysql_select_db('site');


if(isset($_POST['username'])){
    $username = mysql_real_escape_string(stripslashes($_POST['username']));
    //$password =md5(mysql_escape_string($_POST['password']));
    //$full_name = mysql_real_escape_string(stripslashes($_POST['full_name']));
    //$email = mysql_real_escape_string(stripslashes($_POST['email']));
    if(!empty($username)){
        $query = "INSERT INTO users VALUES ('".$username."')";

        mysql_query($query);
        
        echo'<div class="alert alert-success" role="alert"><center>Aded Successfuuly</center></div>';
            
		echo '<meta http-equiv="refresh" content="2; url=checkLogin.php"></head>';
            
            
    }
    
    else
    {
            echo'<div class="alert alert-danger" role="alert"><center>Invlid username or password</center></div>';
    }
    

}
?>


<html>
    <head>
        
       <!-- Latest compiled and minified CSS --> 
<link rel="stylesheet" href="public/css/bootstrap.min.css"> 
<!-- Optional theme -->  
<link rel="stylesheet" href="public/css/bootstrap-theme.min.css"> 
<!-- Latest compiled and minified JavaScript -->  
<script src="public/js/jquery-2.1.1.min.js"></script>
<script src="public/js/bootstrap.min.js"></script> 
 


        

    </head>
    <body>
        <div class="container well col-md-12">
            <div class="container-fluid">
                
                    <form method="POST" action="register.php">
                        <div class="form-group">
                            <label for="username" >UserName</label>
                            <input class="form-control" type="text" id="username" name="username" />
                        </div>
                        
                        <div class="form-group">
                            <label for="password" >Password</label>
                            <input class="form-control" type="password" id="password" name="password" />
                        </div>
                        
                        <div class="form-group">
                            <label for="full_name" >Full_name</label>
                            <input class="form-control" type="text" id="full_name" name="full_name" />
                        </div>
                        <div class="form-group">
                            
                        <div class="form-group">
                            <label for="email" >Email</label>
                            <input class="form-control" type="email" id="email" name="email" />
                        </div>    
                      <div class="form-group">
                            <input class="btn btn-primary form-control" type="submit" name="register" value="Add user" />
                        </div>
                            </div>
                    </form>
                
            </div>
        </div>
     
       
    </body>
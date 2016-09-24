
<?php
	session_start();

	if (isset($_POST['submit']) && !empty($_POST['id']) && !empty($_POST['user'])) {
	    mysql_connect('localhost', 'root', 'Admin');
	    mysql_select_db('site');
	    
	    $id = (int)$_POST['id'];
	    $user = mysql_real_escape_string(htmlentities($_POST['user']));
	    
	    $sql_login = "SELECT * FROM users WHERE user_id=" . $id . " AND username='" . $user . "'";
	    $result = mysql_query($sql_login);
	    $persons = mysql_fetch_array($result);
	    $num = mysql_num_rows($result);

	    if($num > 0){
            setcookie("id", $id, time()+60*60*24);
            setcookie("user", $user, time()+60*60*24);
            setcookie("user_id", $id , time()+60*60*24);
            $_SESSION['user_id'] = $id;
            echo'<div class="alert alert-success" role="alert"><center>Loggedin Successfuuly</center></div>';
            
			echo '<meta http-equiv="refresh" content="2; url=index.php"></head>';
            
            
        }else{
            echo'<div class="alert alert-danger" role="alert"><center>Invlid ID or username</center></div>';
        }
	       
	        //header("Location:index.php");

	    


	}
?>


<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap-theme.min.css" />

</head>
<body>
<div class="col-lg-6">
<form action="checkLogin.php" method="POST">
	<div class="form-group">
    	Enter your ID : <input type="text" class="form-control" name="id" placeholder="ID"/><br>
    </div>
    <div class="form-group">
    Enter your Username :<input type="text" class="form-control" name="user" placeholder="Username"/><br>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="login"/>
</div>
</form>



<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
</body>
</html>

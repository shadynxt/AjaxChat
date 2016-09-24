<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat APP</title>
</head>

<body>
<?php
	class Chat extends Core{
		public function fetchMessages(){
			$this->query("
				
				SELECT `chat`.`message`,`users`.`username`,`users`.`user_id` FROM 
				`chat` Join `users` ON `chat`.`user_id` = `users`.`user_id` 
				ORDER BY `chat`.`timestamp` DESC

			");
			return $this->rows();
			}  
			
		public function throwMessages($user_id , $message){
			$this->query("INSERT iNTO `chat`(`user_id` , `message` , `timestamp`)
			 VALUES(" .(int)$user_id . ",'" . $this->db->real_escape_string(htmlentities($message)). " ' , UNIX_TIMESTAMP())
                             
   "); 
		}
			
		}
?>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat APP</title>
</head>

<body>
<?php
	class Core{
		protected $db , $result;
		private $rows;
		
		public function __construct(){
			$this->db  =  new mysqli('localhost','root','Admin','site');
			
			}
		public function query($sql){
			$this->result  = $this->db->query($sql);
			}
		public function rows(){
			for($x = 1 ; $x <= $this->db->affected_rows ; $x++){
				$this->rows[] = $this->result->fetch_assoc();
				}
 			
			return $this->rows;	
		}
	}
?>
</body>
</html>
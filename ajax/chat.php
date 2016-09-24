<?php
    session_start();
	require '../classes/Core.php';
    require '../classes/Chat.php';

    
    if(isset($_POST['method']) && !empty($_POST['method'])){
        
        $chat = new Chat();
        $method = trim($_POST['method']);
        if($method === 'fetch'){
            
            $messages = $chat->fetchMessages();
            if (empty($messages)){
				echo 'there are no messages in the chat';
             }
            else {
			  foreach ($messages as $message){
                    ?>
						<div class="message">
						<a href="#"><h3 style="color: #008dde;"><?php echo $message['username']." : ". "<span style='color: #000;'>". $message['message']."</span>" ;  ?><h3></a> 
						
						</div>
                    <?php

			
         }     
            }
        }
        else if ($method === 'throw' && isset ($_POST['message'])===TRUE ) {
			$message =  trim($_POST['message']);
                        if(empty($message)===FALSE){
                            $chat->throwMessages($_SESSION['user_id'], $message);
                        }
        }
    }

?>

<?php

            setcookie("user", $user, time()-60*60*24);
            setcookie("id", $id, time()-60*60*24);
            setcookie("user_id", $result['id'], time()-60*60*24);
            header("Location: checkLogin.php");
?>
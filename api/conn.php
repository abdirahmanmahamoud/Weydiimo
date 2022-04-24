<?php
$db = new mysqli('localhost','root','','weydiimo');

if($db->connect_error){
    echo $db->error;
}else{
}

?>
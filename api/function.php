<?php
include 'conn.php';
function username($db,$username){
    $data = '';
    $query = "SELECT * FROM `users` WHERE users.username = '$username'";
    $conn = mysqli_query($db,$query);
    $sax = (mysqli_num_rows($conn));
    if($sax){
        $row = $conn->fetch_assoc();
        $data = $row['email'];
    }else{
        $data = 'null';
    }
    return $data;
}

function user($db,$id){
    $data = '';
    $query = "SELECT * FROM `users` WHERE id = '$id'";
    $co = $db ->query($query);
    if($co){
        $row = $co ->fetch_assoc();
       $userData = [
           $row['id'],$row['First_name'],$row['Last_name'],$row['username'],$row['email'],$row['Joined'],$row['jawaab']
       ];
        $data = $userData;
    }else{
        $data = $db->error; 
    }
   return $data;
}

?>
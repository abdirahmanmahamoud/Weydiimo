<?php
header('content-type: application/json');
include 'conn.php';
session_start();
function Register($db){
    $data =array();
    $sano = monthName($db);
    extract($_POST);
    $code = rand(999999, 111111);
    $s = "INSERT INTO `users`(`First_name`, `Last_name`, `username`, `email`, `password`, `Joined`, `image`, `code`) VALUES ('$First_name','$Last_name','$username','$email','$password','$sano','profile.png','$code')";
    $r = $db->query($s);
    if($r){
        $to = $email;
        $headers = 'from: Weydiimo  \r\n'. 'CC: abdimahdi@macruuftech.com';
        $text = 'asc '.$First_name.'/r/n Verification register code '.$code;
        $subject = 'register weydiimo';
        if($email != null){
            mail($to,$subject,$text,$headers);
           $data = array('status' => true,'data' => 'register successfully.');
        }else{
            $data = array('status' => false,'data' => 'Unable to send email. Please try again.');
        }
    }else{
        $data = array('status' => false, 'data' => $db->error);
    }
    echo json_encode($data);
}

function code($db){
    extract($_POST);
    $data =array();
    $query = "SELECT * FROM `users` WHERE users.email = '$email' AND users.code = '$code'";
    $conn = mysqli_query($db,$query);
    $sax = (mysqli_num_rows($conn));
    if($sax){
        $row = $conn->fetch_assoc();
       $query1 = "UPDATE `users` SET `code`='0' WHERE users.email = '$email'";
       $conn1 = $db ->query($query1);
       if($conn1){
            $_SESSION['id'] = $row['id'];
            $data = array('status' => true,'data' => 'Verification successfully.');
       }else{
           $data = array('status' => false, 'data' => $db->error);
       }
    }else{
        $data = array('status' => false, 'data' => 'Verification code is not match');
    }
    echo json_encode($data);
}

function login($db){
    extract($_POST);
    $data = array();
    $query = "SELECT * FROM `users` WHERE users.username = '$username' AND users.password = '$password'";
    $conn = mysqli_query($db,$query);
    $sax = (mysqli_num_rows($conn));
    if($sax){
        $row = $conn->fetch_assoc();
        if($row['code'] == '0'){
            $_SESSION['id'] = $row['id'];
            $data = array('status' => true,'data' => 'sax');
        }else{
            $mess = [
                'false',$row['username'],'no code'
            ];
            $data = array('status' => true,'data' => $mess);
        }
    }else{
        $data = array('status' => false,'data' => 'username and password is not match');
    }
    echo json_encode($data);
}


function monthName($db){
    $month = date('m');
    $monthName = '';
    if($month == '1'){
        $monthName = 'Jan'; }else{ if($month == '2'){ $monthName = 'Feb';}else{ if($month == '3'){ $monthName = 'Mar';}else{if($month == '4'){$monthName = 'Apr'; }else{if($month == '5'){$monthName = 'May';}else{if($month == '6'){$monthName = 'Jane';}else{if($month == '7'){ $monthName = 'Jul';}else{if($month == '8'){$monthName = 'Aug';}else{if($month == '9'){$monthName = 'Sep';}else{if($month == '10'){$monthName = 'Oct';}else{if($month == '11'){$monthName = 'Nov';}else{if($month == '12'){$monthName = 'Dec';}}}}}}}}}}}
    }
    $sano = $monthName.' '.date('Y');
    return $sano;
}

function jawaab($db){
    $data =array();
    extract($_POST);
    $s = "SELECT * FROM `users` WHERE username = '$username'";
    $r = $db->query($s);
    if($r){
        $row = $r->fetch_assoc();
        $jawaab = $row['jawaab'] + 1;
        $s = "UPDATE `users` SET `jawaab`='$jawaab' WHERE username = '$username'";
        $r = $db->query($s);
        if($r){
            $data = array('status' => true,'data' => 'ok');
        }else{
            $data = array('status' => false, 'data' => $db->error);
        }
    }else{
        $data = array('status' => false, 'data' => $db->error);
    }
    echo json_encode($data);
}

if(isset($_POST['action'])){
    $action = $_POST['action'];
    $action($db);
}
else{
    echo json_encode(array('status' => false, 'data' => 'action ma jiro'));
}
?>
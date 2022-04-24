<?php
session_start();
include 'api/function.php';
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}else{
    header('location: login.php');
}
$userDate = user($db,$id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weydiimo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="index.php">
                Weydiimo
            </a>
        </div>
        <div class="rit">   
            <div class="username">username-ka <spam class="name"><?php echo $userDate[3];?></spam></div>
            <div class="jbw">jawaab <spam><?php echo $userDate[6];?></spam></div>
            <a href="login-out.php" id="login-out"><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
    </div>
    <div class="body">
       
    </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>
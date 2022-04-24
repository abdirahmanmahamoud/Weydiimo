<?php
include 'api/function.php';
if(isset($_GET['username'])){
    $username =$_GET['username'];
}else{
    header('location: index.php');
}
$user = username($db,$username);
if($user == 'null'){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="conn">
        <div class="box">
            <div class="header">
            Verification
            </div>
            <p id="Verification">fariin ayaa udirnay uu ar Verification code email kaan <?php echo $user; ?></p>
            <div class="from">
                <form id="VerificationForm">
                    <div class="error"></div>
                    <div class="suus"></div>
                    <div class="row">
                        <label>Verification code</label>
                        <input type="text" name="code" id="code" placeholder="code Verification" required>
                    </div>
                    <input type="hidden" name="email" id="email" value="<?php echo $user; ?>">
                    <input type="submit" name="submit" class="btn" value="submit">
                </form>
            </div>
            <div class="footer">
              </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="Verification.js"></script>
</body>
</html>
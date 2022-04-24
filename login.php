<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="conn">
        <div class="box">
            <div class="header">
                Login
            </div>
            <div class="from">
                <form id="formLogin">
                <div class="error"></div>
                    <div class="row">
                        <label>Username</label>
                        <input type="text" name="username" id="username" placeholder="username" required>
                    </div>
                    <div class="row">
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="password" required>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Login">
                </form>
            </div>
            <div class="footer">
                <a href="./register.php">register</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="login.js"></script>
</body>
</html>
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
                Register
            </div>
            <div class="from">
                <form id="from">
                    <div class="error"></div>
                    <div class="row">
                        <label>First name</label>
                        <input type="text" name="First_name" id="First_name" placeholder="First name" required>
                    </div>
                    <div class="row">
                        <label>Last name</label>
                        <input type="text" name="Last_name" id="Last_name" placeholder="Last name" required>
                    </div>
                    <div class="row">
                        <label>Username</label>
                        <input type="text" name="username" id="username" placeholder="username" required>
                    </div>
                    <div class="row">
                        <label>Email</label>
                        <input type="email" name="email" id="email" placeholder="email" required>
                    </div>
                    <div class="row">
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="password" required>
                    </div>
                    <div class="row">
                        <label>Confirm Password</label>
                        <input type="password" name="password2" id="password2" placeholder="Confirm Password" required>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Register now">
                </form>
            </div>
            <div class="footer">
                <a href="login.php">login</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="register.js"></script>
</body>
</html>
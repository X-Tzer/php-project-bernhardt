<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" />
</head>

<body>
    <div class="logo"></div>
    <div class="center">
        <h1>Log in</h1>
        <form method="post" action="process.php">
            <div class="txt_field">
                <input type="text" required name="username" />
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required name="password" />
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Login" />
            <div class="signup_link">
                Not a member? <a href="register.php">Register Now</a>
            </div>
        </form>
    </div>
</body>

</html>
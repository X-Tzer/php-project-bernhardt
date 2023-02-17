<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/signup.css" />
  </head>
  <body>
    <div class="container">
      <div class="center">
        <h1>Sign up</h1>
        <form method="post" action="register_process.php">
          <div class="txt_field">
            <input type="text" required name="firstname" />
            <span></span>
            <label>First Name</label>
          </div>
          <div class="txt_field">
            <input type="text" required name="lastname" />
            <span></span>
            <label>Last Name</label>
          </div>
          <div class="txt_field">
            <input type="text" required name="username" />
            <span></span>
            <label>Username</label>
          </div>
          <div class="txt_field">
            <input type="email" required name="mail" />
            <span></span>
            <label>Email</label>
          </div>
          <div class="txt_field">
            <input type="password" required name="password" />
            <span></span>
            <label>Password</label>
          </div>
          <div class="txt_field">
            <input type="number" required name="phone" />
            <span></span>
            <label>Phone</label>
          </div>
          <input type="submit" value="Sign up" name="signup" />
          <div class="signup_link">
            Have an account?<a href="login.php"> Log in</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

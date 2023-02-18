<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> <?php
          echo basename($_SERVER['PHP_SELF']);
          ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" integrity=sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- font-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="css/style1.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
  <?php
  require_once "classesandfunctions.php";
  $s = new Session();
  $s->ses_start();
  $u = $_SESSION['username'];
  $db = new db_connect();
  $con = $db->connectdb();
  $r = admin_check($con);

  if (empty($u)) {
    header("Location:login.php");
  }
  ?>
  <header>
    <div class="container-fliud">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="logo.png" style="height: 80px; margin-left: -100px" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="welcome.php">Welcome</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="roomselect.php">Rooms</a>
              </li>

              <?php
              while ($rou = $r->fetch_assoc()) {
                if ($rou["role"] == 1) {
              ?>
                  <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                  </li>
              <?php
                }
              }
              ?>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
            </ul>
            <div class="log-controls">
            <form class="me-auto" method="post" action="profile.php">
              <button type="submit" name="logout" class="btn btn-light">
              <?php echo $u ?>
              </button>
            </form>
            <form class="me-auto" method="post" action="logout.php">
                  <button type="submit" name="logout" class="btn btn-light">
                    Logout
                  </button>
                </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity=sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <!-- font-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>
<body>
  <header>
    <div class="container-fliud">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"
            ><img
              src="../assets/logo.png"
              style="height: 80px; margin-left: -100px"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarScroll"
            aria-controls="navbarScroll"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul
              class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
              style="--bs-scroll-height: 100px"
            >
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Modules</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blogs</a>
              </li>
              <li class="nav-item dropdown">
                <div class="dropdown">
                  <a href="#" class="nav-link">Workshop</a>
                  <div class="dropdown-item">
                    <a href="#">Registration</a>
                    <a href="#">Design your idea</a>
                    <a href="#">Recent projects</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <div class="dropdown">
                  <a href="#" class="nav-link">Departments</a>
                  <div class="dropdown-item">
                    <a href="#">BBS</a>
                    <a href="#">CSIT</a>
                    <a href="#">CA</a>
                    <a href="#">BE.Arch</a>
                    <a href="#">BE Civil</a>
                    <a href="#">Others</a>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
              </li>
              <li class="nav-item dropdown">
                <div class="dropdown">
                  <a class="nav-link" href="#">Join Us</a>
                  <div class="dropdown-item">
                    <a href="register.php">Register</a>
                    <a href="login.php">Log in</a>
                  </div>
                </div>
              </li>
            </ul>
            <!-- <form class="me-auto" method="post" action="../php/logout.php">
               <input
                type="search"
                class="form-control text-center"
                id="search-input"
                placeholder="Search here..."
                aria-label="Search docs for..."
                autocomplete="off"
                data-bd-docs-version="5.0"
                style="border-radius: 20px; width: 260px; height: 45px"
              /> 
              <button type="submit" name="logout" class="btn btn-light">
                Logout
              </button>
            </form>
             -->
          </div>
        </div>
      </nav>
    </div>


  </header>
</body>
</html>
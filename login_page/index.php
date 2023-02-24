<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <style>
    #box {
      width: 482px;
      height: 540px;
      box-shadow: inset 1px 1px 40px 0 rgba(0, 0, 0, 0.45);
      border-bottom: 2px solid #fff;
      border-right: 2px solid #fff;
      margin: 5% auto 0 auto;
      background: url("images/My\ project.jpg");
      background-size: cover;
      border-radius: 5px;
      overflow: hidden;
    }

    #overlay {
      background: rgba(44, 62, 80,0.5);;
      text-align: left;
      padding:20.5% 5% ;
      opacity: 0;
      -webkit-transition: opacity 0.25s ease;
      -moz-transition: opacity 0.25s ease;
    }

    #box:hover #overlay {
      opacity: 1;
    }

    #plus {
      top: 200px;
      font-family: Anton;
      letter-spacing: 5px;
      font-weight: 900;
      /* color: rgba(255, 255, 255, 0.85); */
      color : #f6f6f6;
      font-size: 45px;
    }
  </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet'>
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
  <script src="script.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand me-2" href="./index.php">
        <img src="images/Dreams B.jpg" height="100" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
      </a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse navbar-right" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item h5">
            <a class="nav-link" href="../About/index.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link h5" href="https://letusdream.org/">Dreams</a>
          </li>
        </ul>
        <!-- Left links -->



      </div>
    </div>
    <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6 ">
        <div id="box">

          <div id="overlay">
            <span id="plus">D - Desire
              <br>
              R - Readiness
              <br>
              E - Empowerment
              <br>
              A - Action
              <br>
              M - Mastery
              <br>
              S - Success</span>
          </div>

        </div>
      </div>
      <div class="col-lg-6">
        <div class="form-wrapper px-0 mx-0">
          <h1>Login</h1>
          <form action="login.php" method="post">
            <div class="form-item">
              <label for="email"></label>
              <input type="email" name="email" class="email" required="required" placeholder="Email Address"></input>
            </div>
            <div class="form-item">
              <label for="password"></label>
              <input type="password" name="password" class="password" required="required" placeholder="Password"></input>
            </div>

            <a href="forgot_password.php">Forgot Password</a>
            <a href="" class="clear float-right">Cancel</a>
            <div class="button-panel">
              <input type="submit" class="button" title="Login " value="Login"></input>

            </div>
          </form>
          <div class="form-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '../LOGIN_PAGE/login.php' ?>
</body>
<script src="storage.js"></script>

</html>
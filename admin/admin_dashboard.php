<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Bootstrap CSS dont change -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>Dashboard</title>
</head>

<body>
  <!-- Write code below -->
  <!-- header start -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a class="navbar-brand" href="#">PHYSIO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION["admin"]; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right text-right rounded-0" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Change Password</a>
              <a class="dropdown-item" href="main/logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- header ends -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <img src="PHYISO.jpeg" alt="logo" width="80" height="80" border="1"
          style="left:0" class="img-circle">
        <div class="p-3 mb-2 bg-white text-black float-right">
          <i class="fa fa-phone"></i>&nbsp;<a href="tel:9442655664">9442655664</a><br>
          <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:venkateshsru@gmail.com">venkateshsru@gmail.com</a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <ul class="list-unstyled">
            <li class="m-2"><input class"btn btn-light" type="button" name="" value="Admin"></li>

            <li class="m-2"><input class"btn btn-light" type="button" name="" value="Doctor"></li>

            <li class="m-2"><input class"btn btn-light" type="button" name="" value="Patient_info"></li>

            <li class="m-2"><input class"btn btn-light" type="button" name="" value="Appointment"></li>

            <li class="m-2"><input class"btn btn-light" type="button" name="" value="Rehabitalitation"></li>

            <li class="m-2"><input class"btn btn-light" type="button" name="" value="About"></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- write code above -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS  dont change -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
</body>

</html>
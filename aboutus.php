<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blood Bank | About Us</title>
  <link rel="shortcut icon" href="assets/images/logo2.jpg" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
      color: #333;
      overflow-x: hidden;
    }

    /* Loader */
    .loader_bg {
      position: fixed;
      z-index: 999999;
      background: #fff;
      width: 100%;
      height: 100%;
    }
    .loader {
      border: 0 solid transparent;
      border-radius: 50%;
      width: 150px;
      height: 150px;
      position: absolute;
      top: calc(50vh - 75px);
      left: calc(50vw - 75px);
    }
    .loader:before, .loader:after {
      content: '';
      border: 1em solid #e60000;
      border-radius: 50%;
      width: inherit;
      height: inherit;
      position: absolute;
      top: 0;
      left: 0;
      animation: loader 2s linear infinite;
      opacity: 0;
    }
    .loader:before { animation-delay: .5s; }
    @keyframes loader {
      0% { transform: scale(0); opacity: 0; }
      50% { opacity: 1; }
      100% { transform: scale(1); opacity: 0; }
    }

    /* Navbar */
    .navbar {
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .navbar-brand {
      font-weight: 700;
      color: #e60000 !important;
    }
    .nav-link {
      color: #333 !important;
      transition: 0.3s;
      font-weight: 500;
    }
    .nav-link:hover {
      color: #e60000 !important;
    }

    /* Hero Section */
    .hero-section {
      background: url('assets/images/banner2.0.jpeg') center center/cover no-repeat;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 0 2px 8px rgba(0,0,0,0.6);
    }
    .hero-section h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    /* About Section */
    .about-section {
      padding: 80px 0;
    }
    .about-section h2 {
      font-weight: 600;
      color: #e60000;
      margin-bottom: 25px;
    }
    .about-section p {
      line-height: 1.8;
      color: #555;
    }
    .about-section img {
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }

    /* Footer */
    footer {
      background: #1c1c1c;
      color: #bbb;
      padding-top: 60px;
    }
    footer h5 {
      color: #fff;
      font-weight: 600;
      margin-bottom: 20px;
    }
    footer a {
      color: #bbb;
      text-decoration: none;
    }
    footer a:hover {
      color: #e60000;
    }
    .footer-bottom {
      text-align: center;
      padding: 20px 0;
      border-top: 1px solid rgba(255,255,255,0.1);
      margin-top: 40px;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>

  <!-- Loader -->
  <div class="loader_bg">
    <div class="loader"></div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa-solid fa-droplet"></i> Blood Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Seeker</a></li>
          <li class="nav-item"><a class="nav-link active" href="aboutus.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="contactus.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="text-center">
      <h1>About Blood Bank</h1>
      <p class="lead">Saving lives, one donation at a time</p>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h2>Who We Are</h2>
          <?php
          $mysqli = mysqli_connect('localhost', 'root', '', 'db_blood');
          $query ="SELECT * FROM tbl_about"; 
          $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
          if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()){
                  echo "<p>" .$row['about'] ."</p>";
              }
          }
          ?>
        </div>
        <div class="col-lg-6 text-center">
          <img src="assets/images/banner.jpg" class="img-fluid" alt="About Image">
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-4">
          <h5>Contact Information</h5>
          <p><i class="fas fa-map-marker-alt me-2"></i> DHA Suffa, Karachi, Pakistan</p>
          <p><i class="far fa-envelope me-2"></i> blood@gmail.com</p>
          <p><i class="fas fa-phone me-2"></i> +92 9751791203 | +92 9159669599</p>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="#">Seeker</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h5>Quick Message</h5>
          <form>
            <input type="text" class="form-control mb-2" placeholder="Enter Name">
            <input type="text" class="form-control mb-2" placeholder="Enter Mobile no">
            <input type="email" class="form-control mb-2" placeholder="Enter Email Address">
            <textarea class="form-control mb-2" rows="2" placeholder="Your Message"></textarea>
            <button class="btn btn-danger w-100">Send Request</button>
          </form>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 BloodBank.com | All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    setTimeout(function(){
      $('.loader_bg').fadeToggle();
    }, 1200);
  </script>
</body>
</html>

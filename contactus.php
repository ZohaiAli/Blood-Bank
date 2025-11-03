<?php
session_start();
include "admin/config.php";

$success = false;

if (isset($_POST['message'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $sql = "INSERT INTO tbl_contact (c_name, c_email, c_message, subject) 
            VALUES ('$name','$email','$message','$subject')";
    $rs = mysqli_query($con, $sql);
    if ($rs) {
        $success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Blood Bank</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="assets/images/logo2.jpg" type="image/x-icon">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: #fafafa;
    }
    nav.navbar {
      background: #a70f00;
    }
    nav a.nav-link {
      color: #fff !important;
      font-weight: 500;
    }
    nav a.nav-link:hover {
      color: #ffd5d0 !important;
    }
    .contact-section {
      padding: 80px 0;
    }
    .contact-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      padding: 40px;
    }
    footer {
      background: #222;
      color: #ccc;
      padding: 30px 0;
      text-align: center;
    }
    footer a {
      color: #ff5851;
      text-decoration: none;
    }
    footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="index.php">Blood Bank</a>
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Seeker</a></li>
        <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link active" href="contactus.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Banner -->
<section class="text-center text-white py-5" style="background:url('assets/images/banner2.0.jpeg') center/cover;">
  <div class="container py-5">
    <h1 class="fw-bold display-5">Contact Blood Bank</h1>
    <p class="lead">We’d love to hear from you. Reach out with any questions or feedback.</p>
  </div>
</section>

<!-- Contact Form -->
<section class="contact-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <?php if ($success): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Thank you!</strong> Your message has been sent successfully.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <div class="contact-card">
          <h3 class="mb-4 fw-semibold text-center text-danger">Let's Talk</h3>
          <form method="POST" action="">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name *</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Email *</label>
                <input type="email" name="email" class="form-control" required>
              </div>
              <div class="col-md-12">
                <label class="form-label">Subject</label>
                <input type="text" name="subject" class="form-control">
              </div>
              <div class="col-md-12">
                <label class="form-label">Message *</label>
                <textarea name="message" class="form-control" rows="4" required></textarea>
              </div>
              <div class="col-12 text-center mt-3">
                <button type="submit" class="btn btn-danger btn-lg px-5">Send Message</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <p class="mb-2">© 2025 BloodBank.com | All Rights Reserved.</p>
    <p class="small">
      DHA Suffa | Karachi, Pakistan | 
      <a href="mailto:blood@gmail.com">blood@gmail.com</a> | +91 9751791203
    </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

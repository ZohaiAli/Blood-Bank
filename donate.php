<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blood Bank | Donate Blood</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="assets/images/logo2.jpg" type="image/x-icon">

  <style>
    :root {
      --primary: #b30000;
      --dark: #111;
      --light: #f8f9fa;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #ffe5e5, #fffafa);
      scroll-behavior: smooth;
    }

    /* Navbar */
    .navbar {
      background: var(--primary);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .navbar-brand {
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .nav-link {
      color: #fff !important;
      font-weight: 500;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #ffbdbd !important;
    }

    /* Hero Section */
    .hero {
      position: relative;
      height: 85vh;
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url('assets/images/banner2.0.jpeg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: 700;
      animation: fadeInDown 1s ease;
    }

    .hero-content p {
      font-size: 1.2rem;
      opacity: 0.9;
      animation: fadeInUp 1.2s ease;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Form Section */
    .donation-section {
      margin-top: -80px;
      padding: 3rem 0;
    }

    .donation-form {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(10px);
      border-radius: 16px;
      padding: 2.5rem;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .donation-form:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.15);
    }

    .donation-form h2 {
      color: var(--primary);
      font-weight: 700;
      margin-bottom: 1.5rem;
    }

    .form-label {
      font-weight: 600;
      color: var(--dark);
    }

    .form-control,
    .form-select {
      border-radius: 10px;
      border: 1px solid #ddd;
      padding: 0.75rem;
      transition: 0.3s;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 0.2rem rgba(179, 0, 0, 0.25);
    }

    .btn-primary {
      background-color: var(--primary);
      border: none;
      border-radius: 10px;
      padding: 0.75rem 2.5rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #870000;
      transform: translateY(-2px);
    }

    /* Footer */
    footer {
      background: var(--primary);
      color: white;
      padding: 1rem 0;
      text-align: center;
      font-weight: 500;
      margin-top: 4rem;
      box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
      .hero-content h1 {
        font-size: 2.2rem;
      }

      .donation-section {
        margin-top: -40px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="bi bi-droplet-half me-2"></i>Blood Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active" href="#">Donate</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Seeker</a></li>
          <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="contactus.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Donate Blood, Save Lives</h1>
      <p>Your kindness can give someone another chance at life.</p>
    </div>
  </section>

  <!-- Donation Form -->
  <section class="donation-section container">
    <div class="donation-form">
      <h2 class="text-center">Blood Donation Form</h2>
      <form method="POST" action="#">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Enter your name" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Blood Group</label>
            <select class="form-select" name="blood_group" required>
              <option value="" disabled selected>Choose...</option>
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>AB+</option>
              <option>AB-</option>
              <option>O+</option>
              <option>O-</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" name="age" min="18" max="65" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender" required>
              <option value="" disabled selected>Select gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label">Location</label>
            <select class="form-select" name="location" required>
              <option value="" disabled selected>Choose location</option>
              <option>Nazimabad</option>
              <option>DHA</option>
              <option>Liyari</option>
              <option>Tariq Road</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label">CNIC</label>
            <input type="text" class="form-control" name="cnic" placeholder="XXXXX-XXXXXXX-X"
              pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Last Donation Date</label>
            <input type="date" class="form-control" name="last_donate" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="phone" placeholder="03XXXXXXXXX" pattern="[0-9]{11}" required>
          </div>

          <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p class="mb-0">&copy; 2025 BloodBank.com | All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

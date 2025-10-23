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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="assets/images/logo2.jpg" type="image/x-icon">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
      scroll-behavior: smooth;
    }

    /* Navbar */
    .navbar {
      background: #A70F00;
    }

    .navbar-brand,
    .nav-link {
      color: #fff !important;
      font-weight: 500;
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #ffdddd !important;
    }

    /* Hero Section */
    .hero {
      position: relative;
      height: 70vh;
      background: url('assets/images/banner2.0.jpeg') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.25rem;
    }

    /* Form Card */
    .donation-form {
      background: white;
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      margin-top: -80px;
    }

    .form-label {
      font-weight: 600;
    }

    .btn-primary {
      background-color: #A70F00;
      border: none;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #870C00;
    }

    footer {
      background: #A70F00;
      color: white;
      padding: 1rem 0;
      text-align: center;
      margin-top: 5rem;
    }

    @media (max-width: 768px) {
      .hero h1 {
        font-size: 2rem;
      }

      .donation-form {
        margin-top: -40px;
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Blood Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>
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
      <p>Your small act of kindness can save someone's life today.</p>
    </div>
  </section>

  <!-- Donation Form -->
  <section class="container donation-form">
    <h2 class="text-center mb-4 text-danger fw-bold">Blood Donation Form</h2>
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
          <input type="text" class="form-control" name="cnic" placeholder="XXXXX-XXXXXXX-X" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" required>
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
          <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
        </div>
      </div>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p class="mb-0">&copy; 2025 BloodBank.com | All Rights Reserved.</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

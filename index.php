<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blood Bank — About Us</title>
  <link rel="shortcut icon" href="assets/images/logo2.jpg" type="image/x-icon">

  <!-- Fonts & Icons -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root{
      --bg: #0f1115;
      --card: #101318;
      --muted: #9aa3b2;
      --accent: #e11b23; /* blood-red */
      --glass: rgba(255,255,255,0.04);
    }

    html,body{
      height:100%;
      background: linear-gradient(180deg, #07080a 0%, #0f1115 100%);
      font-family: 'Inter', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      color: #dee6ef;
      -webkit-font-smoothing:antialiased;
    }

    /* Loader */
    .loader_bg{
      position: fixed;
      inset:0;
      z-index:9999;
      display:flex;
      align-items:center;
      justify-content:center;
      background: rgba(5,6,8,0.85);
      backdrop-filter: blur(4px);
    }
    .loader_ring{
      width:110px;height:110px;border-radius:50%;position:relative;
      box-shadow: 0 0 40px rgba(225,27,35,0.12), inset 0 0 18px rgba(225,27,35,0.06);
      display:flex;align-items:center;justify-content:center;
    }
    .loader_ring:after{
      content:""; width:84px;height:84px;border-radius:50%;
      border:5px solid rgba(225,27,35,0.12);
      border-top-color: var(--accent);
      animation: spin 1.2s linear infinite;
    }
    @keyframes spin{to{transform:rotate(360deg)}}

    /* Navbar */
    .navbar {
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-bottom: 1px solid rgba(255,255,255,0.03);
      backdrop-filter: blur(6px);
    }
    .navbar-brand{
      font-weight:700;color:var(--accent);
      letter-spacing:0.4px;
    }
    .nav-link{ color: #cbd6df !important; font-weight:500; }
    .nav-link:hover{ color: white !important; }
    .btn-ghost{
      color: var(--accent); border:1px solid rgba(225,27,35,0.12); background:transparent;
    }

    /* Hero */
    .hero {
      background-image: linear-gradient(180deg, rgba(0,0,0,0.35), rgba(0,0,0,0.6)), url('assets/images/slider/banner.jpeg');
      background-size: cover;
      background-position: center;
      padding: 80px 0;
      border-bottom: 1px solid rgba(255,255,255,0.03);
    }
    .hero h1{ font-size:2.8rem; font-weight:700; color:#fff; text-shadow: 0 10px 30px rgba(0,0,0,0.6); }
    .hero p{ color: var(--muted); font-size:1.05rem; margin-top:0.5rem;}

    /* Content sections */
    .section {
      padding: 60px 0;
    }
    .card-dark{
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border: 1px solid rgba(255,255,255,0.03);
      border-radius: 12px;
      padding:24px;
      box-shadow: 0 6px 30px rgba(2,6,12,0.6);
    }
    .muted { color: var(--muted); }

    /* Gallery */
    .gallery-grid img{ width:100%; height:200px; object-fit:cover; border-radius:10px; transition: transform .35s ease; }
    .gallery-grid img:hover{ transform: scale(1.03); }

    /* Process icons */
    .process .icon-box{
      width:88px;height:88px;border-radius:12px;background:var(--card);display:flex;align-items:center;justify-content:center;
      border: 1px solid rgba(255,255,255,0.03);
      box-shadow: 0 8px 30px rgba(0,0,0,0.6);
    }

    /* Blog cards */
    .news-card{ background:var(--card); border-radius:12px; overflow:hidden; transition: transform .25s ease; }
    .news-card:hover{ transform: translateY(-6px); }
    .news-card .image img{ width:100%; height:170px; object-fit:cover; }

    /* Footer */
    footer{
      background: #06070a; color: #9fb0c3; padding: 48px 0 20px;
      border-top: 1px solid rgba(255,255,255,0.03);
    }
    footer a{ color: #9fb0c3; text-decoration:none; }
    footer a:hover{ color: #fff; }

    /* Responsive tweaks */
    @media (max-width: 767px){
      .hero h1{ font-size:1.8rem;}
      .gallery-grid img{ height:140px; }
    }
  </style>
</head>
<body>

  <!-- Loader -->
  <div class="loader_bg" id="page-loader">
    <div class="loader_ring" role="status" aria-label="Loading"></div>
  </div>

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg py-3">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa-solid fa-droplet"></i> BloodBank</a>
      <button class="navbar-toggler btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" style="color:#fff"></i>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Seeker</a></li>
          <li class="nav-item"><a class="nav-link active" href="aboutus.php">About Us</a></li>
          <li class="nav-item ms-2"><a class="btn btn-sm btn-outline-light" href="contactus.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <header class="hero">
    <div class="container text-center">
      <h1>About Blood Bank</h1>
      <p class="muted">Saving lives through organized, safe and timely blood donation and distribution — one drop at a time.</p>
      <div class="mt-4">
        <a href="donate.php" class="btn btn-danger btn-lg shadow-sm" style="background:var(--accent); border-color:transparent;">Donate Now</a>
        <a href="#process" class="btn btn-ghost ms-2">How it works</a>
      </div>
    </div>
  </header>

  <!-- ABOUT SECTION -->
  <section class="section">
    <div class="container">
      <div class="row g-4 align-items-center">
        <div class="col-lg-6">
          <div class="card-dark">
            <h3 class="mb-3" style="color: #fff;">Who we are</h3>
            <p class="muted">We provide safe blood storage, organized availability and support to patients and hospitals. Below is our description from the database.</p>

            <!-- PHP: fetch about content -->
            <div class="mt-3" style="color:#dbe9f5;">
              <?php
                $mysqli = mysqli_connect('localhost', 'root', '', 'db_blood');
                $query ="SELECT * FROM tbl_about";
                $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo "<p style='line-height:1.7;margin-bottom:0.8rem;'>" . htmlspecialchars($row['about']) . "</p>";
                    }
                } else {
                    echo "<p class='muted'>No 'about' content found. Please add text in tbl_about table.</p>";
                }
              ?>
            </div>

            <div class="mt-4 d-flex gap-2">
              <a href="contactus.php" class="btn btn-outline-light btn-sm">Contact Us</a>
              <a href="donate.php" class="btn btn-danger btn-sm" style="background:var(--accent);">Become a Donor</a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 text-center">
          <div class="card-dark">
            <img src="assets/images/slider/about.jpg" alt="About Image" class="img-fluid rounded" style="max-height:360px; object-fit:cover;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- GALLERY -->
  <section class="section">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Gallery</h4>
        <p class="muted mb-0">Moments from our drives and camps</p>
      </div>

      <div class="row g-3 gallery-grid">
        <div class="col-6 col-md-3"><img src="assets/images/gallery/g1.jpg" alt="g1" class="shadow-sm"></div>
        <div class="col-6 col-md-3"><img src="assets/images/banner1.jpg" alt="g2" class="shadow-sm"></div>
        <div class="col-6 col-md-3"><img src="assets/images/banner.jpg" alt="g3" class="shadow-sm"></div>
        <div class="col-6 col-md-3"><img src="assets/images/gallery/g4.jpg" alt="g4" class="shadow-sm"></div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section id="process" class="section bg-transparent">
    <div class="container">
      <div class="text-center mb-4">
        <h4>Donation Process</h4>
        <p class="muted">From arrival to leaving — simple and safe steps.</p>
      </div>

      <div class="row g-4 process">
        <div class="col-6 col-md-3 text-center">
          <div class="icon-box mb-3 mx-auto"><i class="fa-solid fa-file-lines fa-2x" style="color:var(--muted)"></i></div>
          <h6 class="mb-0">Registration</h6>
          <p class="muted small">Quick form & basic tests</p>
        </div>
        <div class="col-6 col-md-3 text-center">
          <div class="icon-box mb-3 mx-auto"><i class="fa-solid fa-user-check fa-2x" style="color:var(--muted)"></i></div>
          <h6 class="mb-0">Screening</h6>
          <p class="muted small">Health & eligibility check</p>
        </div>
        <div class="col-6 col-md-3 text-center">
          <div class="icon-box mb-3 mx-auto"><i class="fa-solid fa-hand-holding-droplet fa-2x" style="color:var(--muted)"></i></div>
          <h6 class="mb-0">Donation</h6>
          <p class="muted small">Safe collection by technicians</p>
        </div>
        <div class="col-6 col-md-3 text-center">
          <div class="icon-box mb-3 mx-auto"><i class="fa-solid fa-heart-circle-check fa-2x" style="color:var(--muted)"></i></div>
          <h6 class="mb-0">Save Life</h6>
          <p class="muted small">Processed & Ready for patients</p>
        </div>
      </div>
    </div>
  </section>

  <!-- BLOG / NEWS -->
  <section class="section">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Latest</h4>
        <a href="#" class="muted small">Read All →</a>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <div class="news-card p-0">
            <div class="image"><img src="assets/images/blog/blog_01.jpg" alt=""></div>
            <div class="p-3">
              <h5>Services</h5>
              <p class="muted small">Our blood bank services include storage, organizing and availability for hospitals and emergencies.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="news-card p-0">
            <div class="image"><img src="assets/images/blog/blog_02.jpg" alt=""></div>
            <div class="p-3">
              <h5>Registration</h5>
              <p class="muted small">Use our online booking service to schedule donation slots and speed up your visit.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="news-card p-0">
            <div class="image"><img src="assets/images/blog/blog_03.jpg" alt=""></div>
            <div class="p-3">
              <h5>Seeker</h5>
              <p class="muted small">If you're seeking a specific blood type, follow our step-by-step guide for faster assistance.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="news-card p-0">
            <div class="image"><img src="assets/images/blog/blog_04.jpg" alt=""></div>
            <div class="p-3">
              <h5>Donor</h5>
              <p class="muted small">Each donation can save lives — learn eligibility rules and preparation tips before you come.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-4">
          <h5 style="color:#fff;">Contact Information</h5>
          <p class="muted mb-1"><i class="fa-solid fa-map-marker-alt me-2"></i> DHA Suffa, Karachi, Pakistan</p>
          <p class="muted mb-1"><i class="fa-regular fa-envelope me-2"></i> blood@gmail.com</p>
          <p class="muted"><i class="fa-solid fa-phone me-2"></i> +92 9751791203</p>
        </div>

        <div class="col-md-4">
          <h5 style="color:#fff;">Quick Links</h5>
          <ul class="list-unstyled muted">
            <li><a href="index.php">Home</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php">Contact</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h5 style="color:#fff;">Quick Message</h5>
          <form>
            <input class="form-control mb-2" placeholder="Enter Name" />
            <input class="form-control mb-2" placeholder="Enter Mobile no" />
            <input class="form-control mb-2" placeholder="Enter Email Address" />
            <textarea class="form-control mb-2" rows="2" placeholder="Your Message"></textarea>
            <button class="btn btn-danger w-100" style="background:var(--accent); border-color:transparent;">Send Request</button>
          </form>
        </div>
      </div>

      <div class="text-center muted small mt-4">
        <p>© <?php echo date('Y'); ?> BloodBank.com — All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Hide loader after DOM loads
    window.addEventListener('load', function(){
      const loader = document.getElementById('page-loader');
      if(loader) setTimeout(()=> loader.style.display='none', 550);
    });

    // Optional: smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', function(e){
        e.preventDefault();
        document.querySelector(this.getAttribute('href'))?.scrollIntoView({behavior:'smooth'});
      });
    });
  </script>
</body>
</html>


<?php 
session_start(); 


?>
<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blood Bank</title>
    <link rel="shortcut icon" href="assets/images/logo2.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

<style>

.loader_bg{
    position: fixed;
    z-index: 999999;
    background: #fff;
    width: 100%;
    height: 100%;
}
.loader{
    border: 0 soild transparent;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top: calc(50vh - 75px);
    left: calc(50vw - 75px);
}
.loader:before, .loader:after{
    content: '';
    border: 1em solid #A70F00;
    border-radius: 50%;
    width: inherit;
    height: inherit;
    position: absolute;
    top: 0;
    left: 0;
    animation: loader 2s linear infinite;
    opacity: 0;
}
.loader:before{
    animation-delay: .5s;
}
@keyframes loader{
    0%{
        transform: scale(0);
        opacity: 0;
    }
    50%{
        opacity: 1;
    }
    100%{
        transform: scale(1);
        opacity: 0;
    }
}




#abc{
  width:100%;
  height:40px;
  background-size: cover;
  position:relative;
}

nav{
  width: 100%;
  height: 100px;
  line-height: 50px;
}
nav ul{
  float: left;
  margin-right: 10px;
}
nav ul li{
  list-style-type: none;
  display: inline-block;
  transition: 0.7s all;
}


nav ul li a{
  text-decoration: none;
  color: black;
  padding: 20px;
  
}
nav ul li:hover{
  background-color:red;
  color:white;
}


nav ul li a:hover{
  color:white;
}
</style>

</head>
<body>
        
        
        <div class="loader_bg">
    <div class="loader"></div>
</div>
    <!-- ################# Banner Starts Here#######################--->

      <div id="abc">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="#">seeker</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
    </nav>
	
</div>
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">

            </ol>
            
                
                    <img class="d-block w-100" src="assets/images/banner2.0.jpeg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
      			
               

            </div>
   
       


    </div>

	         <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
            
           </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2 style="color:black;">About Blood Bank</h2>
					<!--*************** select code ***************-->
                  <?php
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";

$mysqli = mysqli_connect('localhost', 'root', '', 'db_blood');
//Create the select query
$query ="SELECT * FROM tbl_about"; 
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
if($result->num_rows > 0) {
    //Loop through results
    while($row = $result->fetch_assoc()){
        echo "<p>" .$row['about'] ."</p>";
    }
}
?>
		</div>
                <div class="col-md-6">
                    <img src="assets/images/banner.jpg" alt="">
                </div>
            </div>
       </div>
   </section>
	     <!--*************** Footer  Starts Here *************** -->
     <footer id="contact" class="container-fluid">
        <div class="container">
            
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>DHA Suffa, Karachi, Pakistan</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>blood@gmail.com </p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+91 9751791203 <br> +91 9159669599</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                   <div class="row no-margin mt-2">
                    <h2>Quick Links</h2>
                   <ul >
                        <li ><a href="index.php" style="color:white;">Home</a></li>
            <li><a href="donate.php" style="color:white;">Donate</a></li>
            <li><a href="#" style="color:white;">seeker</a></li>
            <li><a href="aboutus.php" style="color:white;">About us</a></li>
            <li><a href="contactus.php" style="color:white;">Contact Us</a></li>

                    </ul>
                    </div>
                   

                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <div class="form-body">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <input type="text" placeholder="Enter Mobile no" class="form-control">
                            <input type="text" placeholder="Enter Email Address" class="form-control">
                            <input type="text" placeholder="Your Message" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">Send Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © bloodbank.com</a> | All right reserved.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    
    
</body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
	
	  setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
  </script>
 
</html>

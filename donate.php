<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   

    <!-- Title Page-->
    <title>Blood Bank</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
 <link rel="shortcut icon" href="assets/images/logo2.jpg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
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

    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Donation Form</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                            <label class="label">Blood Group</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>AB</option>
                                    <option>O</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">AGE</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="AGE">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-2">
                        <div class="input-group">
                            <label class="label">Location</label>
                            <div class="rs-select js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Nazimabad</option>
                                    <option>DHA</option>
                                    <option>Liyari</option>
                                    <option>Tariq Road</option>
                                </select>
                                
                            </div>
							
                        </div>
						
						</div>
						<div class="col-2">
                                <div class="input-group">
                                    <label class="label">CNIC</label>
                                    <input class="input--style-4" type="text" name="cnic">
                                </div>
                            </div>
						<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last Donate</label>
                                    <input type="date"class="input--style-2" type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-12" style="text-align:center;">
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>

       <!--*************** Footer  Starts Here *************** -->
     <footer id="contact" class="container-fluid">
       
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
  <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
		
    <!-- Main JS-->
    <script src="js/global.js"></script>
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

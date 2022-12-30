<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Enkripsi Caesar Chiper</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">
    <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="proses_enkripsi.php">Enkripsi</a></li>
          <li><a href="dekripsi.php">Dekripsi</a></li>
        </ul>
    </div>
    
  </header><!-- #header -->
  
  <section id="contact-info">
        <div class="container">
                <div class="center">
                        <br><br><br><br>         
                        
                </div> 
            <div class="row contact-wrap"> 
            <br>
            <form method="GET" action="proses_enkripsi.php">
                <div class="row contact-wrap">
                <div class="col-lg-13 col-lg-offset-2 text-left">
                     <div class="form-group">
                            <label> 
                               <h2>Enkripsi Caesar Chiper</h2> 
                               <h4>Masukkan Text</h4>
                            </label>
                            <hr>
                     </div>
                     <div class="form-group">
                            <label> Plaintext </label>
                    </div>
                    <div class="form-group">
                           <textarea id="text" name="text" rows="4" cols="50"></textarea>
                    </div>
                    
                    <div class="col-sm-15 col-sm-offset-1 text-right">
                        <div class="form-group">
                        <br>
                            <button type="submit" name="proses" class="btn btn-info" value="proses" >Proses</button>
              </form>
                         </div>
                    </div>
                      
                    </div>
				</div>
		
        </div>
  </section>

 

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
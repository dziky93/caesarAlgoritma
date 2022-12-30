<?php
//include 'proses.php'; 
function Cipher($ch, $key)
  {
      if (!ctype_alpha($ch))
          return $ch;
  
      $offset = ord(ctype_upper($ch) ? 'A' : 'a');
      return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
  }
  
  function Encipher($input, $key)
  {
      $output = "";
  
      $inputArr = str_split($input);
      foreach ($inputArr as $ch)
          $output .= Cipher($ch, $key);
  
      return $output;
  }
  
  function Decipher($input, $key)
  {
      return Encipher($input, 26 - $key);
  }
$cipherText = $_GET['text'];
$plainText = Decipher($cipherText, 3);
echo $text_asli;
echo $plainText;
?>

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
          <li><a href="index.php">Home</a></li>
          <li><a href="proses_enkripsi.php">Enkripsi</a></li>
          <li class="active"><a href="dekripsi.php">Dekripsi</a></li>
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
            <form method="GET" action="proses.php">
                <div class="row contact-wrap">
                <div class="col-lg-13 col-lg-offset-2 text-left">
                     <div class="form-group">
                            <label> 
                               <h2>Hasil Dekripsi Caesar Chiper</h2> 
                            </label>
                            <hr>
                     </div>
                     <div class="form-group">
                            <label> Chipertext </label>
                    </div>
                    <div class="form-group">
                           <textarea id="text" name="text" rows="4" cols="50"><?php echo $plainText;  ?> </textarea>
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
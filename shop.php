
<?php

$DB_NAME = 'start';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
session_start();
$type=$_SESSION['shop_name'];
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($connection->connect_error) {
  // die("Connecton failed: ".$connection->connect_error);
  die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
} else {
//  echo "Connection Successful<br>";
}

echo $type;
$sql=" SELECT * FROM $type ";









?>







<!DOCTYPE html>
<html lang="en">
   <head>




 <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

 <script type="text/javascript">
    
$('#i1').click(function()
{
   window.location="food.php";
});









 </script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="keywords" content="barber,barber shop,men’s,haircut,head,shave,beard,eyebrow,color,shampoo">
      <meta name="author" content="YasirKareem">
      <title>FRISEUR</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
      <link rel="stylesheet" href="css\animated-headlines.css">
      <link rel="stylesheet" href="css\datepicker.css">
      <link rel="stylesheet" href="css\styles-slideshow.css">
      <link rel="apple-touch-icon" sizes="57x57" href="img\favicons\apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="img\favicons\apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="img\favicons\apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="img\favicons\apple-touch-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="img\favicons\apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="img\favicons\apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="img\favicons\apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="img\favicons\apple-touch-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="img\favicons\apple-touch-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="32x32" href="img\favicons\favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="192x192" href="img\favicons\android-chrome-192x192.png">
      <link rel="icon" type="image/png" sizes="16x16" href="img\favicons\favicon-16x16.png">
      <link rel="manifest" href="img\favicons\manifest.json">
      <link rel="mask-icon" href="img\favicons\safari-pinned-tab.svg" color="#bdd96b">
      <link rel="shortcut icon" href="img\favicons\favicon.ico">
      <meta name="apple-mobile-web-app-title" content="Frisuer">
      <meta name="application-name" content="Frisuer">
      <meta name="msapplication-TileColor" content="#272e32">
      <meta name="msapplication-TileImage" content="https://friseur.000webhostapp.com/img/favicons/mstile-144x144.png">
      <meta name="msapplication-config" content="https://friseur.000webhostapp.com/img/favicons/browserconfig.xml">

   </head>
   <style type="text/css">
      .back
      {
         color: white;
         background-color: rgb(51,51,0);
      }
      
   </style>
   <body>
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <div class="container navbar-toggle collapsed" onclick="myFunction(this)" data-toggle="collapse" data-target="#menuicon" aria-expanded="true" role="button">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
               </div>
               <a class="navbar-brand" href="#"><img src="img\logo\logo.png" alt="logo"></a> 
            </div>
            <div class="collapse navbar-collapse" id="menuicon">
               <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#header">HOME<span class="sr-only">(current)</span></a></li>
                  <li><a href="#services">SERVICES</a></li>
                  <li><a href="#about-us">ABOUT US</a></li>
                  <li><a href="#team">ASSOCIATES</a></li>
                  <li><a href="#prices">OFFERS</a></li>
                  <li><a href="#appointment">REGISTER</a></li>
                  <li><a href="#testmonials">TESTMONIALS</a></li>
                  <li><a href="#contact-us">CONTACT US</a></li>
               </ul>
            </div>
         </div>
      </nav>

       <section id="services" class="services section-padding">
         <div class="title">
            <h2><?php echo $type; ?> SHOP</h2>
            <hr class="primary">
            <hr class="primary-right">
         </div>
         <div class="services-items no-gutter" id="i1">
            <div class="row nopadding">
     
<?php
 
foreach ($connection->query($sql) as $row) {
       echo '
               <div class="col-lg-3 col-md-6 col-sm-12 nopadding">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\2.png" alt="HAIR STYLING"> 
                              <h3>' .$row['item_name'] .'<br /><br />' . $row['price']  . '</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>' .$row['specification'] .'<br /><br />' . $row['availability'] . '</p>
                        </div>
                     </div>
                  </div>
                   <div class="btn-group btn-primary-lg" width="100%"><button type="button" class="btn btn-primary"  >VISIT SHOP</button></div>
               </div>
              
            
          ';
   
}


?>
  </div>
         </div>
</section>








      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/danielgindi-jquery-backstretch/2.1.15/jquery.backstretch.min.js"></script> <script src="js\bootstrap-datepicker.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> <script type="text/javascript" src="js\animated-headlines.js"></script> <script src="js\script-slideshow.js"></script>
   </body>
</html>
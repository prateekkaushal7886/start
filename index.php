<!DOCTYPE html>
<html lang="en">
   <head>




 <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

 <script type="text/javascript">

function call(item)
{
   

  $.ajax({  
type: "POST",  
 url: "getshop.php", 
 data: "album="+ item,
 success: function(response) {
  window.location=response;
    }
});
}








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
      <header id="header" class="hero-img">
         <div class="hero-overlay">
            <div class="hero-text">
               <h1 class="cd-headline slide"> <span>LETS CONNECT TO THE</span> <span class="cd-words-wrapper"><b class="is-visible">MARKET</b><b>KGP</b></span></h1>
            </div>
            <div class="scroll-down"> <i class="fa fa-angle-down" aria-hidden="true"></i> </div>
         </div>
      </header>
      <section id="services" class="services section-padding">
         <div class="title">
            <h2>TYPES OF SERVICES</h2>
            <hr class="primary">
            <hr class="primary-right">
         </div>
         <div class="services-items no-gutter" id="i1">
            <div class="row nopadding">
               <div class="col-lg-3 col-md-6 col-sm-12 nopadding">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\2.png" alt="HAIR STYLING"> 
                              <h3>FOOD</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>We provide you all the list of eateries within the campus of IIT  Kgp along with the menu of all the food items available at their updated price.We might also provide you with certain offers.</p>
                        </div>
                     </div>
                  </div>
                  <div class="btn-group btn-primary-lg" width="100%"><button type="button" class="btn btn-primary"  onclick="call('food');">VISIT SHOP</button></div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 nopadding" id="i2">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\hair-cut.png" alt="HAIR CUT"> 
                              <h3>HAIR CUT</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>We provide you the list of all saloons within the campus of IIt Kgp along with the updated price list of various services provided by the shops.We might also grant you offers and early servings on booking with us.</p>
                        </div>
                     </div>
                  </div>
                  <div class="btn-group btn-primary-lg" width="100%"><button type="button" class="btn btn-primary"  onclick="call('haircut');">VISIT SHOP</button></div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 nopadding" id="i3">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\8.png" alt="HAIR COLOR"> 
                              <h3>ELECTRONICS</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>We provide you the list of all electronics shops within the campus of IIt Kgp along with the updated price list of various electronics items provided by the shops.We might also grant you offers  on booking with us.</p>
                        </div>
                     </div>
                  </div>
                  <div class="btn-group btn-primary-lg" width="100%"><button type="button" class="btn btn-primary" onclick="call('electronics'); ">VISIT SHOP</button></div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 nopadding" id="i4">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\13.png" alt="HAIR WASH"> 
                              <h3>SPORTS</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>We provide you the list of all sports shops within the campus of IIt Kgp along with the updated price list of various sports items provided by the shops.We might also grant you offers  on booking with us.</p>
                        </div>
                     </div>
                  </div>
                  <div class="btn-group btn-primary-lg" width="100%"><button type="button" class="btn btn-primary"  onclick="call('sports');">VISIT SHOP</button></div>
               </div>
              <!-- <div class="col-lg-3 col-md-6 col-sm-12 nopadding">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\face-mask.png" alt="FACE MASK"> 
                              <h3>FACE MASK</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 nopadding">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\shave.png" alt="SHAVE"> 
                              <h3>SHAVE</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 nopadding">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\beard-trim.png" alt="BEARD TRIM"> 
                              <h3>BEARD TRIM</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 nopadding">
                  <div class="item-services-container">
                     <div class="item-services">
                        <div class="front">
                           <div class="icon-holder">
                              <img src="img\services\moustache-trim.png" alt="MUSTACHE TRIM"> 
                              <h3>MUSTACHE TRIM</h3>
                           </div>
                        </div>
                        <div class="back">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was</p>
                        </div>
                     </div>
                  </div>
               </div>-->
            </div>
         </div>
      </section>
      <div id="about-us" class="about-us">
         <div class="about-us-overlay">
            <div class="container">
               <div class="about-us-content">
                  <div class="about-us-text">
                     <h3>Who we are</h3>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem tronic typesetting Ipsum.</p>
                     <div class="social">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                           <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section id="team" class="team section-padding">
         <div class="title">
            <h2>ASSOCIATES</h2>
            <hr class="primary">
            <hr class="primary-right">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="item-services-container">
                     <div class="item-team">
                        <div class="front-team">
                           <div class="img-team-1"></div>
                        </div>
                        <div class="back-team">
                           <div class="text-holder">
                              <h3>TERRY EMERSON</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                              <div class="social-team">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="item-services-container">
                     <div class="item-team">
                        <div class="front-team">
                           <div class="img-team-2"></div>
                        </div>
                        <div class="back-team">
                           <div class="text-holder">
                              <h3>JEREMY PELLEGRINO</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                              <div class="social-team">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="item-services-container">
                     <div class="item-team">
                        <div class="front-team">
                           <div class="img-team-3"></div>
                        </div>
                        <div class="back-team">
                           <div class="text-holder">
                              <h3>NAVEEN GARCIA</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                              <div class="social-team">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="item-services-container">
                     <div class="item-team">
                        <div class="front-team">
                           <div class="img-team-4"></div>
                        </div>
                        <div class="back-team">
                           <div class="text-holder">
                              <h3>DOMINIC HOLLOWAY</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                              <div class="social-team">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="item-services-container">
                     <div class="item-team">
                        <div class="front-team">
                           <div class="img-team-5"></div>
                        </div>
                        <div class="back-team">
                           <div class="text-holder">
                              <h3>IAN O'QUINN</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                              <div class="social-team">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="item-services-container">
                     <div class="item-team">
                        <div class="front-team">
                           <div class="img-team-6"></div>
                        </div>
                        <div class="back-team">
                           <div class="text-holder">
                              <h3>JOSH FOX</h3>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                              <div class="social-team">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--
      <section id="prices" class="prices">
         <div class="prices-overlay section-padding">
            <div class="title">
               <h2>OFFERS</h2>
               <hr class="primary">
               <hr class="primary-right">
            </div>
            <div class="container">
               <div class="row">
                  <ul>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>MEN’S HAIRCUT</h3>
                           <p>$15.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>TAPER HAIRCUT</h3>
                           <p>$18.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>HEAD LINEUP</h3>
                           <p>$5.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>HEAD SHAVE</h3>
                           <p>$25.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>BEARD LINEUP</h3>
                           <p>$15.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>CLEAN SHAVE</h3>
                           <p>$15.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>EYEBROW</h3>
                           <p>$7.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>HAIR COLOR</h3>
                           <p>$30.00 & up</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>HIGHLIGHT COLOR</h3>
                           <p>$35.00 & up</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>CUSTOM HAIRCUT</h3>
                           <p>Call for price</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>MEN’S FACIAL</h3>
                           <p>$50.00 & up</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>BOWL FADE</h3>
                           <p>$25.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>MEN’S BLEACH</h3>
                           <p>$20.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>HAIR SHAMPOO</h3>
                           <p>$5.00</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>HAIR CURLING</h3>
                           <p>Call for price</p>
                        </div>
                     </li>
                     <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="text-prices">
                           <h3>HEAD MASSAGE</h3>
                           <p>$20.00</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>-->
      <section id="appointment" class="appointment section-padding">
         <div class="title">
            <h2>REGISTER</h2>
            <hr class="primary">
            <hr class="primary-right">
         </div>
         <div class="container">
            <div class="row">
               <div class="appointment-up">
                  <div class="opening-time col-lg-6 col-md-6 col-sm-12">
                     <h3>OPENING TIME</h3>
                     <div class="appointment-text">
                        <p class="pull-left">Monday to Wednesday</p>
                        <p class="pull-right">07:00 am - 22:00 pm</p>
                        <div class="clearfix"></div>
                        <p class="pull-left">Friday</p>
                        <p class="pull-right">07:00 am - 22:00 pm</p>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="closing-time col-lg-6 col-md-6 col-sm-12">
                     <h3>CLOSING TIME</h3>
                     <div class="appointment-text">
                        <p class="pull-left">Monday to Wednesday</p>
                        <p class="pull-right">12:00 am - 14:00 pm</p>
                        <div class="clearfix"></div>
                        <p class="pull-left">Sunday</p>
                        <p class="pull-right">Weekend</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="appointment-down">
                  <form>
                     <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12"> <input class="datepicker" type="text" name="date" placeholder="Date"> </div>
                     <div class="form-select col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <select name="time">
                           <option disabled="" selected="">Time 
                           <option value="1">07:00 am 
                           <option value="2">08:00 am 
                           <option value="3">09:00 am 
                           <option value="4">10:00 am 
                           <option value="5">11:00 am 
                           <option value="6">12:00 pm 
                           <option value="7">13:00 pm 
                           <option value="8">14:00 pm 
                           <option value="9">15:00 pm 
                           <option value="10">19:00 pm 
                           <option value="11">17:00 pm 
                           <option value="12">18:00 pm 
                        </select>
                     </div>
                     <div class="form-select col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <select name="service">
                           <option disabled="" selected="">Service 
                           <option value="1">Men’s Haircut 
                           <option value="2">Taper Haircut 
                           <option value="3">Head Lineup 
                           <option value="4">Head Shave 
                           <option value="5">Beard Lineup 
                           <option value="7">Eyebrow 
                           <option value="8">Hair Color 
                           <option value="9">Highlight Color 
                           <option value="10">Custom Haircut 
                           <option value="11">Men’s Facial 
                           <option value="12">Bowl Fade 
                           <option value="13">Men’s Bleach 
                           <option value="14">Hair Shampoo 
                           <option value="15">Hair Curling 
                           <option value="16">Head Massage 
                        </select>
                     </div>
                     <div class="form-select col-lg-3 col-md-6 col-sm-12 col-xs-12">
                        <select name="stylist">
                           <option disabled="" selected="">Stylist 
                           <option value="1">Terry Emerson 
                           <option value="2">Jeremy Pellegrino 
                           <option value="3">Naveen Garcia 
                           <option value="4">Dominic Holloway 
                           <option value="5">Ian O'quinn 
                           <option value="6">Josh Fox 
                        </select>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> <input class="" type="text" name="name" placeholder="Name"> </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> <input class="" type="text" name="phone" placeholder="Phone"> </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> <input class="" type="email" name="email" placeholder="Email"> </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <textarea placeholder="Notes"></textarea> </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <input class="" type="submit" value="BOOK NOW"> </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <section id="testmonials" class="testmonials">
         <div class="testmonials-overlay section-padding">
            <div class="title">
               <h2>TESTMONIALS</h2>
               <hr class="primary">
               <hr class="primary-right">
            </div>
            <div class="container">
               <div class="row">
                  <div id="carousel-testmonials" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner" role="listbox">
                        <div class="item active">
                           <img src="img\testmonials\1.jpg" alt=""> 
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                           <h3>ABU ALSHUWQ</h3>
                        </div>
                        <div class="item">
                           <img src="img\testmonials\2.jpg" alt=""> 
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                           <h3>RAFIQ</h3>
                        </div>
                        <div class="item">
                           <img src="img\testmonials\3.jpg" alt=""> 
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                           <h3>RAMAN</h3>
                        </div>
                     </div>
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-testmonials" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testmonials" data-slide-to="1"></li>
                        <li data-target="#carousel-testmonials" data-slide-to="2"></li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="contact-us" class="contact-us contact-us-section-padding">
         <div class="title">
            <h2>CONTACT US</h2>
            <hr class="primary">
            <hr class="primary-right">
         </div>
         <div class="container">
            <div class="row">
               <form action="#">
                  <div class="col-lg-3"> <input type="text" name="name" placeholder="Name"> </div>
                  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> <input class="" type="text" name="phone" placeholder="Phone"> </div>
                  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> <input class="" type="email" name="email" placeholder="Email"> </div>
                  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> <input class="" type="text" name="subject" placeholder="Subject"> </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <textarea placeholder="Message"></textarea> </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> <input class="" type="submit" value="SEND"> </div>
               </form>
            </div>
         </div>
      </section>
      <div id="scroll-top"> <span><i class="fa fa-chevron-up" aria-hidden="true"></i></span> </div>
      <footer class="section-padding">
         <div class="container">
            <div class="row">
               <div class="footer-about-us col-lg-4 col-md-4">
                  <img src="img\logo\logo.png" alt="logo"> 
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <div class="social">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a> </li>
                     </ul>
                  </div>
               </div>
               <div class="address col-lg-4 col-md-4">
                  <div class="address-align">
                     <h3>ADDRESS</h3>
                     <hr class="primary">
                     <hr class="primary-right">
                     <ul>
                        <li> <i class="fa fa-map-marker fa-address" aria-hidden="true"></i> <a href="#">Gartenstraße 9, 6832 Sulz</a></li>
                        <li> <i class="fa fa-phone fa-address" aria-hidden="true"></i> <a href="#">050 8455 3420</a></li>
                        <li> <i class="fa fa-envelope fa-address" aria-hidden="true"></i> <a href="#">friseur@gmail.com</a> </li>
                     </ul>
                  </div>
               </div>
               <div class="instagram-feed col-lg-4 col-md-4">
                  <h3>INSTAGRAM FEED</h3>
                  <hr class="primary ">
                  <hr class="primary-left">
                  <div class="instagram-gallery">
                     <div class="instagram-img instagram-margin-right instagram-margin-bottom">
                        <a target="_blank" href="img\instagram-feed\1.jpg">
                           <div class="instagram-img-1">
                              <div class="instagram-box"> <i class="fa fa-instagram" aria-hidden="true"></i> </div>
                           </div>
                        </a>
                     </div>
                     <div class="instagram-img instagram-margin-right instagram-margin-bottom">
                        <a target="_blank" href="img\instagram-feed\1.jpg">
                           <div class="instagram-img-2">
                              <div class="instagram-box"> <i class="fa fa-instagram" aria-hidden="true"></i> </div>
                           </div>
                        </a>
                     </div>
                     <div class="instagram-img instagram-margin-bottom">
                        <a target="_blank" href="img\instagram-feed\1.jpg">
                           <div class="instagram-img-3">
                              <div class="instagram-box"> <i class="fa fa-instagram" aria-hidden="true"></i> </div>
                           </div>
                        </a>
                     </div>
                     <div class="instagram-img instagram-margin-right">
                        <a target="_blank" href="img\instagram-feed\1.jpg">
                           <div class="instagram-img-4">
                              <div class="instagram-box"> <i class="fa fa-instagram" aria-hidden="true"></i> </div>
                           </div>
                        </a>
                     </div>
                     <div class="instagram-img instagram-margin-right">
                        <a target="_blank" href="img\instagram-feed\1.jpg">
                           <div class="instagram-img-5">
                              <div class="instagram-box"> <i class="fa fa-instagram" aria-hidden="true"></i> </div>
                           </div>
                        </a>
                     </div>
                     <div class="instagram-img">
                        <a target="_blank" href="img\instagram-feed\1.jpg">
                           <div class="instagram-img-6">
                              <div class="instagram-box"> <i class="fa fa-instagram" aria-hidden="true"></i> </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="loading-overlay">
         <div class="cssload-container">
            <ul class="cssload-flex-container">
               <li> <span class="cssload-loading"></span> </li>
            </ul>
         </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/danielgindi-jquery-backstretch/2.1.15/jquery.backstretch.min.js"></script> <script src="js\bootstrap-datepicker.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> <script type="text/javascript" src="js\animated-headlines.js"></script> <script src="js\script-slideshow.js"></script>
   </body>
</html>
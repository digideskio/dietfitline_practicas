<!DOCTYPE html>
<html lang="es">
<head>
    <title>Galeria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/uCarousel.js"></script>
	<script src="js/tms-0.4.1.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/Asap_400.font.js"></script>
    <script src="js/Coolvetica_400.font.js"></script>
	<script src="js/Kozuka_M_500.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/FF-cash.js"></script>
    
    <script>
    $(document).ready(function(){
	  $('.gallery')._TMS({
		  show:0,
		  pauseOnHover:true,
		  prevBu:'.prev',
		  nextBu:'.next',
		  playBu:'.play',
		  duration:700,
		  preset:'fade',
		  pagination:$('.img-pags').uCarousel({show:4,shift:0}),
		  pagNums:false,
		  slideshow:7000,
		  numStatus:true,
		  banners:false,
		  waitBannerAnimation:false,
		  progressBar:false
	  })		
     })
  </script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="main">
	<div class="bg-img"></div>
<!--==============================header=================================-->
<?php
    $selected = "galeria";
    $current_class = ' class="current"';
    include ("includes/header.php");
?>
<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="container_12">
          <div class="grid_12">
          	<div id="slide">			  	
                <div class="gallery">
                    <ul class="items">
                        <li><img src="images/gallery-big-1.jpg" alt=""></li>
                        <li><img src="images/gallery-big-5.jpg" alt=""></li>
                        <li><img src="images/gallery-big-2.jpg" alt=""></li>
                        <li><img src="images/gallery-big-6.jpg" alt=""></li>
                        <li><img src="images/gallery-big-3.jpg" alt=""></li>
                        <li><img src="images/gallery-big-7.jpg" alt=""></li>
                        <li><img src="images/gallery-big-4.jpg" alt=""></li>
                        <li><img src="images/gallery-big-8.jpg" alt=""></li>
                    </ul>
                </div>
                <a href="#" class="prev"></a><a href="#" class="next"></a>
            </div>		
          </div>
          <div class="grid_12 top-1">
            <div class="block-3 box-shadow">
           	  <h2 class="p4"><span class="color-1">Galeria</span> de fotos</h2>
                  <div class="pag">
                      <div class="img-pags">
                        <ul>
                          <li><a href="#"><span><img src="images/gallery-1.jpg" alt=""></span></a></li>
                          <li><a href="#"><span><img src="images/gallery-5.jpg" alt=""></span></a></li>
                          <li><a href="#"><span><img src="images/gallery-2.jpg" alt=""></span></a></li>
                          <li><a href="#"><span><img src="images/gallery-6.jpg" alt=""></span></a></li>
                          <li><a href="#"><span><img src="images/gallery-3.jpg" alt=""></span></a></li>
                          <li><a href="#"><span><img src="images/gallery-7.jpg" alt=""></span></a></li>
                          <li><a href="#"><span><img src="images/gallery-4.jpg" alt=""></span></a></li>
                          <li><a href="#"><span><img src="images/gallery-8.jpg" alt=""></span></a></li>
                        </ul>  
                      </div>								
                  </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
    </section> 
<!--==============================footer=================================-->
<?php include("includes/footer.php");?>
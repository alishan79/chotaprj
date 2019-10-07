<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >

<!-- Mirrored from livedemo00.template-help.com/joomla_35333/ by HTTrack Website Copier/3.x [XR&CO'2007], Mon, 12 Sep 2011 21:32:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><!-- /Added by HTTrack --><style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><head>
  <base  />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="rights" content="" />
  <meta name="language" content="en-GB" />
  <meta name="title" content="" />
  <meta name="author" content="" />
  <meta name="generator" content="Joomla! 1.6 - Open Source Content Management" />
  <title>Picture Gallery!</title>

  <style type="text/css">
/* Nivo-Szaki Slider custom style */
.slider .nivoSlider {width:934px;height:500px;}
/* Nivo-Szaki Slider custom style */

  </style>
 
  <script type="text/javascript">
window.addEvent('domready', function() {new DropdownMaxiMenu(document.getElement('div#maximenuCK'),{mooTransition : 'Quad',mooEase : 'easeOut',useOpacity : '0',dureeOut : 500,menuID : 'maximenuCK',testoverflow : '0',orientation : '0',mooDuree : 500});});

            jQuery.noConflict();
            (function($) {
                $(window).load(function(){
                    $('.slider .nivoSlider').nivoSlider({
                    effect:'random',
                    slices:15,
                    animSpeed:500,
                    pauseTime:7000,
                    startSlide:0,
                    directionNav:1,
                    directionNavHide:0,
                    controlNav:0,
                    controlNavThumbs:0,
                    controlNavThumbsFromRel:false,
                    controlNavThumbsSearch: '.jpg',
                    controlNavThumbsReplace: '_thumb.jpg',
                    keyboardNav:0,
                    pauseOnHover:1,
                    manualAdvance:0,
                    captionOpacity:1
                    });
                });
            })(jQuery);
        
  </script>

<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="templates/theme792/css/position.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="templates/theme792/css/layout.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="templates/theme792/css/print.css" type="text/css" media="Print" />
<link rel="stylesheet" href="templates/theme792/css/personal.css" type="text/css" />
<!--
<link href='http://fonts.googleapis.com/css?family=Raleway:100&amp;v1' rel='stylesheet' type='text/css'>
-->
<link href='css.css' rel='stylesheet' type='text/css'>

<script type="text/javascript">
var $j = jQuery.noConflict();

$j(window).load(function(){
	$login=$j(".menu-login li a[title='login']");
	$login.toggle(function(){$j(".moduletable-log").slideDown("normal");}, 
				  function(){$j(".moduletable-log").slideUp("normal");
	});
	$j('.carousel').bxCarousel({
			display_num: 5,
			move: 2,
			margin: 0
		});
	$j('.carousel2').bxCarousel({
			display_num: 1,
			move: 1,
			margin: 0,
			auto_interval: 10000
		});
});
</script>

	<link rel="stylesheet" type="text/css" href="../style-projects-jquery.css" />    
    
    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>
   	<style type="text/css">
	/* jQuery lightBox plugin - Gallery style */
	#gallery {
		padding: 10px;
		width: 800px;
	}	
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #048318; /*IMAGE BGCOLOR*/
		border-width: 5px 5px 20px; 
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	.cl
		{
			background-color:#CCCCCC;
		}
	.style1 {
	font-size: 24px;
	font-weight: bold;
	color:#006633;
}
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="first ">
<div class="container">
<?php include 'header.php';?>
<div align="center"><br><br><br>
</div>
<div class="main-2">
        <div class="wrapper">
          		<div class="para">
					
					<span class='-about '><div class='para ' >


					
					
<div align="center">					
				
<span class="style1"><?php //echo $m_row['Mid_Images_Title'];?>  </span>

<div id="gallery">
    <ul>
	<!--<HR>-->
<?php
						$query=mysql_query("SELECT * FROM mid_images");
						while($m_row=mysql_fetch_array($query))
						{
							
					?>	
        <li>
            <a href="admin_panel/<?php echo $m_row['Mid_Images_Picture'];?>" target="_blank">
                <img src="admin_panel/<?php echo $m_row['Mid_Images_Picture'];?>" width="200" height="200" alt="" />
            </a>
        </li>
		<?php }?>
		
    </ul>

</div>
 </div>
 
<div style="clear: both;"></div>
</span>

		</div>		



</div>
				<div class="footer_gallery">
				<a href="mailto: info@carenfair.com">info@carenfair.com</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#">Copyright © 2014-15. Designed & Maintained by HMWASSOCIATES</a>
				<a href="http://www.carenfair.com">http://www.carenfair.com</a>
				</div>

<script type="text/javascript"> Cufon.now(); </script>
</div>
</body>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</html>

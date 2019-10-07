<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Care &amp; Fair Foundation</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/gallery.png','images/news.png','images/vdo.png')">
	<div class="container">
			
			<?php include 'header.php';?>
			<?php include 'banner.php';?>
			
			<div class="partner_box">
						
								   <?php
					  	
					  	$show_news=mysql_query("SELECT * FROM news");
					  	while($rec_show_news=mysql_fetch_array($show_news))
						{
							echo "<p><marquee direction='up' scrollamount='3' height='300px' onmouseover='this.stop()' onmouseout='this.start()'>".$rec_show_news['News_Detail']."</marquee></p>";
						}	
					  	
					  ?>
					  
			</div><!--end partner_box--->
			
			<div class="detail_box">
			<?php
					  //	$id=@$_GET['id'];
						
						if(!isset($_GET['id'])){
							$page_id = 1;
							}
							else{
							$page_id = @$_GET['id'];
							}
					  	$show=mysql_query("SELECT * FROM detail WHERE Top_Links_Id='$page_id'");
					  	while($rec_show=mysql_fetch_array($show))
						{
								echo "<h1>".$rec_show['Detail_Title']."</h1>";
					  	
						
								$position=1282; // Define how many character you want to display.
	
								$message=$rec_show['Detail_Text']; 
								$post = substr($message, 0, $position); 
								
								echo $post;
								echo "..."; 
						}
			?>
			<a href="more.php?id=<?php echo @$page_id;?>" target="_self"><img border="0" src="images/more1.png" width="150" height="24" /></a>
				</div><!--end detail_box-->
			
			<div class="gallery_box"><a href="gallery.php" target="_blank" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/gallery.png',1)"><img src="images/gallery_gray.png" name="Image7" width="266" height="156" border="0" id="Image7" /></a>			</div>
			<!--end gallery  box-->
			
			<div class="news_box"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','images/news.png',1)"><img src="images/new_gray.png" name="Image8" width="388" height="156" border="0" id="Image8" /></a>			</div>
			<!--end gallery  box-->
		
			<div class="vdo_box"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','images/vdo.png',1)"><img src="images/vdo_gray.png" name="Image9" width="266" height="156" border="0" id="Image9" /></a>			</div>
			<!--end gallery  box-->	
			
			<div class="footer">
				<a href="mailto: info@carenfair.com">info@carenfair.com</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#">Copyright © 2014-15. Designed & Maintained by HMWASSOCIATES</a>
				<a href="http://www.carenfair.com">http://www.carenfair.com</a>
			</div>

	</div><!--container end-->
</body>
</html>

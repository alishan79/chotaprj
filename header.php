<link rel="stylesheet" type="text/css" href="style.css">
</head>

		<div class="header"></div><!--header end-->
			<div class="menu">
				<ul>
				<?php
					include 'admin_panel/connection.php';
					connect();
					
					$query=mysql_query("SELECT * FROM top_links");
						while($row=mysql_fetch_array($query))
						{
					?>
						<li><a href="index.php?id=<?php echo $row['Top_Links_Id'];?>" ><?php echo $row['Top_Links_Name'];?></a></li> <img src="images/lineseperator.png"> 
				<?php
					}
				?>
				
<!--					<li><a href="#">Home</a></li><img src="images/lineseperator.png"> 
					<li><a href="#">About Us</a></li><img src="images/lineseperator.png"> 
					<li><a href="#">School & Clinics</a></li>	<img src="images/lineseperator.png"> 									
					<li><a href="#">Help Us</a></li><img src="images/lineseperator.png"> 
					<li><a href="#">News</a></li><img src="images/lineseperator.png"> 
					<li><a href="#">Members</a></li><img src="images/lineseperator.png"> 
					<li><a href="#">Contacts</a></li>																			
-->				</ul>
			</div><!--menu end-->		
			

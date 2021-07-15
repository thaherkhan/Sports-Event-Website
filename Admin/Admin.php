	<?php
		include("Header.php");
		include("connection.php");
		
		if(!isset($_SESSION['email_lg']))
		{
			//echo "You are Logout";
			//echo "<h1>se ".$_SESSION['email_lg']."</h1>";
			header('Location:AdminLogin.php');
		}
	?>
	
	<body>
	
		<div style="background-color: white;">
		
			<link href="style.css" rel="stylesheet">
		
			<?php
				include("AdminNav.php");
				
				echo '<h1 style="text-align: center">	Event For All Category</h1>';
				
				$sql = "SELECT * FROM sports";
				
				$res = mysqli_query($conn,$sql);
				echo '<div class="ContainerHome">';
				
				while( $arr=mysqli_fetch_array($res) )
				{ 	
					
					echo '			
					<div class="box"><a href="Detail.php?idt='.$arr['Event_id'].'">';?>
					 <img class="image" src="<?php echo $arr['Image'];?>" <?php echo'
					 <h1 style="text-align:center">'.$arr['Name'].'</h1>
					</a></div>';
				
				}
				echo '</div>';
				
			?>
			
		</div>
		
		<div class="foter">
	
			<p> Developed By <font color="Black"> &copy Abid Khan </font> </p>
			
		</div>
	
	</body>
	
</html>
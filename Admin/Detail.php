	<?php
			
		include("Header.php");
		
		if(!isset($_SESSION['email_lg']))
		{
			//echo "You are Logout";
			//echo "<h1>se ".$_SESSION['email_lg']."</h1>";
			header('Location:AdminLogin.php');
		}
	?>

	<?php
		include("connection.php");
		$idt = '';
		if(isset($_GET['idt']))
		{
		  $idt= $_GET['idt'];
		}
	?>
	
	<body>
	
		<div style="background-color: white;">
		
			<link href="style.css" rel="stylesheet">
		
			<?php
				include("AdminNav.php");
			?>
			
			<?php
				$sql= "SELECT * FROM sports WHERE Event_id = '$idt' ";
				
				$res = mysqli_query($conn,$sql);
				$arr=mysqli_fetch_array($res);
				
				echo '<div class="Container">
						<p class="title">'.$arr['Name'].'</p>
						<div class="ImageAndDetails">
						  <div class="ImageDiv">'?>  		  
							  <img src="<?php echo $arr['Image'];?>" height="250" width="300" class="Image" /> <?php echo '		
						  </div>
						  <div class="Details">
							<p>
							  '.$arr['Description'].'
							</p>
						  </div>
						</div>
						<div class="DateAndStatus">
						  <p class="Date">Event Date: '.$arr['Date'].'</p> <p class="Status">Event Status: '.$arr['Status'].'</p>
						</div>
					  </div>'	
			?>
			
		</div>
		
		<div class="foter">
	
			<p> Developed By <font color="Black"> &copy Abid Khan </font> </p>
			
		</div>
	
	</body>
	
</html>
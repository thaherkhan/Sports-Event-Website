<?php
	include("connection.php");
	
	
	
	$event = "";
	
	if(isset($_POST['submit_search']))
	{
		$event = $_POST['event'];
		//echo 'Aise ni'.$event;
	}
?>

<!DOCTYPE HTML>

<html>

	<?php
		include("HeaderUser.php");
	?>
	
	<body >
	
		<div style="background-color: white;">
	
			<link href="style.css" rel="stylesheet">
			
			<?php
				include("Navbar.php");
			?>
			<div class="wrapper">
				<div class="prev-btn"><i class="fas fa-chevron-left"></i></div>
					<div class="slides-container">
						
						<?php
							$sql = "SELECT * FROM sports WHERE Status='Enable'";
							
							$res = mysqli_query($conn,$sql);
							
							while( $arr=mysqli_fetch_array($res) )
							{
								echo '<div class="slide-image"><a href="DetailUser.php?idt='.$arr['Event_id'].'">  <div class="centered">Featured Event</div> ';
								?>
										<img src="<?php echo $arr['Image'];?>" alt="" /><?php
								echo '</a></div>';
							}
						?>
					</div>
				<div class="next-btn"><i class="fas fa-chevron-right"></i></div>
			</div>

			<div class="navigation-dots"></div>

			<script src="slide.js"></script>
		
			
			<form method="post" action="#" style="text-align: center; background-color: red; color:black; padding: 10px;">
					<input type="text" style="text-align: center; font-size: 18px; height:45px; " name="event" placeholder="Search Event">
					<input type="submit" style="text-align: center; font-size: 18px; height:50px;" name="submit_search" value="Search">
					
			</form>
			
			<h1 style="text-align: center">	Event For All Category</h1>
		<?php
		
			$sql = "";
			if( $event == "" )
			{
				$sql = "SELECT * FROM sports";
			}
			else
			{
				//$sql= "SELECT * FROM sports WHERE Category = '$cat' & Name LIKE '%$event%'";
				$sql = "SELECT * FROM sports WHERE Name LIKE '%$event%'";
				//WHERE CustomerName LIKE '%or%'";
			}
				$res = mysqli_query($conn,$sql);
				echo '<div class="ContainerHome">';
				
				while( $arr=mysqli_fetch_array($res) )
				{ 	
					echo '			
					<div class="box"><a href="DetailUser.php?idt='.$arr['Event_id'].'">';?>
					 <img class="image" src="<?php echo $arr['Image'];?>" <?php echo'
					 <h1 style="text-align:center">'.$arr['Name'].'</h1>
					</a></div>';
				
				}
				echo '</div>';
			
			?>
		
		</div>
		
		<div class="foter">
		
			<p> Copyright <font color="Black"> &copy Abid Khan </font> </p>
				
		</div>
	</body>
	
</html>
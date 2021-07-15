<?php
	session_start();
	include("connection.php");
?>

<?php
	if(isset($_GET['cat']))
	{
	  $cat= $_GET['cat'];
	}

?>

<!DOCTYPE HTML>

<html>

	<?php
		include("HeaderUser.php");
	?>
	
	<body>
	
	  <div style="background-color: white;">
	
		<link href="style.css" rel="stylesheet">
		
		<?php
		  include("Navbar.php");
		  
		  echo '<h1 style="text-align: center">	Event List For '.$cat.' Category </h1></br>';
		
		  $sql= "SELECT * FROM sports WHERE Category = '$cat' ";
			
		  $res = mysqli_query($conn,$sql);
			
		  echo '<div class="ContainerHome">';

			  while( $arr=mysqli_fetch_array($res) )
			  {
				echo '
				  <div class="box"><a href="DetailUser.php?idt='.$arr['Event_id'].'">';?>
					<img class="image" src="<?php echo $arr['Image'];?>" <?php echo'
					<h1 style="text-align:center">'.$arr['Name'].'</h1></a>
				  </div>';
			  }
		  echo '</div>';
		
		?> 
		
		</br></br></br>
		
	  </div>
	  <div class="foter">
	
		  <p> Developed By <font color="Black"> &copy Abid Khan </font> </p>
			
	  </div>
	
	</body>
	
</html>
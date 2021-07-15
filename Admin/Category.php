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
		if(isset($_GET['cat']))
		{
		  $cat= $_GET['cat'];
		}
		$delId = '';
		if(isset($_GET['delId']))
		{
		  $delId= $_GET['delId'];
		}
	?>

	<?php
		
		if(isset($_REQUEST['delId']))
			{
			$delId = $_REQUEST['delId'];
			$sql = "DELETE FROM sports WHERE Event_id='$delId'";
			
			$result = mysqli_query($conn, $sql);
			
			if($result)
			{
				echo '<script type="text/javascript"> alert("Data Deleted") </script>';
				header("location:Category.php?cat=".$cat);
			}
			else
			{
				echo '<script type="text/javascript"> alert("Data Not Deleted") </script>';
				header("location:Category.php?cat=".$cat);
			}
		}

	?>
	
	<body>
	
	  <div style="background-color: white;">
	
		<link href="style.css" rel="stylesheet">
		
		<?php
			include("AdminNav.php");
		
			$sql='';
			if($cat=='all')
			{
				$sql = "SELECT * FROM sports";
			}
			else
			{
				$sql= "SELECT * FROM sports WHERE Category = '$cat' ";
			}
			
			$res = mysqli_query($conn,$sql);
			
			echo '<div class="ContainerHome">';

				while( $arr=mysqli_fetch_array($res) )
				{ 	
					echo '			
					<div class="box"><a href="Detail.php?idt='.$arr['Event_id'].'">';    ?>
					 <img class="image" src="<?php echo $arr['Image'];?>" <?php echo'
					 <h1 style="text-align:center">'.$arr['Name'].'</h1>
					</a></div>';      
				}
			echo '</div>';
		?> 
		
		</br></br></br>
		
		<?php
			echo '<h1 style="text-align: center">	Event List For '.$cat.' Category </h1></br>';
		
			$sql='';
			if($cat=='all')
			{
	   		  $sql = "SELECT * FROM sports";
			}
			else
			{
			  $sql= "SELECT * FROM sports WHERE Category='$cat'";
			}
			
			$res = mysqli_query($conn,$sql);
		
			echo '<table border="15" style="margin-left:auto;margin-right:auto;">';
  			  echo '<tr>';
						
				echo '<td>'.'Event Name'.'</td>';
				echo '<td>'.'Event Category'.'</td>';
				echo '<td>'.'Event Date'.'</td>';
				echo '<td>'.'Event Image'.'</td>';
				echo '<td>'.'Event Status'.'</td>';
				echo '<td>'.'Update Event'.'</td>';
				echo '<td>'.'Delete Event'.'</td>';
			  echo '</tr>';
				
			  while( $arr=mysqli_fetch_array($res) )
			  {
				echo "<tr>
							
				  <td>".$arr['Name']."</td>
				  <td>".$arr['Category']."</td>
				  <td>".$arr['Date']."</td>
				  <td>"?><img src="<?php echo $arr['Image'];?>"height="150" width="200"> <?php echo"</td>
				  <td>".$arr['Status']."</td>
					
				  <td><a href='Update.php?id=$arr[Event_id]&cat=$arr[Category]&nm=$arr[Name]&des=$arr[Description]&dt=$arr[Date]&im=$arr[Image]&st=$arr[Status]'> Update </a> </td>
					
				  <td><a href='Category.php?delId=$arr[Event_id]&cat=$arr[Category]'> Delete </a> </td>
							
				</tr>";
		
			  }
			echo '</table>';
		  	
		?>
		
	  </div>
	    <div class="foter">
	
		  <p> Developed By <font color="Black"> &copy Abid Khan </font> </p>
			
	  </div>
	
	</body>
	
</html>
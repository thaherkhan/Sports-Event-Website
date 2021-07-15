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

		$id = $_GET['id'];
		$nm = $_GET['nm'];
		$des = $_GET['des'];
		$dt = $_GET['dt'];
		$im = $_GET['im'];
		$st = $_GET['st'];
		$cat= $_GET['cat'];
		
		//echo 'image print or'.$image;
	?>

	<?php
	
		if(! mysqli_select_db($conn,'sports_event'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['submit']))
		{
			$name = ($_POST['name']);
			$description = ($_POST['description']);
			$date = ($_POST['date']);
			$image = ($_POST['image']);
			$category = ($_POST['category']);
			$status = ($_POST['status']);
			
			$fileName= $_FILES['image']['name'];
             $fileNameTmp= $_FILES['image']['tmp_name'];
	
    
  	       $folder='EventImage/' ;
            $fileName=$folder.$fileName;
  	       move_uploaded_file($fileNameTmp, $fileName);
		   
		   
			$sql = "UPDATE sports SET Name='$name', Description='$description', Date='$date', Image='$fileName', Status='$status' WHERE Event_id='$id' ";
			
			$result = mysqli_query($conn,$sql);
			//header("location:example.php?id=".$id);
			if($result)
			{
				echo '<script type="text/JavaScript"> 
     prompt("Data Added");
     </script>';
				header("location:Category.php?cat=".$cat);
			}
			else
			{?>
				<script type='text/javascript'> 
                   alert('Data Update Fail!') 
                  </script>
				  <?php 
				header('location:Update.php?id='.$_GET['id'].'&cat='.$_GET['cat'].'&nm='.$_GET['nm'].'&des='.$_GET['des'].'&dt='.$_GET['dt'].'&im='.$_GET['im'].'&st='.$_GET['st']);
			}
		}
	?>
	
	<?php
		include("AdminNav.php");
		?>
	
	<body>
	
		<div style="background-color: #ccc;">
			<div align="center">
				
				<br/><br/><br/><br>
				
				<h1> Update Event </h1>
				
				<form method="post" style="background-color: #fff; padding: 20px; margin-left: 25%; margin-right: 25%; margin-bottom: 10%;" enctype="multipart/form-data">
					
					<h3> Name : <input type="name" name="name" value="<?php echo $_GET['nm'];?>" style="padding: 5px; top: 2px; width: 50%; margin-right: 2%;"> </h3>
					<h3> Description :
					<textarea type="text" name="description" rows="7" col="40" style="padding: 30px; top: 2px; width: 42%; margin-right: 9%;"><?php echo $_GET['des'];?> </textarea>  </h3>
					<h3> Date : <input type="date" name="date" value="<?php echo $_GET['dt'];?>" style="padding: 5px; top: 2px; width: 50%; margin-right: 0%;"> </h3>
					<h3> Image : <input type="file" name="image" value="<?php echo $_GET['im'];?>" style="padding: 5px; top: 2px; width: 50%; margin-right: 2.5%;"> </h3>
					
					<h3> Event Status : <select name="status"  style="padding: 5px; top: 2px; width: 30%; margin-right: 32%;">
										<?php 
											if ($_GET['st']=='Disable')
											{
										?>
												<option value="<?php echo $_GET['st'];?>" ><?php echo $_GET['st'];?></option>
												<option value="Enable">Enable</option>
										<?php
											}
											else
											{
										?>
												<option value="<?php echo $_GET['st'];?>" ><?php echo $_GET['st'];?></option>
												<option value="Disable">Disable</option>
										<?php
											}
										?>
										
									</select> </h3>
					<input type="submit" name="submit" style="padding: 10px;  width: 15%; top: 2px;" value="Update">
				
				</form>
				
			</div>
		
		<div class="foter">
	
			<p> Developed By <font color="Black"> &copy Abid Khan </font> </p>
			
		</div>
	
	</body>
	
</html>
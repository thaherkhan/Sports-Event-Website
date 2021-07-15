<?php
		
	include("Header.php");
	//echo "<h1>se ".$_SESSION['email_lg']."</h1>";
	if(!isset($_SESSION['email_lg']))
	{
		//echo "You are Logout";
		//echo "<h1>se ".$_SESSION['email_lg']."</h1>";
		header('Location:AdminLogin.php');
	}
?>


	<?php
	
		if(! mysqli_select_db($conn,'sports_event'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['submit']))
		{
			$name = ($_POST['namee']);
			$description = ($_POST['description']);
			$date = ($_POST['date']);
			/* $image = ($_POST['image']); */
			$category = ($_POST['category']);
			$status = ($_POST['status']);
			/*  echo "<h1> name".$_FILES['photo']['name']."</h1>";
			if(isset($_FILES['photo']['name'])){
				echo "<h1> ikage exist</h1> ";
			} */
			$fileName= $_FILES['photo']['name'];
             $fileNameTmp= $_FILES['photo']['tmp_name'];
	
    
  	       $folder='EventImage/' ;
            $fileName=$folder.$fileName;
  	       move_uploaded_file($fileNameTmp, $fileName);
		  // move_uploaded_file($_FILES['image']['name'], $fileName);
	 
			
			$sql = "INSERT INTO sports (";
			$sql .= "Name,Description,Date,Image,Category,Status )";
			$sql .= "values (";
			$sql .= " '{$name}','{$description}','{$date}','{$fileName}','{$category}','{$status}' ";
			$sql .= ")"; 
			
			
			
			$result = mysqli_query($conn,$sql);
			
			//echo 'kam korer na'.$result;
			
			if($result)
			{
				echo 'Successgully Create Event';
				header('Location:Admin.php');
			}
			else
			{
				echo '<h1>Unsuccessful</h1>';
				header('Location:Add.php');
			}
		}
	?>

	
	<body>
		<?php
			include("AdminNav.php");
		?>
	
		<div style="background-color: #ccc;">
			<div align="center">
				
				<br/><br/>
				
				<h1> Add Event </h1>
				
				<form method="post" style="background-color: #fff; padding: 20px; margin-left: 25%; margin-right: 25%; margin-bottom: 10%;" enctype="multipart/form-data">
					
					<h3> Name : <input type="name" name="namee" required style="padding: 5px; top: 2px; width: 50%; margin-right: 2%;"> </h3>
					<h3> Description : 
					<textarea type="text" name="description" required rows="7" col="40" style="padding: 30px; top: 2px; width: 42%; margin-right: 9%;"> </textarea> </h3>
					<h3> Date : <input type="date" name="date" required style="padding: 5px; top: 2px; width: 50%; margin-right: 0%;"> </h3>
					<h3> Image : <input type="file" name="photo" required style="padding: 5px; top: 2px; width: 50%; margin-right: 2.5%;"> </h3>
					<h3> Category : <select name="category" required style="padding: 5px; top: 2px; width: 30%; margin-right: 28%;"> 
									<option value="">Select</option>
									<option value="Cricket">Cricket</option>
									<option value="Football">Football</option>
									<option value="Tennis">Tennis</option>
									<option value="Hockey">Hockey</option>
								 </select>	</h3>
					<h3> Event Status : <select name="status" required style="padding: 5px; top: 2px; width: 30%; margin-right: 32%;">
										<option value="">Select</option>
										<option value="Enable">Enable</option>
										<option value="Disable">Disable</option>
									</select> </h3>
					<input type="submit" name="submit" style="padding: 10px;  width: 15%; top: 2px;" value="Submit">
				
				</form>
				
			</div>
		
		<div class="foter">
	
			<p> Developed By <font color="Black"> &copy Abid Khan </font> </p>
			
		</div>
	
	</body>
	
</html>

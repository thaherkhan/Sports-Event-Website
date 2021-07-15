<?php
	session_start();
	include("connection.php");
?>

<?php
	
	if(isset($_POST['submit_lg']))
	{
		$email=$_POST['email_lg'];
		$password=$_POST['password_lg'];
		
		$sql= "select * from adminpanel where Email='$email' and Password='$password'";
		
		$res=mysqli_query($conn, $sql);
	
		$email_count = mysqli_num_rows($res);
		
		if($email_count)
		{
			$email_pass = mysqli_fetch_assoc($res);
			
			echo "Login Successfull";
			//$name = $_GET['Name'];
			$_SESSION['email_lg']=$email_pass['Email'];
			//$_SESSION['name']=$email_pass['Name'];
			//echo "<h2>".$_SESSION['email_lg']."</h2>";
			header('location:Admin.php');
		}
		else
		{
			//echo "Login failed";
			//$message = "Wrong Email or Password";
			echo "<script type='text/javascript'>alert(\"Invalid Email OR password!!\");</script>";
			header('location:AdminLogin.php');
		}
		
	}
?>

<!DOCTYPE HTML>

<html>
	
	<?php
		include("HeaderUser.php");
		include("Navbar.php");
	?>
	
	<body>
	
		<div style="background-color: #ccc;">
			<div size="4" align="center">
				
				<br/><br/><br/><br>
				
				<?php
						if(isset($message))
						echo "<h2>" . $message . "</h2>";
				?>
				<h1> Admin Login </h1>
				
				<form method="post" style="background-color: #fff; padding: 20px; margin-left: 25%; margin-right: 25%; margin-bottom: 10%;">
					
					<p> <input type="email" name="email_lg" style="padding: 5px; top: 2px; width: 50%;" placeholder="Email"> </p>
					<p> <input type="password" name="password_lg" style="padding: 5px; top: 2px; width: 50%;" placeholder="Password"> </p>
					<p> <input type="submit" name="submit_lg" style="padding: 5px; top: 2px; bgcolor: green; min-width: 20px;" value="Login"> </p>
				
				</form>
				
			</div>
			
				<div class="foter">
		
				<p> Developed By <font color="Black"> &copy Abid Khan </font> </p>
				
			</div>
			
		</div>
	
	</body>
	
</html>
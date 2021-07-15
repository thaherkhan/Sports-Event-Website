<?php

	include("connection.php");
	
	if(isset($_POST['submit']))
	{
		$search = $_POST['submit'];
		//echo $search;
		
			header("location:Category.php?submit=".$search);
		
		

	}
?>

<div style="background-color: white;">

	<link href="style.css" rel="stylesheet">
	
	<div class="menu">
		<ul>
			<li><a href="Home.php">Home</a></li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">Event</a>
				<div class="dropdown-content">
					<a href="CategoryUser.php?cat=Cricket"> Cricket </a>
					<a href="CategoryUser.php?cat=Football"> Football </a>
					<a href="CategoryUser.php?cat=Tennis"> Tennis </a>
					<a href="CategoryUser.php?cat=Hockey"> Hockey </a>
				</div>
			</li>
			
		</ul>
	</div>
	
</div>

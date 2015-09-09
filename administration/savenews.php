<?php
	include 'header.php';
	$db = mysqli_connect('Localhost','root','','etech');
	
	$title = mysqli_real_escape_string($db, $_POST['title']);
	
	$descriptiion = mysqli_real_escape_string($db, $_POST['description']);
	
	if(!empty($title) && !empty($descriptiion))
	{
		$query = "INSERT INTO news(Title, description, added_on)
			  	  VALUES('$title','$descriptiion', now())";
	
		if(mysqli_query($db, $query))
		{
			echo '<center><img src = "../images/success.png"/><h3>The bookmark has been added successfully!</h3></center>';
		}
		else
		{
			echo '<center><img src = "../images/error.png"/><h3>Database problem!</h3></center>';
		}
	}
	else
	{
		echo '<center><img src = "../images/error.png"/><h3>Please enter all the data!</h3></center>';
	}
	
	mysqli_close($db);
?>
</div>
</body>
</html>
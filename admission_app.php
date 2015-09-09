<?php
	
	$db = mysqli_connect('Localhost','root','','etech');
	
	$name = mysqli_real_escape_string($db, $_POST['sname']);	
	$email = mysqli_real_escape_string($db, $_POST['semail']);
	$phone = mysqli_real_escape_string($db, $_POST['sphone']);
	$interest = mysqli_real_escape_string($db, $_POST['sinterest']);
		$query = "INSERT INTO admission(name, email, phone,interest)
			  	  VALUES('$name','$email','$phone','$interest')";
	
		if(mysqli_query($db, $query))
		{
			echo '<center><img src = "images/success.png"/><h3>Thank You for the interest We\'ll get back to u soon! </h3></center><META HTTP-EQUIV="refresh" CONTENT="1;URL=admission.php">';
		}
		else
		{
			echo '<center><img src = "images/error.png"/><h3>Database problem!</h3></center><META HTTP-EQUIV="refresh" CONTENT="1;URL=admission.php">';
		}
	
	
	
	mysqli_close($db);
?>
</div>
</body>
</html>
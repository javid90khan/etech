<?php
ob_start();
	include 'header.php';
	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	
	$db = mysqli_connect('Localhost','root','','etech');
	$query = "SELECT name,email,phone,interest FROM admission WHERE id =".$id;
	
	$data = mysqli_query($db, $query);
	$row = mysqli_fetch_array($data);
	
	$name = $row['name'];
	$email= $row['email'];
	$phone= $row['phone'];
	$interest= $row['interest'];
	$send = $_SERVER['PHP_SELF']."?id=".$id; 
?>
<form action = "<?php echo $send;?>" method = "post">
	Are you sure you want to delete 
	<a href="<?php echo $Description;?>"><?php echo $name;?></a> ?<br />
	<input type="radio" name="option" value="yes"/> YES
	<input type="radio" name="option" value="no"/> NO <br/>
	<input type="submit" name="submit" value="submit"/>
</form>
<?php 
	if (isset($_POST['submit']))
	{
		if($_POST['option'] == 'yes')
		{
			$delete_query = "DELETE FROM admission WHERE id = ".$id;
			mysqli_query($db, $delete_query);
			header('Location:viewapps.php');
		}
		else
		{
			header('Location:viewapps.php');
		}
		
	}
ob_flush();		
?>

<?php 
ob_start();
	include 'header.php';
	
	if(isset($_GET['nid']))
	{
		$nid = $_GET['nid'];
	}
	
	$db = mysqli_connect('Localhost','root','','etech');
	$query = "SELECT Title,Description FROM news WHERE nid =".$nid;
	
	$data = mysqli_query($db, $query);
	$row = mysqli_fetch_array($data);
	
	$title = $row['Title'];
	$Description= $row['Description'];
	$send = $_SERVER['PHP_SELF']."?nid=".$nid; 
?>
<form action = "<?php echo $send;?>" method = "post">
	Are you sure you want to delete 
	<a href="<?php echo $Description;?>"><?php echo $title;?></a> ?<br />
	<input type="radio" name="option" value="yes"/> YES
	<input type="radio" name="option" value="no"/> NO <br/>
	<input type="submit" name="submit" value="submit"/>
</form>
<?php 
	if (isset($_POST['submit']))
	{
		if($_POST['option'] == 'yes')
		{
			$delete_query = "DELETE FROM news WHERE nid = ".$nid;
			mysqli_query($db, $delete_query);
			header('Location:viewnews.php');
		}
		else
		{
			header('Location:viewnews.php');
		}
		
	}
ob_flush();	
?>

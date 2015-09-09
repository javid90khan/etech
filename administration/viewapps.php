<?php 
	include 'header.php';
	echo '<h1>All Applications</h1><hr /><br />';
	$db = mysqli_connect('Localhost', 'root', '', 'etech');
	$query = "SELECT * FROM admission";
	$data = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($data))
	{
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$interest = $row['interest'];
		$id=$row['id'];
		echo '<ul>
				<li>
					Name:<a style = "color: #3b608a;">'.$name.' </a><br />
					Email:<a style = "color: #3b608a;">'.$email.'</a><br />
					Phone:<a style = "color:#3b608a;"> '.$phone.'</a><br/>
					Interest:<a style = "color: #3b608a;"> '.$interest.'</a><br/>
					<a href=delete_app.php?id='.$id.'>[Delete]</a><br />

				</li>
			  </ul>';
	}

?>
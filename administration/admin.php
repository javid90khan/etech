<?php 
	include 'header.php';
	echo '<h1>Recent News</h1><hr /><br />';
	$db = mysqli_connect('Localhost', 'root', '', 'etech');
	$query1 = "SELECT * FROM news order by added_on LIMIT 2";
	$data1 = mysqli_query($db, $query1);

	$query2 = "SELECT * FROM admission LIMIT 2";
	$data2 = mysqli_query($db, $query2);

	while ($row = mysqli_fetch_array($data1))
	{
		$title = $row['Title'];
		$description = $row['Description'];
		$added_on = $row['added_on'];
		
		
		echo '<ul>
				<li>
					Title : <a style = "color: #3b608a;">'.$title.'</a> <br />
					<b >'.$description.'</b> <br />
					<b style = "color: #CCCCCC">Added On: '.$added_on.'</b><br/>
					
				</li>
			  </ul>';
	}
echo '<h1>Recent Applications</h1><hr /><br />';
	while ($row = mysqli_fetch_array($data2))
	{
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$interest = $row['interest'];
		
		echo '<ul>
				<li>
					Name:<a style = "color: #3b608a;">'.$name.' </a><br />
					Email:<a style = "color: #3b608a;">'.$email.'</a><br />
					Phone:<a style = "color:#3b608a;"> '.$phone.'</a><br/>
					Interest:<a style = "color: #3b608a;"> '.$interest.'</a><br/>
					
				</li>
			  </ul>';
	}

?>
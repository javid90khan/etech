<?php 
	include 'header.php';
	echo '<h1>All News</h1><hr /><br />';
	$db = mysqli_connect('Localhost', 'root', '', 'etech');
	$query = "SELECT * FROM news order by added_on";
	$data = mysqli_query($db, $query);
	while ($row = mysqli_fetch_array($data))
	{
		$title = $row['Title'];
		$description = $row['Description'];
		$added_on = $row['added_on'];
		$nid=$row['nid'];
		
		echo '<ul>
				<li>
					Title : <a style = "color: #3b608a;">'.$title.'</a> <br />
					<b >'.$description.'</b> <br />
					<b style = "color: #CCCCCC">Added On: '.$added_on.'</b><br/>
					<a href=delete.php?nid='.$nid.'>[Delete]</a><br />
					
				</li>
			  </ul>';
	}
?>
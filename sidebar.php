
	<div id="sidebar">
<h2>Courses</h2>
					
				<?php include 'include/sidemenu.php'; ?>
<h2>Latest News</h2>

<div id="news">

<ul class="sidemenu">			

<?php


$con = mysqli_connect('localhost','root','','etech');

$query="select * from news";
$res=mysqli_query($con,$query);
if(!$res){
echo "no data";
}
else
{
while($row=mysqli_fetch_array($res)){
$tit=$row['Title'];
$desc=$row['Description'];
$titc=$tit."1";
?>

<li>
<div id="<?=$tit?>" ><a >&nbsp;<?=$tit?></a></div></li>

<div id="<?=$titc?>" style="width:300px;border-color: #006699;border-width:4px;border-style:solid;background-color:#FFFFFF;">
<?php echo "<p CLASS=\"P1\">"."$desc"."</p>" ; ?>
</div>
<script type="text/javascript">
at_attach("<?=$tit?>", "<?=$titc?>", "hover", "y", "pointer");
</script>

<?php

}
}
mysqli_close($con);
?>



		</ul>


</div>


</div>
			
		
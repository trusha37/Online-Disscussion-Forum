<html>
<head>
<title>Welcome to Healthcare</title>
<link rel="stylesheet" type="text/css" href="../css/category.css">
<style>
.divigr:hover{
	background-color:#e6f2ff;
	width:60%;
	transition-duration: 0.4s;
	margin-left:25px;
}
.divigr
{
	margin-left:15px;
	width:60%;
}
</style>
</head>

<body>
<?php

include 'nvgbar2.php';

?>
<br><br>
<div class="formstyle">
<center>
<h1 style="background-color:gray;">HEALTHCARE<span>Empowering Healthier Lives !!</span></h1>
</center>
</div>
<div class="maimage">
<img src="../images/health.jpg" alt="health" width="100%" height="330px">
<br>
<br>
<div class="description">
Welcome to our healthcare discussion forum! This is a safe and informative platform for discussing all aspects of healthcare, from the latest medical research to personal experiences and health-related concerns. Join our community today to connect with healthcare professionals and individuals interested in health and wellness, and share your thoughts and questions in a supportive and inclusive environment.</div>
<div>
<center>
<p style="color:White; font-size:300%; font-family:verdana; background-color:gray;">Latest Discussions</p>
</center>
</div>
<?php
include "../connect.php";
//echo "<p>Latest Discussion<p>";
$cat='Healthcare';
 $query = mysqli_query($connection,"SELECT * FROM topics WHERE topic_cat='$cat' ORDER BY topic_date DESC LIMIT 3");
//$result = mysql_query($query);
//$numrows = mysql_num_rows($sql);

if(!$query)
{
	echo 'error';
}
else
{
	while($row = mysqli_fetch_assoc($query))
	{
		$by=$row['topic_by'];
		$date=$row['topic_date'];
		$sub=$row['topic_subject'];
		$id=$row['topic_id'];
		echo "<div style:'width:60%;' class='divigr'>";
		echo "<h1><a href='../topic.php?posts_topic=$id' style='color:black; text-decoration:none;'>$sub</a></h1><br>";
		$query2 = mysqli_query($connection,"SELECT username FROM users WHERE id='$by'");
		while($row2 = mysqli_fetch_assoc($query2))
		{
			$name=$row2['username'];
			echo "<h3>Asked by: $name</h3><h3>On ";
			echo date('d-m-Y', strtotime($date));
			echo "</h3><br>";
		}
		echo "</div>";
		echo "<hr style='width:60%; float:left;'><br>";
		//echo "<br><br><br><br><br>";
		
	}
}
echo "<br><br><br>";


?>


</body>
<?php

include 'footer.php';

?>
</html>
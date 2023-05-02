<!doctype html>
<head>

<style>
p{
  display:inline;
}

*{
  margin:0;
  padding:0;
}

button.buttoon22
{
  position:fixed;top:500px;right:0px;
  background-color:#4CAF50;
  color: white;
  font-family: verdana;
  font-size: 17px;
  height:45px; 
  width:105px;
  cursor: pointer;
    transition-duration: 0.4s;
    transition:width 2s;
}

button.buttoon22:hover
{
  background-color:#2A88AD;
  color:white;
  
  width:200px;
}


div.xx{
	margin-left:80px;
	font-size: 25px;
	color: white;

}

div.xz{
	
	float:right;
	margin-right: 50px;
	margin-top: -100px;
	font-size: 20px;
	color: white;
}



input.mc
{
    width: 75%;
    height: 43px;
    padding: 12px 20px;
    margin-left: 80px;
    margin-top: 25px;
    display: inline-block;
    border: 1px solid #ccc;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    box-sizing: border-box;
    font-style: courier;
    

}



button.buttoon
{
  
  float: right;
  margin-right: 97px;
  margin-top: -43px;

  background-color:green;
  border-top-right-radius:  4px;
  border-bottom-right-radius: 4px;
  color: white;
  font-family: verdana;
  font-size: 17px;
  height:43px; 
  width:160px;
  cursor: pointer;
    border: 2px solid green;
}



li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    
    text-decoration: none;
}



li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: gray;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;

}
.dropbtn:hover{
  }
#menu {
    width:100%;
    height: 50px;
    font-size: 25px;
    color:white;
    font-family: Arial, Helvetica, sans-serif;
    font-weight:bold;
    text-shadow: 1.5px 1.5px 1.5px #333333;
    background-color:gray;
}
 #menu ul {
    height: 0px;
    padding-right: 15px;
    padding-left: 15px;
    padding-top: 5px;

    margin: 0px;
}
#menu li { 
display: inline; 
padding-top:  5px;
text-align: left;
}

/*#menu a {
    text-decoration: overline;
    color: #00F;
    padding: 8px 8px 8px 8px;
}*/
#menu li:hover {
    
    background-color:;
    cursor:pointer;
    
    padding: 5px 5px 5px 5px;
}
</style>
<script>
 function validateForm() {
   var y = document.forms["myForm"]["subscribe_mail"].value
    if(y=="")
    {
      alert("Enter your email");
      return false;
    }
     var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {         
        alert("Not a valid e-mail address");
        return false;
    }
    }
</script>
	<title>
		homepage
	</title>
	
</head>
<body>


<div id="menu">
<ul>
<li style="float: left;"><a href="#">Home&emsp;</a></li>


<li class="dropdown" style="float: left;"><a href="#" class="dropbtn">Categories&emsp;</a>
   <div class="dropdown-content">
      <a href="category/tech.php">Technology</a>
      <a href="category/env.php">Environment</a>
       <a href="category/health.php">Healthcare</a>
       <a href="category/cinema.php">Cinema</a>
     
   </div>

</li>




<li style="float: left;"><a href="posts.php">Post<a></li>
<li style="float: right;">
<?php
include 'connect.php';
session_start();
//$name=$_SESSION['username'];
    if(isset($_SESSION['signed_in'])==true)
    {
        $name=$_SESSION['username'];
        echo "<a href='profile.php'>".$name." </a>";
    }
    else
    {
        echo '<a href="signin.php">LogIn</a>';
    }

?>
</li>
<li style="float: right;">
<?php
    if(isset($_SESSION['signed_in'])==true)
    {
        echo '<a href="signout.php">LogOut</a>';
    }
    else
    {
        echo '<a href="signup.php">SignUp</a>';
    }

?>
&emsp;</li>
</ul>
</div>



<br>
<img height="330px" width="100%" src="images/2.png">
<br><br>

<div style="background-color:white;height: 250px;width:100%;font-family:Harlow Solid Italic; font-size:40px;border-radius:10px;">
<p style="margin-left: 550px;font-weight:bold">ABOUT US</p><br>
<div style="margin-left:20px">
<p style="font-family:normal; font-size:25px;"><i>Welcome to our discussion forum website! We provide a safe and inclusive space for individuals to connect and engage in meaningful conversations on a wide range of topics. Our user-friendly interface offers various tools and features to enhance your user experience. Join our community today and explore diverse perspectives and ideas.</i></p>
</div>


</div>

<br>
<br>

<br>


<div style="background-color:silver;height: 272px;width:100%;">
<h1 style=";margin-top: 0px;margin-left:560px;margin-top:10px;font-weight: bold;font-size: 40px;font-family: verdana">JOIN US</h1>
<br>
<div style="margin-left:10px;margin-right:10px">
<div style="font-family:normal; font-size:25px;margin-right: 15px;margin-left:10px;">
<i>
<p>Join our discussion forum today to connect with like-minded individuals and broaden your knowledge on various topics! like Technology ,Environment, Healthcare and Cinema.</p>
<p>Lets interact with people!!</p></i></div>
</div><br><br>
<p align="center" style="text-align:center;font-family:courier;font-size:33px;font-weight: bold;color: white;margin-top:-5px; float:center;margin-left:260px;" >"Where Ideas Meet and Minds Connect"</p>
	

</div>
<a href="feedback.php">
<button type="button" class="buttoon22" >FEEDBACK</button>
</a>


<center>
<div style="background-color:gray;">
<p  style="color:White; font-size:300%; font-family:verdana; background-color:gray;">Latest Posts</p></div>

</center>

<br><br><br>
<?php

include 'connect.php';
$query=mysqli_query($connection,"SELECT * FROM topics ORDER BY topic_id DESC LIMIT 3");
while($row = mysqli_fetch_array($query))
{
  $topic=$row['topic_subject'];
  $id=$row['topic_id'];
  $cat=$row['topic_cat'];
 // echo "<p>$topic</p><br>";
  echo "<br><p ><a href='topic.php?posts_topic=$id'  style='text-decoration:none; color:black; font-size:32px; font-weight:bold; margin-left: 20px; '>&nbsp&nbsp&nbsp
   ".$topic." </a></p><br><br><p style='color:black; font-size:25px; font-weight:bold; margin-left: 50px;'>In</p><p style='text-decoration:none; color:blue; font-size:25px; font-weight:bold; margin-left: 0px; '> $cat</p><br><br><br><hr style='color:powderblue;'>";
}

?>

<br>
<br>

<div style="text-align: center;">
<div style="background-color:gray">
<p  style="color:White; font-size:300%; font-family:verdana; background-color:gray;width:100%;text-align:center">User Feedback</p>
</div>
</div>

<br><br><br>
<?php

include 'connect.php';
$query=mysqli_query($connection,"SELECT * FROM feedback ORDER BY feedback_id DESC LIMIT 3");
while($row = mysqli_fetch_assoc($query))
{
  $topic=$row['feedback_descr'];
  echo "<p ><a style='text-decoration:none; color:black; font-size:32px; font-weight:bold; margin-left: 20px; '>&nbsp&nbsp&nbsp
   ".$topic." </a><br><br><br>";
}

?>


<div style="background-color:black;width: 100%; height: 200px">


<!-- <form method="post" action="subscribe.php" onsubmit="return validateForm()" name="myForm">

<input class="mc" type="text" name="subscribe_mail" placeholder="Email..." ><br>

<button type="submit" class="buttoon" >Subscribe</button>

</form> -->

<br><br>

<div class="xx">
<h3>Contact Us:</h3>
<p style="font-size: 20px">N-block Room No. N-308<br>Nirma University,<br>Ahmedabad-382481</p>
</div>


<div class="xz">
:9427395721<br>
:8349525503<br>
:Idea.Share@gmail.com<br>
</div>

<div style="float: right;margin-right: 280px;margin-top:-100px">
<img src="icons/call.png" style="width: 22px"><br>
 <img src="icons/whatsapp.png" style="width: 22px;"><br>
<img src="icons/gmail.png" style="width: 22px"><br>
</div>
</div>











</body>

<!doctype html>
<head>


<style >

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

	



</style>
	<title>
		hits
	</title>

</head>
<body>



<div id="menu">
<ul>                              <!--navigation bar-->
<li style="float: left;"><a  href="index.php">Home&emsp;</a></li>


<li class="dropdown" style="float: left;"><a href="#" class="dropbtn">Categories&emsp;</a>
   <div class="dropdown-content">

   <a href="category/tech.php">Technology</a>
      <a href="category/env.php">Environment</a>
       <a href="category/health.php">Healthcare</a>
       <a href="category/cinema.php">Cinema</a>
     
   </div>

</li>




<li style="float: left;"><a  href="posts.php">Post</a></li>

<li style="float: right;">

<?php

include 'connect.php';
session_start();
//$name=$_SESSION['username'];
    if(isset($_SESSION['signed_in'])== true)
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
    if(isset($_SESSION['signed_in'])== true)
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


</body>
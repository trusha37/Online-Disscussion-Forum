<!doctype html>
<html>
<head>
  <title>
    sign in
  </title>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
  <script>
  function validatePost() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") 
        {
        alert("Username is required");
        return false;
      }
      var y = document.forms["myForm"]["password"].value;
    if (y == "") 
        {
        alert("Password is required");
        return false;
      }
	  
	//var z = document.forms["myForm"]["button"].value;
	var radios = document.getElementsByName("button");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

    if (!formValid){
		alert("Must check some option!");
		return formValid;	
	}		
}
</script>
<style>
.signin {
  border: 1px solid #c6c7cc;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 440px;
  margin-left: 34%;
margin-right:24%;
}
</style>
</head>
<body>
<?php

include 'nvgbar.php';

?>
<br><br>
<div class="formstyle" style="width:100%">
<h1 style="background-color:gray">Sign In!<span>Sign In and start posting!!</span></h1>
</div>
<div style="background-image:url('images/back.jpg'); background-repeat:repeat-x; border-radius:6px; width:100%; height:100%;">

  <form method="post" action="signinpost.php" class="signin" name="myForm" onsubmit="return validatePost();">
  <fieldset class="account-info">
    <label>
      Username
      <input type="text" name="username">
    </label>
    <label>
      Password
      <input type="password" name="password">
    </label>
  </fieldset>
  <center>
    <input type="radio" name="button" value="Admin">Admin
	<hr>	
	<input type="radio" name="button" value="User">User
  </center>
  <fieldset class="account-action">
    <center><input class="btn" type="submit" name="submit" value="Sign In"></center>
  </fieldset>
</form>
</div>
<br><br>
<?php

include 'footer.php';

?>
</body>
</html>

 <html>
 <head>
 <title>Signed In</title>
 <link rel="stylesheet" type="text/css" href="css/signup.css">
 </head>

 <body>
 <?php

include 'nvgbar.php';

?>
<br><br>
 <div class="formstyle" style=" width:100%">
<center>
<h1 style="backgroung-color:gray">Sign In Now!<span>Sign in and start posting!!</span></h1>
</center>
</div>
<?php
	include "connect.php";
	//session_start();
	$errors = array(); 
	if(!isset($_POST['username']))
	{
		$errors[] = 'The username field must not be empty.';
	}
	 
	if(!isset($_POST['password']))
	{
		$errors[] = 'The password field must not be empty.';
	}
	
	if(!isset($_POST['button']))
	{
		$errors[] = 'Admin or User must be selected.';
	}
	
	if(!empty($errors)) 
	{
		echo 'Uh-oh.. a couple of fields are not filled in correctly..';
	   // echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>You have a problem while signing up..";
		echo '<ul>';
		foreach($errors as $key => $value) 
		{
			echo '<li>' . $value . '</li>'; 
		}
		echo '</ul>';
	}
	else
	{
	   
		$user = $_POST['username'];
		$pass = ($_POST['password']);
		//echo "$pass";
		$selectedOption = $_POST['button'];
		if($selectedOption == 'Admin')
		{
			//echo $selectedOption;
			if(($user == 'Silvya' && $pass == 'Silvya') ||
			($user == 'Priyanshu' && $pass == 'Priyanshu') ||
			($user == 'Trusha' && $pass == 'Trusha'))
			{
				header('Location: admin.php');
				//header('C:\xampp\htdocs\Lamp_P3A.php');
				exit();
			}
			else{
				echo "<br><br><p style='font-size:34px; text-align:center; font-weight:bold;'>
				You have supplied a wrong user/password combination. Please try again.</p>";
				echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;">
				<a href="signin.php">Sign In again</a></p>';
			}
		}
		else{
			$query = mysqli_query($connection,"SELECT * FROM users WHERE username='$user'");
			$numrows = mysqli_num_rows($query);
			if ($numrows!=0)
			{
				//while loop
				while ($row = mysqli_fetch_array($query))
				{               
					if($pass==$row['password'] && $row['is_active']==0)
					{	
						$_SESSION['id']    = $row['id'];
						$_SESSION['username']  = $row['username'];
						$_SESSION['user_level'] = $row['user_level'];
						$_SESSION['signed_in'] = true;
						header("location:index.php");
					}    
					elseif($row['is_active']==1)
					{
						echo "BLOCKED USER: Cannot login";
					}
					else
					{
						echo "<br><br><p style='font-size:34px; backgroung-color:gray;text-align:center; font-weight:bold;'>You have supplied a wrong user/password combination. Please try again.</p>";
						 echo '<p style="text-align:center; font-size:19px; font-weight:bold; font-decoration:none;"><a href="signin.php">Sign In again</a></p>';
					}
				}
					
			}

			else
			{
				echo 'You have supplied a wrong user/password combination. Please try again.';
			}
		}
	}
?>

<?php

include 'footer.php';

?>
</body>
</html>
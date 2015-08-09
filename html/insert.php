<?php

$user=$_POST['user'];

echo $_POST['hideShip'];

function valid_user($user) {

	echo "In the function call";
	//check an email address is possibly valid
	if (ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $user)) {
		return true;
	} 
	else {
		return false;
	}
}


$con=mysqli_connect("alice480.cs.mercer.edu","ContestDBUser","ContestUser","ContestDB");
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
	echo "Connection successful.";
}







try {

	if (!valid_user($user)) {
		throw new Exception('That is not a valid email address.
				Please go back and try again.');
	}
	
	if ($_POST['password'] != $_POST['password2']) {
		throw new Exception('The passwords you entered do not match - 
				please go back and try again.');
	}
	
	if ($_POST['password'] < 6 || $_POST['password'] > 15) {
		throw new Exception('The password you entered does not meet 
				the required length or is too long');
	}
	
	
}

catch (Exception $e)  {
	echo 'Problem:'; 
	echo $e->getMessage();
	exit;

}
 
$sql="INSERT INTO UserTable (User_ID, User_PW, User_FN, User_LN )
VALUES
('$_POST[user]', '$_POST[password]', '$_POST[firstname]', '$_POST[lastname]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);


?> 
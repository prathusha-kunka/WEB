
<?php 

// connect to the database
  $username = "";
  $password = "";
  $errors = array();
  $db = mysqli_connect('localhost:3307', 'root', 'yes', 'dbms');
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	//$password = ($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND pass='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
      header('location: student_detail.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
      echo "<p> please go an signup! </p>";
      echo "<a href = 'signup1.html'>clease on this link to redirect to the signup page ! </p>";
  	}
  }else{
    echo "<p> not entering if </p>";
  }
?>
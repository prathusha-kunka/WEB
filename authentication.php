<?php
session_start();

// initializing variables
$errors = array(); 
header('location:parent.html');
// connect to the database
$db = mysqli_connect('localhost:3307', 'root', 'yes', 'dbms');
// REGISTER USER
  // receive all input values from the form
  $fname = $_POST['fname'];
  $mname = mysqli_real_escape_string($db, $_POST['mname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']); 
  $month = mysqli_real_escape_string($db, $_POST['month']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $year= mysqli_real_escape_string($db, $_POST['year']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $s_add = mysqli_real_escape_string($db, $_POST['s_add']);
  $s_add2 = mysqli_real_escape_string($db, $_POST['s_add2']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $d_id = mysqli_real_escape_string($db, $_POST['d_id']);
  $quota = mysqli_real_escape_string($db, $_POST['quota']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "first name is required"); }
  if (empty($lname)) { array_push($errors, "last name is required"); }
  if (empty($number)) { array_push($errors, "number is required"); }
  if (empty($month )) { array_push($errors, "month is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }
  if (empty($year)) { array_push($errors, "year is required"); }
  if (empty($gender)) { array_push($errors, "gender is required"); }
  if (empty($s_add)) { array_push($errors, "street address 1 is required"); }
  if (empty($s_add2)) { array_push($errors, "street address 2 is required"); }
  if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($state)) { array_push($errors, "state is required"); }
  if (empty($pincode)) { array_push($errors, "pincode is required"); }
  if (empty($country)) { array_push($errors, "country is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }
  if (empty($age)) { array_push($errors, "age is required"); }
  if (empty($d_id)) { array_push($errors, "your respective department is required"); }
  if (empty($quota)) { array_push($errors, "quota is required"); }


 // if ($password_1 != $password_2) {
	//array_push($errors, "The two passwords do not match");
 
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM student WHERE Phone_No='$phone' and Email_Id='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // if ($user)
  // { // if user exists
  //   echo "<p>1234</p>";
  //   if ($user['phone'] === $phone)
  //   {
  //     array_push($errors, " this name already exists");
  //   }

  //   if ($user['email'] === $email)
  //   {
  //     array_push($errors, "email already exists");
  //   }
  // }

  // Finally, register user if there are no errors in the form
  	//$password = ($password_1);//encrypt the password before saving in the database
    $name = ($fname.' '.$mname.' '.$lname);
    $address = ($s_add.','.$s_add2);

    $query = "INSERT INTO student (Name,Phone_No,Address,City,State,Email_Id,Gender,Age,D_ID) 
  			  VALUES('$name', '$phone','$address','$city','$state','$email','$gender','$age','$d_id')";

    
    
  	mysqli_query($db, $query);
    mysqli_query($db, $query1);
?>
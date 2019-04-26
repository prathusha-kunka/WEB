<?php
session_start();

// initializing variables
$errors = array(); 
header('location:marks.html');
// connect to the database
$db = mysqli_connect('localhost:3307', 'root', 'yes', 'dbms');

// REGISTER USER
  $m_n = mysqli_real_escape_string($db, $_POST['m_n']);
  $f_n = mysqli_real_escape_string($db, $_POST['f_n']);
  $m_s = mysqli_real_escape_string($db, $_POST['m_s']);
  $f_s = mysqli_real_escape_string($db, $_POST['f_s']); 
  $m_d = mysqli_real_escape_string($db, $_POST['m_d']);
  $f_d = mysqli_real_escape_string($db, $_POST['f_d']);
  $m_p= mysqli_real_escape_string($db, $_POST['m_p']);
  $f_p = mysqli_real_escape_string($db, $_POST['f_p']);
  $m_e = mysqli_real_escape_string($db, $_POST['m_e']);
  $f_e = mysqli_real_escape_string($db, $_POST['f_e']);


  if (empty($m_n)) { array_push($errors, "mother name is required"); }
  if (empty($f_n)) { array_push($errors, "father name is required"); }
  if (empty($m_s)) { array_push($errors, "mother salary is required"); }
  if (empty($f_s )) { array_push($errors, "father salary is required"); }
  if (empty($m_d)) { array_push($errors, "mother designation is required"); }
  if (empty($f_d)) { array_push($errors, "father designation is required"); }
  if (empty($m_p)) { array_push($errors, "mother phone number is required"); }
  if (empty($f_p)) { array_push($errors, "father phone number is required"); }
  if (empty($m_e)) { array_push($errors, "mother email id is required"); }
  if (empty($f_e)) { array_push($errors, "father email id is required"); }

  $stud=58;
  $stud=$stud +1;

  
  $query1 = "INSERT INTO parent (stud_ID,Mother_Name,Father_Name,Mother_Salary,Father_Salary,M_Designation,F_Designation, M_Phone_No,F_Phone_No,M_EmailId,F_EmailId) 
          VALUES('$stud','$m_n','$f_n','$m_s','$f_s','$m_d','$f_d','$m_p','$f_p','$m_e','$f_e')";
  	mysqli_query($db, $query1);
 ?>
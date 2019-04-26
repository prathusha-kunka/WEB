
<?php 

// connect to the database
  $errors = array();
  header('location:front.php');
  $db = mysqli_connect('localhost:3307', 'root', 'yes', 'dbms');
  $m10 = mysqli_real_escape_string($db, $_POST['marks10']);
  $m12 = mysqli_real_escape_string($db, $_POST['marks12']);

  if (empty($m10)) { array_push($errors, "mother email id is required");}
  if (empty($f12)) { array_push($errors, "father email id is required");}

  
  $stud=57;
  $stud=$stud+1;

  $query1 = "INSERT INTO marks (s_id,tenth,twelth) 
          VALUES('stud','$m10','$m12')";
    mysqli_query($db, $query1);
?>
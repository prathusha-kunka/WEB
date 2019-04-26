<?php
		session_start();
		//echo "string";
		// initializing variables
		//$errors = array();
		$db = mysqli_connect('localhost:3307', 'root', 'yes', 'dbms');
		$student='';
		$id='';
		// REGISTER USER
		$id = $_POST['id'];
		$phone =  $_POST['p'];
		$email =  $_POST['e'];
		$student =  $_POST['student'];
		$p_phone =  $_POST['p_p'];
		$p_email =  $_POST['p_e'];
		$parent =  $_POST['parent'];
		if ($student == "student")
		{	
			$query1 = "UPDATE student SET Phone_No = '$phone', Email_Id = '$email' WHERE Stud_ID = $id";
		    mysqli_query($db, $query1);
		}
		if ($parent == "parent")
		{	
			$query2 = "UPDATE parent SET M_Phone_No = '$p_phone', M_EmailId = '$p_email' WHERE Stud_ID = $id";
		    mysqli_query($db, $query2);
		}
	header('location:front.php');
?>
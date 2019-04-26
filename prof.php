<?
	session_start();
	include("authentication.php");
	$query="SELECT Name,Father_Name,D_ID FROM student,parent,deparment WHERE ID='01FB14EBT001'".$_SESSION['id']."' LIMIT 1";
	$result = mysqli_query($link,$query);
	$row = mysqli_fetch_array($result);
	$diary=$row['name'];
?>

<?php 
// include_once '../php/db.php';
$conn = mysqli_connect('134.209.40.0', 'root', 'testpass','registration');

// Check connection

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1 cellpadding="5" style="padding:10px;">
		
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>b_day</th>
		<th>faculty</th>
		<th>subj</th>
		<th>gpa</th>
		<th>info</th>
		<th>photo</th>
	</table>
	<?php 
	$sel = "SELECT * FROM candidates";
	$res =  $conn->query($sel);
	while ($row = $res->fetch_assoc()){
		echo '<td>'.$row['id'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;'; 
		echo '<td>'.$row['name'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;'; 
		echo '<td>'.$row['email'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;'; 
		echo '<td>'.$row['dob'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;'; 
		echo '<td>'.$row['faculty'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;'; 
		echo '<td>'.$row['subjects'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;'; 
		echo '<td>'.$row['gpa'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;'; 
		echo '<td>'.$row['info'].'</td> &nbsp;&nbsp;&nbsp;&nbsp;'; 
		echo '<td><img src="'.$row['photo'].'" width="150"></td> &nbsp;&nbsp;&nbsp;&nbsp;<HR>'; 
	}
?>
<style type="text/css">
			 td{
				padding: 20px;
				border: solid 1px black;
			}
		</style>
</body>
</html>
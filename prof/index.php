
<?php 
// include_once 'header.php';
 ?>
<?php 
$conn=  mysqli_connect('localhost','root','','registration');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css"></link>
	    <title>Profiles</title>
  </head>
  <body>
  	 <a href="profiles.php">PROFILES</a>
    <div class="landing">
      <div class="container">
  
<?php 
$sel= "SELECT * FROM candidates";
$all=$conn->query($sel);
while($row = $all->fetch_assoc()){
		echo '<div class="card">
		<h1>View:'.$row['view'].'</h1>
		<form  action="index.php" method="POST">
			&nbsp;	YES<input type="submit" name="yes" value="'.$row['id'].'" style="border:none;border-radius:10%; padding:15px;">
			&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	
			NO<input type="submit" name="no" value="'.$row['id'].'" style="border:none;border-radius:10% ;padding:15px;">
			</form>

				<div class="top-section">
				  <img
					src="../'.$row['photo'].'"
					height="200" alt=""
				  />
				  <div class="name">
					<span>'.$row['name'].'</span>
					
				  </div>
				</div>
				<div class="info-section">
            <div class="skills">
                <ul>
                    <li>Birth Date:'.$row['dob'].'</li>
                    <li>Contact number:'.$row['phone'].'</li>
                    <li>Email:'.$row['email'].'</li>
                    <li>Faculty:'.$row['faculty'].'</li>
                    <li>Major subject:'.$row['subjects'].'</li>
                </ul>
              </div>


          <div class="skills">
            <h5>Skills</h5>
            <ul>

              <li>'.$row['info'].'</li>
              
            </ul>
          </div>
				
				</div>
			  </div>';
}
 ?>
	


  
       
        </div>
      </div>
    </div>
  </body>
</html>
<?php 
// include_once 'footer.php';
 ?>
 <?php
if (isset($_POST['yes'])){
	$id = $_POST['yes'];
	 $upd = "UPDATE candidates SET view=1 WHERE id='$id'";
	 $conn->query($upd);
}
else if(isset($_POST['no'])){
	$id = $_POST['no'];
	 $upd = "UPDATE candidates SET view=0 WHERE id='$id'";
	 $conn->query($upd);
}

  ?>
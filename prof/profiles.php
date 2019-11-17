
<?php 
// include_once 'header.php';
 ?>
<?php 
$conn=  mysqli_connect('134.209.40.0','root','testpass','registration');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="main.css"></link>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	    <title>Profiles</title>
  </head>
  <body>
  
<div class="wrap">
<img class="logo" src="logo_black.png">

<ul class="nav">
<a onclick="window.location.href='learn/project/#container'"><li class="selected">Main</li></a>
<a onclick="window.location.href='learn/project/#features'"><li>About Us</li></a>
<a  onclick="window.location.href='learn/project/#inner'"><li>For Student</li></a>
<a  onclick="window.location.href='learn/project/#breweries'"><li>Let's enroll</li></a>
</ul>


</div>
    <div class="landing">
      <div class="container">
   

  

  
<?php 
$sel= "SELECT * FROM candidates WHERE view=1 ";
$all=$conn->query($sel);
while($row = $all->fetch_assoc()){
		echo '<div class="card">

		

				<div class="top-section">
				  <img
					src="../'.$row['photo'].'"
					height="200" alt=""
				  />
				
				</div>

				<div class="info-section">
        <div class="name">
          <span>'.$row['name'].'</span>
          
          </div>
            <div class="skills">

                <ul>
                    <li><strong>Birth Date: </strong> '.$row['dob'].'</li>
                    <li><strong>Contact number: </strong>' .$row['phone']. '</li>
                    <li><strong>Email: </strong>'.$row['email'].'</li>
                    <li><strong>Faculty:  </strong>'.$row['faculty'].'</li>
                    <li><strong>Major subject:</strong>'.$row['subjects'].'</li>
                    <li><strong> Price per hour :</strong> '.$row['price'].' Tenge</li>
                       <li><strong> GPA is :</strong> '.$row['gpa'].'</li>
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
 <section class="stay_con">



<img style='height: 100%; width: 100%; object-fit: contain; background-repeat:no-repeat' src="learn/prof/asd.png">

</section>    
  </body>

</html>
<?php 
// include_once 'footer.php';
?>
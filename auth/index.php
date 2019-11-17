
        <!-- Left navbar-header end -->
        <!-- Page Content -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>

      
<div class="container">
      
                        <form id="contact" action = "content-upload.php" method = "POST" enctype = "multipart/form-data">
                   <h3>Plug & Learn</h3>
                <h4>Registration form</h4>
           <fieldset>
      <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
             <fieldset>
      <input placeholder="Your email" name="email" type="email" tabindex="1" required autofocus>
    </fieldset>
       <fieldset>
      <input placeholder="Your phone number" name="phone" type="text" tabindex="1" required autofocus>
    </fieldset>

             <fieldset>
                <label for="DateOfBirth">Date of Birth</label>
                <input type="date" name="dob" class="form-control" id="datepicker" placeholder="Show date of birth">

            </fieldset>



        <fieldset>
                <label for="exampleSelect2">Choose your faculty</label>
                <select class="form-control" name="faculty" id="exampleSelect2">
                    <option value="lawandsocialscience">Faculty of law and social science</option>
                    <option value="educationandhumanities">Faculty of education and humanities</option>
                    <option value="engineeringandnaturalsciences">Faculty of engineering and natural sciences</option>
                    <option value="businessschool">SDU business school</option>

                </select>
          </fieldset>
         <fieldset>
                <label for="exampleSelect1">Choose subject</label>
                <select class="form-control" name="subjects" id="exampleSelect1">
                    <option value="Chemistry">Chemistry</option>
                    <option value="Probability">Probability</option>
                    <option value="">Linear Algebra</option>
                    <option value="Calculus">Calculus</option>
                    <option value="Java">Java</option>
                    <option value="cpp">C++</option>
                    <option value="Python">Python</option>
                </select>
           </fieldset>
          <fieldset>
      <input placeholder="  Your gpa" name="gpa" type="Number" step="any" tabindex="1" min="0" max="4" required autofocus>
    </fieldset>
     <fieldset>
      <input placeholder="  Your price" name="price" type="Number" step="any" tabindex="1" required autofocus>
    </fieldset>
            <div class="form-group">
                <label for="exampleTextarea">Is there some extra information to add?(if there is more subject to teach)</label>
                <textarea class="form-control" name="info" id="exampleTextarea" rows="3"></textarea>
            </div>
    
            <fieldset>
                   <label for="exampleTextarea">Upload your photo</label>
                  <input type="file" name="file_name" class="form-control">
                </fieldset>


  <button name="upload" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>

<!--  
            <button type="reset" class="btn btn-primary">Cancel</button> -->
       </form>


                              
                
        <!-- /#page-wrapper -->
    </div>
</body>
</html>
        
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    
</body>

</html>

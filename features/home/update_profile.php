<?php 
session_start();



$email = $_SESSION["email"];


$admin = $_SESSION["utype"];


if ($admin=="company") {
    $error = '<div class="alert alert-danger">Log into jobseeker profile for posting review.</div>';
    session_destroy();
   
    header("location: ../account/jobseeker/jobseeker_login.php?error=$error");

}
else{

        
    }


   

?>


<?php
                           $conn = new mysqli("localhost", "root", "", "jobs_hub");
                            $query = "select id from user_account where email ='".$_SESSION['email']."'";
                            $result6 = mysqli_query($conn,$query);
                            while ($row = $result6->fetch_assoc()) {
                                $id = $row['id']; 
                                
                            }
                            ?>




<?php

$conn = new mysqli("localhost", "root", "", "jobs_hub");




$result7=mysqli_query($conn,"SELECT * FROM seeker_profile where user_id = $id");
$query = "SELECT COUNT( *) as Num
   FROM seeker_profile";
$result17 = mysqli_query($conn,$query);
while ($row = $result17->fetch_assoc()) {
$seeker = $row["Num"];

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set up your profile</title>

 

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css" />

    <!-- core style css -->
    <link href="css/styles.css" rel="stylesheet" />
    
 

</head>
<body>

       <header>
            <div class="navbar-default">
               

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="menu_area">
                                <nav class="navbar fixed-center navbar-expand-lg navbar-light no-padding">

                                    <div class="navbar-header">
                                        <!-- start logo -->
                                        <a href="home.php" class="navbar-brand width-200px sm-width-180px xs-width-150px"><img id="logo" src="img/logos/logo.png" alt="logo"></a>
                                        <!-- end logo -->
                                    </div>

                                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                                    <!-- start menu area -->
                                    <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                        <li><a href="home.php">Home</a></li>
                                     
                                        <li><a href="jobs_list.php">jobs list</a></li>
                                        <li><a href="profile.php">Dashboard</a></li>
                                        <li><a href="post_review.php">Post a review</a></li>
                                        <li><a href="../account/logout.php" class="btn btn-warning p-3" >Logout</a></li>
                                    </ul>
                                    <!-- end menu area -->

                                   
                                

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
   <?php
 


                  if(isset($_GET['error']))
                   echo $_GET['error'];
   
 
                 ?>
 
       <div class="bradcam_area_2 bradcam_bg_2">
        <div class="container">
          
            <div class="row">
                <div class="col-xl-5">
                    <div class="bradcam_text">
                        <h3>Set up your jobseeker profile</h3>
                      
      
                            
                            <h3 style="color: #485460" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s"> <?php echo $seeker ;?>  resume listed</h3>
                             
                    
                    </div>
                </div>

            <div class="col-xl-6 d-none d-lg-block text-right" >
        
        <img class="wave3 wow shake" data-wow-duration="1s" data-wow-delay=".2s" src="img/job.svg">

            </div>

            </div>
        </div>
          </div> 



  
         <div class="review_details_area">
        <div class="container">
		
          <div class="review_form white-bg">
  <img class="wave" src="img/type.svg">
          
                        <h4>Set your profile</h4> 
						
					
                        <form method="post" name = "reviewform" action="update_profile-method.php" enctype="multipart/form-data" >
						 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="validationCustom01" ><i class="fa fa-user" aria-hidden="true"></i> First Name</label>
                                            <input class="form-control"  type="text" name="first_name" placeholder="First name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="validationCustom01" > Last Name</label>
                                            <input class="form-control"  type="text" name="last_name" placeholder="Last name" >
                                    </div>
                                </div>
                                
                                 <input  class="form-control"  type="hidden" value="<?php echo $id;?>" name="user_id" placeholder="First name" >
								
								
                                
                                <div class="col-md-9">
                                    <div class="input_field">
                                    	    <label for="validationCustom01" > School Name</label>
                                            <input class="form-control"  type="text" name="school" placeholder="School Name">
                                    </div>
                                </div>

                                 <div class="col-md-3">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > SSC GPA</label>
                                        <input class="form-control"   type="float" name="ssc_gpa" placeholder="SSC GPA">
                                    </div>
                                </div>
                                 <div class="col-md-9">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > Collage Name</label>
                                            <input class="form-control"   type="text" name="collage" placeholder="Collage Name">
                                    </div>
                                </div>

 								<div class="col-md-3">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > HSC GPA</label>
                                        <input class="form-control"  type="float" name="hsc_gpa" placeholder="HSC GPA">
                                    </div>
                                </div>
                              

                                <div class="col-md-9">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > University Name</label>
                                           <input class="form-control"    type="text" name="uni_name" placeholder="University Name">
                                    </div>
                                </div>
                              
                                <div class="col-md-3">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > Undergrad CGPA</label>
                                        <input class="form-control"  type="float" name="uni_cgpa" placeholder="Undergrad CGPA">
                                    </div>
                                </div>

                               
                                	<div class="col-md-6">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > Current Job</label>
                                           <input class="form-control"  type="text" name="curent_job" placeholder="Current Job" >
                                    </div>
                                </div>


                                	<div class="col-md-6">
                                    <div class="input_field">
                                    	<label for="validationCustom01" >Previous Job</label>
                                           <input class="form-control"  type="text" name="previous" placeholder="Previous Job" >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > Add your skills</label>
                                           <input class="form-control"  type="text" name="skill" placeholder="Your skills" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > Age</label>
                                           <input class="form-control"  type="number" name="age" placeholder="Your Age" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input_field">
                                    	<label for="validationCustom01" > Email</label>
                                           <input class="form-control"   type="text" name="email" placeholder="Email" >
                                    </div>
                                </div>
                         <div class="col-md-6 mt-4">

        
          <div class="file-field">
            <div class="z-depth-1-half mb-4">
              <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid"
                alt="example placeholder">
            </div>
            <div class="d-flex justify-content-center">
              <div class="input_field">

                                    <input type="file" name="picFile" required>
                                      </div>
            </div>
          </div>
        

      </div>


                                <div class="col-md-12">
                                    <div class="submit_btn">
                                        <button id="spost"  class="btn btn-dark btn-blcok mt-2" name = "submit" type="submit">Update Profile</button>

                                    </div>
                                </div>

                            </div>

                        </form>

</div>


                    </div>

        </div>
      </div>
    </div>

  </body>

   <script src="js/core.min.js"></script>

    <!-- Serch -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>
   
   
</html>
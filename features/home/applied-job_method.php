<?php
session_start();


 if(isset($_SESSION['utype']))
{
    $admin = $_SESSION["utype"];

if ($admin=="company") {
   
        $error = '<div class="alert alert-danger">Log into jobseeker profile to apply for a job</div>';
    session_destroy();
   
    header("location: ../account/jobseeker/jobseeker_login.php?error=$error");
}
else{
     
    


   



$email = $_SESSION["email"];
$jobid = $_GET['jobpost'];
$cid = $_GET['com'];
$error = "";

                           $conn = new mysqli("localhost", "root", "", "jobs_hub");
                            $query = "select id from user_account where email ='".$_SESSION['email']."'";
                            $result6 = mysqli_query($conn,$query);
                            while ($row = $result6->fetch_assoc()) {
                                $id = $row['id']; 
                                
                            }

                              
                          



 
     $duplicate=mysqli_query($conn,"select * from job_post_activity where user_id='$id' AND job_post_id = '$jobid'");
   
    
     $conn = new mysqli("localhost", "root", "", "jobs_hub");
     $query= "select deadline from job_post where id = $jobid" ;
                            $result7 = mysqli_query($conn,$query);
                             while ($row2 = $result7->fetch_assoc()) {
                              $deadline = $row2['deadline'];
                                
                            }

    
            
 $user_id=mysqli_query($conn,"select * from seeker_profile where user_id = '$id'");

$today = date("Y-m-d H:i:s");

// $expiration_date = strtotime($deadline);

    
    
 if (mysqli_num_rows($duplicate)>0)
{
    $error = '<div class="alert alert-danger">You have already applied!.</div>';
    
    header("Location: home.php?error=$error");
}
elseif($deadline < $today){

   $error = '<div class="alert alert-danger">Deadline expired!.</div>';
    
    header("Location: home.php?error=$error");
}
elseif(mysqli_num_rows($user_id)==0)
{
$error = '<div class="alert alert-danger">Please create your resume first!.</div>';
    
    header("Location: update_profile.php?error=$error");
}


else{
 
	
	

    
		

                    $insert = $conn->query("INSERT into job_post_activity (`user_id`,`job_post_id`,`company_id`) VALUES ('$id','$jobid','$cid')");

                    $conn->close();
                 
                    if ($insert) {
                        $error = '<div class="alert alert-success">Applied successfully!</div>';
                        header("Location: home.php?error=$error");
                    } else {
                        $error = '<div class="alert alert-danger">Please try again. </div>';
                        header("Location: home.php?error=$error");
                    }
                 
            
        // Display status message
        echo $error;


    }



	
}

}else
{
      $error = '<div class="alert alert-danger">You cant apply for jobs by using social login </div>';
      header("Location: ../account/home.php?error=$error");
}

    ?>
	
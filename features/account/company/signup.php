<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Account</title>


      <link rel="stylesheet" type="text/css" href="../css/reg.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
    <script src="https://kit.fontawesome.com/5bd5cf3f78.js" crossorigin="anonymous"></script>

    <style>
.main {
    background: #daeefe;
    padding: 50px;
}
</style>

</head>
<body>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title p-0 mb-2">Sign up</h2>
                        <small id="emailHelp" class="form-text text-muted mb-5">We'll never share your email with anyone else.</small>

                        <form method="post" name="regform"  class="register-form" id="register-form" action="createacc.php">
  <div class="form-group">
  
   
      

    
      <label for="validationCustom01" ><i class="fa fa-user" aria-hidden="true"></i>  Company name</label>
      <input type="text" class="form-control mb-3" id="validationCustom01" placeholder="Company name" name="company_name"  required>
     
    
    
    
 

    <label for="exampleInputEmail1"><i class="fa fa-envelope" aria-hidden="true"></i></i>  Email address</label>
    <input type="email" class="form-control mb-3" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a valid email" required>
    
    <label for="exampleInputEmail1"><i class="fas fa-info-circle" aria-hidden="true"></i></i>  Company profile description</label>
    <input type="text" class="form-control mb-3" name="profile_description" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company description" required>
  
    <label for="exampleInputEmail1"><i class="far fa-address-card" aria-hidden="true"></i></i> Company address</label>
    <input type="text" class="form-control mb-3" name="address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company address" required>
 <input type="hidden" class="form-control mb-3" name="admin" value='company' >
    
    
        <div class="form-row mb-3">
        <div class="col-sm-6">
            <label for="exampleInputEmail1"><i class="fa fa-key" aria-hidden="true"></i>  Password</label>
            <input type="password" class="form-control" name="password"
                data-bv-identical="true"
                data-bv-identical-field="confirmPassword"
                data-bv-identical-message="The password and its confirm are not the same"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                 required/>
        </div>
    

    
        
        <div class="col-sm-6 ">
            <label for="exampleInputEmail1">Retype password</label>
            <input type="password" class="form-control" name="confirm_password"
                data-bv-identical="true"
                data-bv-identical-field="password"
                data-bv-identical-message="The password and its confirm are not the same" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                required/>
        </div>
    </div>

    
   
  
   
    <div class="form-check p-0">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label p-0" for="invalidCheck">
        <small id="emailHelp" class="form-text text-muted ">
        Agree to terms and conditions
    </small>
      </label>
      <div class="invalid-feedback" >
        You must agree before submitting.
      </div>
    </div>
  
  
  

  <input type="submit" name="submit" id="signup" class="btn btn-primary btn-lg btn-block" value="Register"/>

</div>
</form>


  
  
 <?php
 


if(isset($_GET['error']))
   echo $_GET['error'];
  

?>
                    </div>

                    <div class="signup-image">
                        <figure><img src="../assets/images/logo.png" alt="sing up image"></figure>

                        <figure><img src="../assets/images/create ac company.svg" alt="sing up image"></figure>
                        
                         <a class="form-text text-muted" href="company_login.php">  <i class="fas fa-user"></i>  I am already a member </a> 
                    </div>
                </div>
            </div>
        </section>




    </div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
     <script src="https://www.google.com/recaptcha/api.js" async defer></script






</body>
</html>

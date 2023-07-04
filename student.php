<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login as Students</title>

 <!-- CSS -->
 <link rel="stylesheet" href="css/student.css">

 <!-- Boostrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 

</head>
<body>
  
  <section id="StudentLoginPage">
    <div class="container">
      <div class="row">

         <div class="col" style="text-align: center;">
          <img class="ipsychlogo" src="systemlogo/ipsychlogo.png">
         </div>
         <div class="col">
          <form class="log-box">
            <div>
              <h1 class ="deptname"> SCHOOL OF PSYCHOLOGY AND HUMAN SERVICES</h1> 
             </div> 

                <div class="labelname"><label for="email"><b>Username</b></label></div>
                <div><input type="text" placeholder="Enter username" name="email" id="email" required></div>
                
                <div class="labelname"><label><b>Password</b></label></div>
                <div><input type="password" placeholder="Password" name="psw" id="psw" required></div>
        
                <p class="labelname">Forgot Password? <a class="forgotname" href="forgot.html">Click here</a>.</p>
        
                <button type="button" id="submitData" name="submitData" class="registerbtn">Login</button>

                <div><p class="or">Or</p></div>

                <p class="labelcreate">Does not have an account?</p>
        
                <button type="button" onclick="location.href='createaccount.html'" class="createbtn">Create Account</button>
        </form>
      </div>
  </div>
  </section> 
</body>
</html>
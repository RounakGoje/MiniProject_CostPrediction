<?php  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 session_start();  
  
  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["newpassword"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);
           $newpassword = mysqli_real_escape_string($connect, $_POST["newpassword"]); 

           $pass = password_hash($password, PASSWORD_BCRYPT);
           $cpass = password_hash($newpassword, PASSWORD_BCRYPT);


           $query = "SELECT * FROM client WHERE email = '$username'";  
           $query1 = "UPDATE client SET password = '$cpass' WHERE email = '$username'";
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                           $result1 = mysqli_query($connect, $query1);    
                           header("location:http://localhost/p/miniproject/msg2.php");
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details2")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Reset Password</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <link rel="stylesheet" type="text/css" href="clientlogin.css"> 
      </head>  
      <body>
      <div class="header">
           <a href="#default" class="logo">Car Spot</a>
           <div class="header-right">
           <a class="active" href="http://localhost/p/miniproject/landding%20page/index.php">Home</a>
           <a href="http://localhost/p/miniproject/clientregform.php">Registration</a>
           <a href="http://localhost/p/miniproject/about.php">About</a>
           </div>
           </div>
           <div style="padding-left:20px"></div>    
           <br /><br />  
           <div class="container" style="width:500px;">
                <h3 align="center">...Welcome...</h3>  
                <br />  
                 <div class="login-box">
                <h3 align="center">Reset Password</h3>
                <div class="vl"></div>  
                <br />  
                <form method="post">  
                      <div class="textbox">
                      <i class="fa fa-user" aria-hidden="true"></i>
                     <input type="text" placeholder="Username" name="username" class="form-control" />
                     </div>  
                     <br />  
                      <div class="textbox">
                      <i class="fa fa-lock" aria-hidden="true"></i>  
                     <input type="password" placeholder="Old Password" name="password" class="form-control" />
                     </div>   
                     <br />  
                     <div class="textbox">
                      <i class="fa fa-lock" aria-hidden="true"></i>  
                     <input type="password" placeholder="New Password" name="newpassword" class="form-control"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                     </div>   
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />
                     <a href="#forgot-psw" class="forgot-psw">Forgot Password?</a>    
                     <br />  
                </form> 
                </div>  
                  
                 
                 
           </div>  
      </body>  
 </html>  
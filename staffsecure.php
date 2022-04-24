<?php
    session_start();
    if(isset($_POST['submit'])){
      require_once('./Config.php');
        // $server= "localhost";
        // $username="root";
        // $password="";
        // $con= mysqli_connect($server,$username,$password,'dowell university');
        // if(!$con){
        //     die("Connection not made due to".mqsqli_connect_error());
        // }
        
        $id = $_SESSION['id'];
        //$pass = crypt($_POST['op'],$id);
        $npass= crypt($_POST['np'],$id);
        $cpass= crypt($_POST['cnp'],$id);
        $pass1= $_POST['np'];
        $query= "SELECT * from staff WHERE sid='$id'";
        $result = $con->query($query);
        if($result){
            // $query= "UPDATE students SET Password='$pass' Where SID='$id'";
            // if($con->query($query)){
                
            // }
            // else{
            //     echo"Failed in updating the password";
            // }
            if($npass==$cpass){
                $regex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/";
                if(preg_match($regex,$pass1)){
                    $query= "UPDATE staff SET Password='$npass' Where sid='$id'";
                    if($con->query($query)){
                        echo "<h3 style='color:green'>Updated successfully<a href='Login.php'>Go Back to Login Page</a></h3>";
                    }
                }
                else{
                    echo"<h3 style='color:red'>Invalid New Password</h3>";
                }
            
            }
            else{
                //echo $cpass."           ".$npass."<br/>";
                echo "<h3 style='color:red'>Passwords should match</h3>";
            }
        }
        else{
            echo "<h3 style='color:red'>There is some error<a href='Login.php'>Go Back to Login Page</a></h3>";
        }
    }


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
      .header {
          overflow: hidden;
          background-color: #fff;
          padding: 20px 10px;
        }


        .header a {
          float: right;
          color: black;
          text-align: center;
          padding: 12px;
          text-decoration: none;
          font-size: 18px;
          line-height: 25px;
          border-radius: 4px;
        }


        .header a.logo {
          font-size: 25px;
          font-weight: bold;
        }


        .header a:hover {
          background-color: #ddd;
          color: black;
        }


        .header a.active {
          background-color: dodgerblue;
          color: white;
        }


        .header-right {
          float: right;
        }


        @media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: left;
          }
          .header-right {
            float: none;
          }
        }


    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:#acb7ae">
  <div class="header">
    <!-- This is the header -->
    <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
    <a href="Staff Dashboard.php" class="btn btn-outline-primary">Dashboard</a>
    
  <form method="post" id="regform">
    <!-- Login form with styling -->
     <div style="margin-left:30%; margin-top:10%;background-color:#e4decd;
  	border-radius: 5px;
  	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  	overflow: hidden;
  	width: 400px;
  	max-width: 100%;" class="container">
          <h3 style="margin-left:130px">Change Password</h3>
           <div class="form-row" >
          <!-- <div class="col">
              <label for="op">Enter old password</label>
              <input type="password" class="form-control" placeholder="oldpasword" id="op" name="op" required>
          </div> -->


      </div>
       <div class="form-row" >
          <div class="col">
          <label for="np"> New Password</label>
              <input type="password" class="form-control" placeholder="new password" id="password" name="np" required>

          </div>
      </div>
      <div class="form-row" >
          <div class="col">
          <label for="cnp"> Confirm New Password</label>
              <input type="password" class="form-control" placeholder="confirm password" id="cpassword" name="cnp" required>

          </div>
      </div>

      <div class="form-row" >
          <div class="col">
              <button class="btn btn-primary" name="submit" action="submit">Update</button>
          </div>
      </div>

     </div>
  </form>
  <!-- <script>
  
  var form = document.getElementById("regform");
var password = document.getElementById("password");
var cpassword = document.getElementById("cpassword");
console.log(password)





form.addEventListener('submit', e => {
    e.preventDefault();
    var schema=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,12}$/;
    if(password.value.match(schema)){
        console.log(password.value)

    }
    else{
        console.log(password.value)
        alert("The password should be 6 to 12 characters in length. It should contain 1 lowercase and 1 uppercase letter and of the special character !@#$%^%")

    }
    if(password.value===cpassword.value && password.value.match(schema)){
        // alert("Your form has been submitted");
        // form.submit();
        console.log(cpassword);
    }
    else{
        alert("The passwords should match")
    }


});

  
  
  </script> -->

</html>

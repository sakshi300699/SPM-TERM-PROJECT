<?php 
session_start();
  
if(isset($_SESSION['username'])){
  header('loaction:./Student Dashborad.php');
}
    if(isset($_POST['sid'])){
      require_once('./Config.php');
//       $server= "localhost";
//    $username="root";
//    $password="";
//    $con= mysqli_connect($server,$username,$password,'dowell university');
//    if(!$con){
//     die("Connection not made due to".mqsqli_connect_error());
// }



      $sid=$_POST['sid'];
    $password=$_POST['password'];
    $password1= crypt($password,$sid);
   
    $query = "SELECT * FROM staff where sid='$sid'";
    $result = $con->query($query);
   
  
   $row= $result->fetch_array();
   if($row['sid']!= $sid){
     //if there is no matching staff id
     echo "<p style='color:red'>No such user</p>";
   }
   else{
     if($row['password']== $password1 ){
       //redirecting to dashboard if the password is incorrect
       header('location: ./Staff Dashboard.php');
       $_SESSION['username']= $row['FirstName'];
       $_SESSION['id']=$row['sid'];
     }
     else{
       // if the password is incorrect
       echo "Incorrect Password";
     }
   }
   
 
   $con->close();
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
          float: left;
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
    <div class="header-right">
      <a href="Home.php">Home</a>
      <a href=" Staff Registration.php">Register</a>

      <a href="#">Contact</a> <!--You can a page containing containing contact details-->
    </div>
  </div>
  <form method="post">
    <!-- Login form with styling -->
     <div style="margin-left:30%; margin-top:10%;background-color:#e4decd;
  	border-radius: 5px;
  	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  	overflow: hidden;
  	width: 400px;
  	max-width: 100%;" class="container">
          <h3 style="margin-left:130px">Login</h3>
           <div class="form-row" >
          <div class="col">
              <label for="sid">Staff ID</label>
              <input type="text" class="form-control" placeholder="Staff ID" id="sid" name="sid" required>
          </div>


      </div>
      <div class="form-row" >
          <div class="col">
              <a href="#">Forgot Staff ID?</a>
          </div>
      </div>
       <div class="form-row" >
          <div class="col">
          <label for="password">Password</label>
              <input type="password" class="form-control" placeholder="password" id="password" name="password" required>

          </div>
      </div>
      <div class="form-row" >
          <div class="col">
              <a href="#">Forgot Password?</a>
          </div>
      </div>
      <div class="form-row" >
          <div class="col">
              <button class="btn btn-primary" action="submit">Login</button>
          </div>
      </div>

     </div>
  </form>

</html>

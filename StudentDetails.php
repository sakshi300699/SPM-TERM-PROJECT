<?php
  session_start();
  require_once('./Config.php');
//   $server= "localhost";
//   $username="root";
//   $password="";
//   $con= mysqli_connect($server,$username,$password,'dowell university');
//   if(!$con){
//    die("Connection not made due to".mqsqli_connect_error());
// }
//getting ID from URL
  $id = $_SESSION['id'];
  //query to select record which matches the given student id
  $query= "SELECT * from students WHERE sid='$id'";
  $result= $con->query($query);
  $record = $result->fetch_array();
  $lname= $record['LastName'];
  $email = $record['Email'];
  $adderess= $record['Adderess'];
  $phone = $record['PhoneNumber'];
  $dob = $record['DOB'];
  //$courses = $record['couses'];
  //$courses=json_encode($courses,true);

?>

<!DOCTYPE html>
<html>
    <head>
      <title>Student Details</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <style>
      .header {
          overflow: hidden;
          background-color: #ffffff;
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
    <body>
    <div class="header">
      <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
      <div class="header-right">
      <a href="Student Dashborad1.php" class="btn btn-outline-primary">Dashboard</a>
        <a href="studentLogout.php" class="btn btn-outline-primary">Logout</a>
        <a href="studentsecure.php" class="btn btn-outline-primary">Change Password</a>

      </div>
    </div>
    <h4 class="display-4">Welcome <?php  echo $_SESSION['username'];?></h4>
    <a  style="margin-top:200px;margin-left:600px;font-size:30px">Personal Details</a>
    <div style="margin-top:30px;margin-left:400px;width:800px;overflow:none;border:solid 2px">
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
                <div class="col" style="width:50%;border-right:2px solid;"><h5>First Name</h5></div>
                <div class="col" style="width:50%"><h5><?php echo $_SESSION['username'];?></h5></div>

            </div>
        </div>
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
              <div class="col" style="width:50%;border-right:2px solid;"><h5>Last Name</h5></div>
              <div class="col" style="width:50%"><h5><?php echo $lname;?></h5></div>

            </div>
            </div>
            <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
              <div class="col" style="width:50%;border-right:2px solid;"><h5>Email</h5></div>
              <div class="col" style="width:50%"><h5><?php echo $email;?></h5></div>

            </div>
        </div>
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
              <div class="col" style="width:50%;border-right:2px solid;"><h5>Address</h5></div>
              <div class="col" style="width:50%"><h5><?php echo $adderess;?></h5></div>

            </div>
        </div>
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
              <div class="col" style="width:50%;border-right:2px solid;"><h5>Date Of Birth</h5></div>
              <div class="col" style="width:50%"><h5><?php echo $dob;?></h5></div>

            </div>
        </div>
        <!-- <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
              <div class="col" style="width:50%;border-right:2px solid;"><h5>Couses</h5></div>
              <div class="col" style="width:50%"><h5><?php echo $courses;?></h5></div>

            </div>
        </div> -->
          
    </div>
    <a href="studentUpdate.php" class="btn btn-outline-primary" style="margin-top:40px;margin-left:45%">Update Details</a>
   </body>
</html>

<?php
     session_start();
     require_once('./Config.php');
  //    $server= "localhost";
  //    $username="root";
  //    $password="";
  //    $con= mysqli_connect($server,$username,$password,'dowell university');
  //    if(!$con){
  //     die("Connection not made due to".mqsqli_connect_error());
  //  }
     $id = $_SESSION['id'];
     $query= "SELECT * from staff WHERE sid='$id'";
     $result= $con->query($query);
    $record = $result->fetch_array();
    $lname= $record['LastName'];
    $name= $_SESSION['username'].' '.$lname;
    $query= "SELECT * from courses Where uc='$name' ";
    $result= $con->query($query);
    //var_dump($result);
   
    
      $record = $result->fetch_array();
      if($record){
        $class_id= $record['id'];
    $query= "SELECT * from studentcourses WHERE CID='$class_id'";
    $result= $con->query($query);
      }
      else{
        echo"<h3 style='color:red'>You have not been assigned a class</h3>";
      }
    
    

    
   

?>

<!DOCTYPE html>
<html>
    <head>
      <title>Staff Dashboard</title>
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
        <a href="Admin Login.php">Admin</a>
        <a href="Staff Dashboard.php">Dashboard</a>
        <a href="Upload.php">Upload a Notice</a>
        <a href="staffsecure.php">Change Password</a>
        
        <a href="Logout.php">Logout</a>

      </div>
    </div>
    <h2 class="display-2" style="margin-bottom:50px;margin-top:30px;margin-left:40%">My Class</h2>
    <table class="table table-hover table-bordered">
      <thead>
        <th scope="col">Student Name</th>
        <th scope="col">Email</th>
        <th scope="col">Student ID</th>
        <th scope="col">Phone Number</th>
        
        <!-- <th scope="col">Campus</th> -->
        <!-- <th scope="col">Preffered Days of teaching</th>
        <th scope="col">Consultation Hours</th> -->
        
      </thead>
      <tbody>
      <?php
        while($record= $result->fetch_array()){
            $student_id= $record['SID'];
            $query="SELECT * from students where SID='$student_id'";
            $result1= $con->query($query);
           $record1= $result1->fetch_array();
           $name= $record1['FirstName']." ".$record1['LastName'];
           $email= $record1['Email'];
           $sid= $record1['SID'];
           $phone=$record1['PhoneNumber'];
            echo "<tr>
            <td>$name</td>
            <td>$email</td>
            <td>$sid</td>
            <td>$phone</td>
            
        </tr>";
  

        }
      ?>
      </tbody>
      </table>
    </body>
    </html>
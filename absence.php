<?php
session_start();
$id= $_SESSION['id'];
    if(isset($_POST['submit'])){
      require_once('./Config.php');
    //     $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'dowell university');
    // if(!$con){
    //     die("Connection not made due to".mqsqli_connect_error());
    // }
    //recieving values from post request
    $from= $_POST['from'];$to=$_POST['to'];$description=$_POST['description'];
    //query to insert in the database
    $query= "INSERT INTO absence(`sid`,`from`,`to`,`description`) VALUES('$id','$from','$to','$description');";
    if($con->query($query)){
        echo"<h3 style='color:green' class='display:3'>Successfully Submitted</h3>";
    }
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
        <a href="Upload.php">Upload a Notice</a>
        <a href="staffsecure.php">Change Password</a>
        <a href="myClass.php">My Class</a>
        <a href="Staff Dashboard.php">Dashboard</a>
        <a href="Logout.php">Logout</a>
        
    

      </div>
    </div>
    <form method="post" style="margin-top:80px">
    <h2 style="margin-left:680px">Register</h2>
        <div style="margin-top:35px;background-color:#E27D60;border-radius: 5px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);overflow: hidden;width: 400px;max-width: 100%;" class="container">
                <div class="form-row">
                        <div class="col">
                        <label for="from">From</label>
                        <input type="date" class="form-control"  id="from" name="from" required/>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col">
                        <label for="to">To</label>
                        <input type="date" class="form-control"  id="to" name="to" required/>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col">
                        <label for="description">Description(Optional)</label>
                        <input type="text" class="form-control"  id="description" name="description" />
                        </div>
                </div>
                <div class="form-row">
                        <div class="col">
                        <button action="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
                
        </div>
    </form>
    </body>
    </html>
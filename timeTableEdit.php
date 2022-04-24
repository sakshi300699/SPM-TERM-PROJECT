<?php
        if(isset($_POST['submit'])){
            $server= "localhost";
            $username="root";
            $password="";
            $con= mysqli_connect($server,$username,$password,'dowell university');
            if(!$con){
                die("Connection not made due to".mqsqli_connect_error());
            }
            $id = $_GET['id'];
            $day1=$_POST['fday'];
            $day2=$_POST['sday'];
            $day3=$_POST['tday'];
            $time= $_POST['time']; 
            $query="UPDATE timetabble SET Day1='$day1', Day2='$day2', Day3='$day3', time='$time' WHERE CID='$id'";
            if($con->query($query))    header('location: ./Master Page.php');
            else   echo $con->error;
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <meta charset="utf-8">
    <title>Update Time Table</title>
  </head>
  <body>
  <div class="header">
    <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
    <div class="header-right">
    <a href="Master Page.php">Dashboard</a>
      

    </div>
  </div>
  <form id="regform" method="post">
      <h2 style="margin-left:680px">Update</h2>
        <div style="margin-top:35px;background-color:#E27D60;border-radius: 5px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);overflow: hidden;width: 400px;max-width: 100%;" class="container">
        <div class='form-row'>
                <div class='col'>
                        <label for="time">Select Time</label>
                        <input type="time" class="form-control" id="time" name="time">
                </div>
        </div>
        <div class='form-row'>
                <div class='col'>
                        <label for="fday">Select First day</label>
                        <div class='input-group'>
                        <select class='custom-select mb-3' id='fday' name='fday'>
                             <option  selected>Choose</option>
                             <option vlaue="Monday">Monday</option>
                             <option vlaue="Tuesday">Tuesday</option>
                             <option vlaue="Wednesday">Wednesday</option>
                             <option vlaue="Thursday">Thursday</option>
                             <option vlaue="Friday">Friday</option>
                             <option vlaue="Saturday">Saturday</option>
                             <option vlaue="Sunday">Sunday</option>
                    </select>


                </div>

                </div>
        </div>
        <div class='form-row'>
                <div class='col'>
                        <label for="sday">Select Second day</label>
                        <div class='input-group'>
                        <select class='custom-select mb-3' id='sday' name='sday'>
                             <option  selected>Choose</option>
                             <option vlaue="Monday">Monday</option>
                             <option vlaue="Tuesday">Tuesday</option>
                             <option vlaue="Wednesday">Wednesday</option>
                             <option vlaue="Thursday">Thursday</option>
                             <option vlaue="Friday">Friday</option>
                             <option vlaue="Saturday">Saturday</option>
                             <option vlaue="Sunday">Sunday</option>
                    </select>


                </div>

                </div>
        </div>
        <div class='form-row'>
                <div class='col'>
                        <label for="tday">Select Third day</label>
                        <div class='input-group'>
                        <select class='custom-select mb-3' id='tday' name='tday'>
                             <option  selected>Choose</option>
                             <option vlaue="Monday">Monday</option>
                             <option vlaue="Tuesday">Tuesday</option>
                             <option vlaue="Wednesday">Wednesday</option>
                             <option vlaue="Thursday">Thursday</option>
                             <option vlaue="Friday">Friday</option>
                             <option vlaue="Saturday">Saturday</option>
                             <option vlaue="Sunday">Sunday</option>
                    </select>


                </div>

                </div>
        </div>
        <button class="btn btn-primary" action="submit" name="submit">Submit</button>
    </div>
    </form>
  </body>
  </html>
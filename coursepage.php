<?php

session_start();
            //getting id from url
            $cid = $_GET['id'];
            //retiving values from session
            $sid= $_SESSION['id'];
            $fname= $_SESSION['username'];
            require_once('./Config.php');
            // $server= "localhost";
            //  $username="root";
            //  $password="";
            
            //  $con= mysqli_connect($server,$username,$password,'dowell university');
            //  if(!$con){
            //      die("Connection not made due to".mqsqli_connect_error());
            //  }
             //query to retrive the record whose Course id matches the one in the url 
             $query= "SELECT * from courses WHERE id='$cid' "   ;
             $result=$con->query($query);
             //converting the result to array
             $record= $result->fetch_array();
             $coursename= $record['name'];
             $uc= $record['uc'];
             $semester= $record['semester'];
             $campus= $record['campus'];
             $description= $record['Description'];

             if(isset($_POST['register'])){
                //query to insert into the database
                $query= "INSERT INTO `studentcourses`(`SID`,`CID`,`fname`,`coursename`,`semester`,`campus`) VALUES('$sid','$cid','$fname','$coursename','$semester','$campus');";
                if($con->query($query) == true){
                    echo "<h3 style='margin-left:400px;margin-top:20px;color:green' >You have successfully registered</h3>";
               }
               else{
                   echo "ERROR: $con->error";
               }

             }




?>
<!DOCTYPE html>
<html>
    <head>
        <title>Unit Registration</title>
        <meta charset="utf-8">
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
    </head>
    <body>
    <div class="header" style="background-color:white">
         <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
         <div class="header-right">
           <a href="Student Dashborad1.php">Dashboard</a>
          </div>
      </div>
        
        <div style="margin-top:30px;margin-left:400px;width:800px;overflow:none;border:solid 2px">
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
                <div class="col" style="width:50%;border-right:2px solid;"><h5>Course Name</h5></div>
                <div class="col" style="width:50%"><h5><?php echo $coursename;?></h5></div>

            </div>
        </div>
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
                <div class="col" style="width:50%;border-right:2px solid;"><h5>Unit Co-Ordinator Name</h5></div>
                <div class="col" style="width:50%"><h5><?php echo $uc;?></h5></div>

            </div>
        </div>
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
                <div class="col" style="width:50%;border-right:2px solid;"><h5>Semester</h5></div>
                <div class="col" style="width:50%"><h5><?php echo $semester;?></h5></div>

            </div>
        </div>
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
                <div class="col" style="width:50%;border-right:2px solid;"><h5>Campus</h5></div>
                <div class="col" style="width:50%"><h5><?php echo $campus;?></h5></div>

            </div>
        </div>
        <div class="d-flex flex-column" style="overflow:none">
            <div class="row" style="border-bottom:2px solid;margin-left:2px;margin-right:2px">
                <div class="col" style="width:50%;border-right:2px solid;"><h5>Description</h5></div>
                <div class="col" style="width:50%"><h5><?php echo $description;?></h5></div>

            </div>
        </div>
      </div>
     <form method="POST">
     <input class="btn btn-success" type="submit" style="margin-top:30px;margin-left:51%" name="register"></input>
     </form> 
    </body>
</html>
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dashboard</title>
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


        .card {

          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 500px;
          margin:auto;
        }
        .cardtext {

          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;


        }



        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }


    </style>
  </head>
  <body>
  <div class="header" style="background-color:white">
         <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
         <div class="header-right">
           <a href="Time Table.php">Calendar</a>
           <a href="./personalTime.php">Time Table</a>
           <a href="StudentDetails.php">My Account</a>
           <a href="UnitRegistration.php">Unit Registration</a> <!--You can a page containing containing contact details-->
          </div>
      </div>
    <h2 class="display-2" style="margin-left:28%">Dashboard</h2>
    <!-- <a href="Time Table.php" class="btn btn-primary" style="margin-left:80%">Time Table &rarr;</a>
    <a href="StudentDetails.php" class="btn btn-primary" style="margin-left:10%">My Account &rarr;</a> -->
    <div class="container" style="margin-left:50px;width:800px;overflow:none;border:solid;margin-left:290px">
          <h3 class="display-3">Welcome <?php echo $_SESSION["username"]?></h3><br>
          <h4 class="display-4" style="margin-left:160px">Your Courses</h4>
          <table class="table table-hover table-bordered">
      <thead>
        <th scope="col">Course ID</th>
        <th scope="col">Couse Name</th>
        <th scope="col">Semester</th>
        <th scope="col">Campus</th>
        <tbody>
        
          <?php
           require_once('./Config.php');
                //session_start();
                // $server= "localhost";
                // $username="root";
                // $password="";
                // $con= mysqli_connect($server,$username,$password,'dowell university');
                // if(!$con){
                //     die("Connection not made due to".mqsqli_connect_error());
                // }
              $id = $_SESSION['id'];
              $query= "SELECT DISTINCT studentcourses.CID,studentcourses.coursename,studentcourses.semester,studentcourses.campus 
                      FROM studentcourses 
                      INNER JOIN students ON studentcourses.SID='$id'";
                $result= $con->query($query);
                
                $k=1;
                $courses= [];
                $names=[];
               while( $record = $result->fetch_array()){
                $coursename= $record['coursename'];
                $cid=$record['CID'];
                $semester=$record['semester'];
                $campus=$record['campus'];
                array_push($courses,$record['CID']);
                array_push($names,$record['coursename']);
                if(count($courses)){
                  echo "<tr>
                  <td>$cid</td>
                  <td>$coursename</td>
                  <td>$semester</td>
                  <td>$campus</td>
                 
              </tr>";
                }
                else echo "<h3>You have not enrolled for any of the courses</h3>";

               }
              //  for($i=0;$i<count($courses);$i++) echo $courses[$i]."<br>";
              //  for($i=0;$i<count($names);$i++) echo $names[$i]."<br>";
              // $record = $result->fetch_array();
              // echo $id;
    
              // echo count($record);
              // // for($i=0; $i<count($record);  $i++){
              // //   echo$record[$i];

              // // }
              // foreach($record as $entry){
              //   echo $entry;
              // }
               
              // while($record = $result->fetch_array()){
              //   echo $record[0]." ".$record[1]."<br>";
              // }
               

                
               
   
  
                 //$row= $result->fetch_array();
                //  echo $record['couses'];
                //var_dump($record['CID']);

                
                //storing courses and thier id in session
                $_SESSION['courses']=$courses;
                $_SESSION['names']=$names;
                

                
                 
                
               
          
          ?>
          </tbody>
          </table>
          
         

   </body>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tutorial Allocation</title>
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
  <div class="header">
    <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
    <div class="header-right">
    <a href="Master Page.php">Dashboard</a>
      <!-- <a href="TutorialAllocation.php">Tutorial Allocation</a> -->
      <a href="timeTableManager.php">Manage Time Table</a>

    </div>
  </div>
    <h1 style="margin-left:600px">CMS Tutorial Allocation</h1>
    <div class="container">
      <div class="d-flex flex-row">
        <h3>List of Courses</h3>
        <!-- <a href="CMSedit.php" class="btn btn-primary" style="margin-left:800px;width:100px">Edit</a> -->

      </div>
    </div>
    <table class="table table-hover table-bordered">
      <thead>
        <th scope="col">Name</th>
        <th scope="col">ID</th>
        <th scope="col">Semester</th>
        <th scope="col">Campus</th>
        <th scope="col">Unit Co-Ordinator</th>
        
        
        
        <!-- <th scope="col">Campus</th> -->
        <!-- <th scope="col">Preffered Days of teaching</th>
        <th scope="col">Consultation Hours</th> -->
        <th></th>
      </thead>
      <tbody>
      <?php
    $server= "localhost";
    $username="root";
    $password="";
    $con= mysqli_connect($server,$username,$password,'dowell university');
    if(!$con){
     die("Connection not made due to".mqsqli_connect_error());
    }

    $query = "SELECT * FROM courses ";
    $result = $con->query($query);

    while($row= $result->fetch_array()){
      $name = $row['name'];
      $id = $row['id'];
      $semester= $row['semester'];
      $campus= $row['campus'];
      $uc = $row['uc'];
      


      echo "<tr>
          <td>$name</td>
          <td>$id</td>
          <td>$semester</td>
          <td>$campus</td>
          <td>$uc</td>
          <td><a class='btn btn-primary' href='CMSedit.php?id=".$row['id']."'>Edit</a></td>
      </tr>";

    }
    

     ?>
        <!-- <tr>
          <td>Frank Collins</td>
          <td>Ph.D in AI</td>
          <td>56</td>
          <td>Riverdelle</td>
          <td>Monday,Wednesday,Thursday</td>
          <td>10:00 A.M to 11:30 A.M</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr>
        <tr>
          <td>Mike Shaum</td>
          <td>Ph.D in ML</td>
          <td>55</td>
          <td>Riverdelle</td>
          <td>Monday,Tuesday,Thursday</td>
          <td>11:00 A.M to 1:30 P.M</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr>
        <tr>
          <td>George Summers</td>
          <td>Ph.D in Deep Learning</td>
          <td>60</td>
          <td>Neverland</td>
          <td>Monday,Wednesday,Friday</td>
          <td>10:00 A.M to 11:30 A.M</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr>
        <tr>
          <td>Mitchell Morgan</td>
          <td>Ph.D in Neural Networks</td>
          <td>53</td>
          <td>Pandora</td>
          <td>Wednesday,Thursday,Saturday</td>
          <td>1:00 P.M to 2:30 P.M</td>
          <td><button class="btn btn-danger">Remove</button></td>
        </tr> -->
      </tbody>
    </table>
    <a href="logout.php" class="btn btn-primary" style="margin-top:60px;margin-left:30%">Logout</a>
  </body>
</html>

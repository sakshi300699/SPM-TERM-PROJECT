


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
    <title>Admin</title>
  </head>
  <body>
  <div class="header">
    <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
    <div class="header-right">
      <a href="TutorialAllocation.php">Tutorial Allocation</a>
      <a href="timeTableManager.php">Manage Time Table</a>
      <a href="logout.php"  >Logout</a>

    </div>
  </div>
    <h1 style="margin-left:600px">Admin Area</h1>
    <div class="container">
      <div class="d-flex flex-row">
        <h3>List of Faculties</h3>
        <a href="adminAdd.php" class="btn btn-primary" style="margin-left:800px;width:100px">Add</a>

      </div>
    </div>
    <table class="table table-hover table-bordered">
    <!-- Table containing faculty details -->
      <thead>
        <th scope="col">Name</th>
        <th scope="col">Subject</th>
        <th scope="col">DOB</th>
        <th scope="col">Staff ID</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        
       
        <th></th>
      </thead>
      <tbody>
      <?php
      require_once('./Config.php');

    $query = "SELECT * FROM staff ";
    $result = $con->query($query);

    while($row= $result->fetch_array()){
      $name = $row['FirstName'].' '.$row['LastName'];
      $subject = $row['subject'];
      $dob= $row['dob'];
      $sid= $row['sid'];
      $email = $row['email'];
      $phone= $row['phone'];


      echo "<tr>
          <td>$name</td>
          <td>$subject</td>
          <td>$dob</td>
          <td>$sid</td>
          <td>$email</td>
          <td>$phone</td>
          <td><a class='btn btn-danger' href='delete.php?id=".$row['sid']."'>Remove</a></td>
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
    
  </body>
</html>

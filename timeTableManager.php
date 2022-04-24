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
      <a href="Master Page.php">Dashboard</a>

    </div>
  </div>
  <div class="container">
      <div class="d-flex flex-row">
        <h3 class="display-3" style="margin-left:30%;margin-bottom:50px">List of Courses</h3>
        

      </div>
    </div>
    <table class="table table-hover table-bordered">
      <thead>
      <th scope="col">Couse ID</th>
        <th scope="col">Name</th>
        <th scope="col">Unit Co-ordinator</th>
        <th scope="col">Semester</th>
        <th scope="col">Campus</th>
        <th></th>
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
            while($record= $result->fetch_array()){
                    $id=$record['id'];
                    $name=$record['name'];
                    $uc= $record['uc'];
                    $semester=$record['semester'];
                    $campus=$record['campus'];
                    echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$uc</td>
                    <td>$semester</td>
                    <td>$campus</td>
                    <td><a class='btn btn-outline-success' href='manager.php?id=".$record['id']."'>Manage</a></td>
                    <td><a class='btn btn-outline-warning' href='timeTableEdit.php?id=".$record['id']."'>Edit</a></td>
                </tr>";

            }
        ?>
      </tbody>
    </table>
  </body>
  </html>
<!DOCTYPE html>
<html>
    <head>
        <title>Unit Registration</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <h1 class="display-1 bolder" style="margin-left:25%"> Available Courses</h1>
    <a href="Student Dashborad1.php" class="btn btn-success" style="margin-left:10%;width:100px">Dashboard &larr;</a>
        
                <?php
                        session_start();
                        require_once('./Config.php');
                        // $server= "localhost";
                        // $username="root";
                        // $password="";
                        // $con= mysqli_connect($server,$username,$password,'dowell university');
                        // if(!$con){
                        //  die("Connection not made due to".mqsqli_connect_error());
                        // }
                          //retiving all courses
                        $query = "SELECT * FROM courses ";
                        $result = $con->query($query);
                        
                    
                        while($row= $result->fetch_array()){
                          //displaying each record
                            $name=$row['name'];$uc=$row['uc'];$semester=$row['semester'];$campus=$row['campus'];$seats=$row['seats'];
                            echo "
                           
                            <div class='container' style='width: 70rem;height:200px;margin-top:70px;'>
                              <img src='./images/imageCap.jpg' style='width:40rem' alt='loading'>
                              <div class='card-body' >
                              <h3>$name</h3>
                              <ul>
                                <li><h5>Unit Co-ordinator:$uc</h5></li>
                                <li><h5>Available Sememster:$semester</h5></li>
                                <li><h5>Available Campus:$campus</h5></li>
                                <li><h5>Available Seats:$seats</h5></li>
                                <li><a class='btn btn-primary' href='coursepage.php?id=".$row['id']."'>Register</a></li>
                                
                              </ul>
                              </div>
                             
                              
                              
                              
                              "
                              ;
                        }
                ?>
        
    </body>
</html>
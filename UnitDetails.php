<!DOCTYPE html>
<html>
    <head>
        <title>Unit Registration</title>
        <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <h1 class="display-1 bolder" style="margin-left:25%"> Available Courses</h1>
    <a href="CMS.php" class="btn btn-success" style="margin-left:80%;width:100px">CMS &rarr;</a>
        
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
                            $name=$row['name'];$uc=$row['uc'];$semester=$row['semester'];$campus=$row['campus'];
                            echo "<div class='row' style='margin-top:50px;'>
                            <div class='container' style='width: 70rem;height:200px;'>
                              <img src='./images/imageCap.jpg' style='width:40rem' alt='loading'>
                              <div class='card-body' >
                              <h3>$name</h3>
                              <ul>
                                <li><h5>Unit Co-ordinator:$uc</h5></li>
                                <li><h5>Available Sememster:$semester</h5></li>
                                <li><h5>Available Campus:$campus</h5></li>
                                
                              </ul>"
                              ;
                        }
                ?>
        
    </body>
</html>
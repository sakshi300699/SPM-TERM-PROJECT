<?php
    if(isset($_POST['submit'])){
        require_once('./Config.php');
    //     $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'dowell university');
    // if(!$con){
    //  die("Connection not made due to".mqsqli_connect_error());
    // }
    //getting id from URL
     $id = $_GET['id'];
     
    //collecting values from post request
     $uc = $_POST['tutor'];
     $campus= $_POST['campus'];
     $semester = $_POST['semester'];
     //query to update values in the table
     $query= "UPDATE courses SET uc='$uc',campus='$campus',semester='$semester' where id='$id'";
     $result=$con->query($query);
     if($result){
         //if the query is successfull redirecting to admin page
         header('location: ./TutorialAllocation.php');
     }
     else{
         //else echo the error
         echo "There was an error updating details";
     }

    }

?>

               
<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial Allocation</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
    <form id="regform" method="post">
      <h2 style="margin-left:680px">Allocate</h2>
        <div style="margin-top:35px;background-color:#E27D60;border-radius: 5px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);overflow: hidden;width: 400px;max-width: 100%;" class="container">
        <div class='form-row'>
                <div class='col'>
                    <label for='tutor'>Tutor</label>
                    <div class='input-group'>
                    <div class='input-group'>
                        <select class='custom-select mb-3' id='tutor' name='tutor'>
                             <option  selected>Choose</option>
        <?php
            $server= "localhost";
            $username="root";
            $password="";
            $con= mysqli_connect($server,$username,$password,'dowell university');
            if(!$con){
             die("Connection not made due to".mqsqli_connect_error());
            }
        
            $query = "SELECT * FROM staff ";
            $result = $con->query($query);
            while($row= $result->fetch_array()){
                $name = $row['FirstName'].' '.$row['LastName'];
                echo "  <option value='$name'>$name</option>";}
            $con->close();

        ?>
                    </select>


                </div>

                </div>
                </div>
            
               
        </div>
        <div class='form-row'>
                <div class='col'>
                    <label for='campus'>Campus</label>
                    <div class='input-group'>
                    <div class='input-group'>
                        <select class='custom-select mb-3' id='campus' name='campus'>
                             <option  selected>Choose</option>
                             <option vlaue="Pandora">Pandora</option>
                             <option vlaue="Riverdelle">Riverdelle</option>
                             <option vlaue="Neverland">Neverland</option>
                             
                    </select>


                </div>

                </div>
                </div>
                </div>
        
                <div class='form-row'>
                <div class='col'>
                    <label for='semester'>Semester</label>
                    <div class='input-group'>
                    <div class='input-group'>
                        <select class='custom-select mb-3' id='semester' name='semester'>
                             <option  selected>Choose</option>
                             <option vlaue="first">first</option>
                             <option vlaue="second">second</option>
                             <option vlaue="spring school">spring school</option>
                             <option vlaue="winter school">winter school</option>
                    </select>


                </div>

                </div>
                </div>
                </div>
                
            <button class="btn btn-primary" action="submit" name="submit">Submit</button>
          
               
        </div>

      </form>
      <a class="btn btn-warning" href="TutorialAllocation.php" style="margin-left:40%;WIDTH:200px;margin-top:50px">&larr; Back</a>
    </body>
</html>
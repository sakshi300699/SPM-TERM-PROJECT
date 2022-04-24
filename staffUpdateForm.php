<?php
    session_start();
   if(isset($_POST['submit'])){
        require_once('./Config.php');
//     $id= $_SESSION['id'];
//     $server= "localhost";
//     $username="root";
//     $password="";
//     $con= mysqli_connect($server,$username,$password,'dowell university');
//     if(!$con){
//      die("Connection not made due to".mqsqli_connect_error());
//  }
 $fname= $_POST['fname'];
 $lname = $_POST['lname'];
 $email= $_POST['email'];
 $phone = $_POST['ph'];
 $dob = $_POST['dob'];
 $address = $_POST['adderess'];
 echo $lname;

 $query = "UPDATE staff SET FirstName='$fname',  LastName='$lname',email='$email',phone='$phone',dob='$dob',adderess='$address' WHERE sid='$id' ";
 if($con->query($query)){
    $_SESSION['username']=$fname;
     header('location: ./Staff Dashboard.php');
 }
 else{
     echo "There was an error updating details";
 }
   }
  
  

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Form</title>
    </head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>



    <script>
       $(function () {
       $('#datetimepicker1').datetimepicker();
      });
    </script>

    <link rel="stylesheet" href="Registration.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body style="background-color:#fff">
       
      <form id="regform" method="post">
      <h2 style="margin-left:680px">Update</h2>
        <div style="margin-top:35px;background-color:#E27D60;border-radius: 5px;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);overflow: hidden;width: 400px;max-width: 100%;" class="container">
                <div class="form-row">
                        <div class="col">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" id="fname" name="fname" required/>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname" required/>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required/>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col">
                        <label for="ph">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Phone Number" id="ph" name="ph" required/>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col">
                        <label for="adderess">Adderess</label>
                        <input type="text" class="form-control" placeholder="Adderess" id="adderess" name="adderess" required/>
                        </div>
                </div>
                <div class="form-row">
                        <div class="col">
                        <label for="dob">Date OF Birth</label>
                        <input type="date" class="form-control" placeholder="Date Of Birth" id="dob" name="dob" required/>
                        </div>
                </div>
                
                
                
                <div class="form-row">
                        <div class="col">
                        <button  class="btn btn-primary" action="submit" name="submit"  style="width:100px;margin-top:20px" >Submit</button>
                        </div>
                </div>
                
                
                
                
        </div>

      </form>

        
    </body>
   
</html>
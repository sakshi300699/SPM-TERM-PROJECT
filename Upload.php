<?php
    session_start();
    // $server= "localhost";
    // $username="root";
    // $password="";
    // $con= mysqli_connect($server,$username,$password,'dowell university');
    // if(!$con){
    //     die("Connection not made due to".mqsqli_connect_error());
    // }
    require_once('./Config.php');
    
    if(isset($_POST["submit"])){
        $title= $_POST['title'];
        $file = rand(1000,10000)."-".$_FILES['file']['name'];
        //creating a temporary name so that two files with similar name do not get mixed up
        $file_loc=$_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type= $_FILES['file']['type'];
        $folder= "uploads/";
        //moving file to destination folder
        move_uploaded_file($file_loc,$folder.$file);
        //query to insert file in database
        $sql = "INSERT INTO `notices`(`title`,`file`,`type`,`size`) VALUES ('$title','$file','$file_type','$file_size');";
        if($con->query($sql) == true){
            echo "<h3 style='margin-left:400px;margin-top:20px;color:green' >File uploaded successfully</h3>";
       }
       else{
           echo "ERROR: $con->error";
       }
       $con->close();
    }



?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title">
            <label>Upload File</label>
            <input type="file" name="file">
            <button action="submit" name="submit">Submit</button>
        </form>
    </body>
</html>
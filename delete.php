<?php
    //this is a page which can be used by admin to delete any faculty
    require_once('./Config.php');
    //getting id from url
    $id = $_GET['id'];
    $query = "DELETE FROM staff WHERE sid=$id";
    $result = $con->query($query);
    if($result){
        echo"Successfully deleted";
        //if the query is successfull redirecting to admin page
        header('location: ./Master Page.php');
        exit;
    }
    else{
        echo "There was an error removing the record";
    }

?>
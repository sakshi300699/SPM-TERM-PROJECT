<?php 
   $server= "localhost";
   $username="root";
   $password="";
   $con= mysqli_connect($server,$username,$password,'dowell university');
   if(!$con){
    die("Connection not made due to".mqsqli_connect_error());
}

$query = "SELECT * FROM students";
$result = $con->query($query);
echo var_dump($result)."Hiiiiiiiiiiiiiiiiiiii";
while($row= $result->fetch_array()){
    echo $row['First Name'];
    echo $row['Last Name'];
    echo $row['Student ID'];
    echo "<br>";

}
//$mysql_free_result($result);
$con->close();




?>
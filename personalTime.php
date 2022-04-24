<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Dashboard</title>
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


        .card {

          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 500px;
          margin:auto;
        }
        .cardtext {

          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;


        }



        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }


    </style>
  </head>
  <body>
  <div class="header" style="background-color:white">
         <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
         <div class="header-right">
           <a href="Time Table.php">Calendar</a>

           <!-- <a href="./personalTime.php">Time Table</a> -->
           <a href="StudentDetails.php">My Account</a>
           <a href="UnitRegistration.php">Unit Registration</a> <!--You can a page containing containing contact details-->
           <a href="Student Dashborad1.php">Dashboard</a>
          </div>
      </div>
      <h2 class="display-2" style="margin-top:20px;margin-bottom:50px;margin-left:40%">Time Table</h2>
      <table class="table table-hover table-bordered">
      <thead>
        
        <th scope="col">Sunday</th>
        <th scope="col">Monday</th>
        <th scope="col">Tuesday</th>
        <th scope="col">Wednesday</th>
        <th scope="col">Thursday</th>
        <th scope="col">Friday</th>
        <th scope="col">Saturday</th>
        
      </thead>
      <tbody>

            <?php
                    session_start();
                    require_once('./Config.php');
                    // $server= "localhost";
                    // $username="root";
                    // $password="";
                    // $con= mysqli_connect($server,$username,$password,'dowell university');
                    // if(!$con){
                    // die("Connection not made due to".mqsqli_connect_error());
                    // }
                    $courses= $_SESSION['courses'];
                   
                    $names=$_SESSION['names'];
                   // var_dump($names)
                   // var_dump($courses) ;
                    IF(COUNT($courses)){
                        for($j=0;$j<count($courses);$j++){
                            $id=$courses[$j];
                            $query="SELECT * from timetabble WHERE CID='$id'";
                        $q=[];$t=[];
                        
                        for($i=0;$i<7;$i++) {$q[$i]=0;$t[$i]=0;}
                        $result= $con->query($query);
                        while($record=$result->fetch_array()){
                            if($record['Day1']=="Sunday" || $record['Day2']=="Sunday" || $record['Day3']=="Sunday" )    {$q[0]=1;$t[0]=date("g:iA",strtotime($record['time']));}
                            if($record['Day1']=="Monday" || $record['Day2']=="Monday" || $record['Day3']=="Monday" )    {$q[1]=1;$t[1]=date("g:iA",strtotime($record['time']));}
                            if($record['Day1']=="Tuesday" || $record['Day2']=="Tuesday" || $record['Day3']=="Tuesday" )    {$q[2]=1;$t[2]=date("g:iA",strtotime($record['time']));}
                            if($record['Day1']=="Wednesday" || $record['Day2']=="Wednesday" || $record['Day3']=="Wednesday" )    {$q[3]=1;$t[3]=date("g:iA",strtotime($record['time']));}
                            if($record['Day1']=="Thursday" || $record['Day2']=="Thursday" || $record['Day3']=="Thursday" )    {$q[4]=1;$t[4]=date("g:iA",strtotime($record['time']));}
                            if($record['Day1']=="Friday" || $record['Day2']=="Friday" || $record['Day3']=="Friday" )    {$q[5]=1;$t[5]=date("g:iA",strtotime($record['time']));}
                            if($record['Day1']=="Saturday" || $record['Day2']=="Saturday" || $record['Day3']=="Saturday" )    {$q[6]=1;$t[6]=date("g:iA",strtotime($record['time']));}
                            
    
                            
                        }
                        $name=$names[$j];
                        //var_dump($t);echo "<br>";
                        $monday;$tuesday;$wednesday;$thursday;$friday;$staurday;$sunday;
                        if($q[0])   {$monday="<ul><li>$name</li><li>$t[0]</li></ul>";}  else{$monday="<div style='color:blue'></div>";}
                        if($q[1])   {$tuesday="<ul><li>$name</li><li>$t[1]</li></ul>";} else{$tuesday="<div style='color:blue'></div>";}
                        if($q[2])   {$wednesday="<ul><li>$name</li><li>$t[2]</li></ul>";} else{$wednesday="<div style='color:blue'></div>";}
                        if($q[3])   {$thursday="<ul><li>$name</li><li>$t[3]</li></ul>";} else{$thursday="<div style='color:blue'></div>";}
                        if($q[4])   {$friday="<ul><li>$name</li><li>$t[4]</li></ul>";}   else{$friday="<div style='color:blue'></div>";}
                        if($q[5])   {$saturday="<ul><li>$name</li><li>$t[5]</li></ul>";} else{$saturday="<div style='color:blue'></div>";}
                        if($q[6])   {$sunday="<ul><li>$name</li><li>$t[6]</li></ul>";}   else{$sunday="<div style='color:blue'></div>";}
                        echo "<tr>
                            <td>$monday</td>
                            <td>$tuesday</td>
                            <td>$wednesday</td>
                            <td>$thursday</td>
                            <td>$friday</td>
                            <td>$saturday</td>
                            <td>$sunday</td>
                        </tr>";
                       
    
                        
    
                        
                       
                        
    
                        }
    
                    }
                    else{
                        echo"<h3 style='color:blue'>You have not registered for any courses</h3>";
                    }
            ?>
      </tbody>
      </table>
    </body>
</html>



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


        .container {
          padding: 2px 16px;
          background-color:#4F9CF4;
        }
        .container1 {
          padding: 2px 16px;

        }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
   
  ?>
  <div class="header">
    <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
    <div class="header-right">
      <a href="Student.php">Student</a>
      <a href="CMS.php">CMS</a>
      <a href="#">Contact</a> <!--You can a page containing containing contact details-->
      <a href="#">About </a> <!--You can a page containing containing about details-->
      <a href="#">Education </a>  <!--You can a page containing containing Education details-->

    </div>
  </div>
  <img src="./images/university4.png" alt="university" style="height:700px;width:100%;opacity:60%">
  <div class="caption-text" style="position:absolute;top:300px;left:500px">
    <h1 class="display-1 bolder" style="color:rgb(100,20,180)">
      University Of Dowell

    </h1>


      </div>
      <div class="mid-page" style="margin-top:30px;height:800px;width:100%;overflow:none">
        <img src="./images/university1.jpg" alt="university" style="width:100%;opacity:50%">
        <div class="container">
          <h2 class="display-3" style="position:absolute;top:940px;left:380px">We have 3 Campuses at</h2>

        </div>
        <div class="d-flex flex-row">
          <h4 class="display-4" style="position:absolute;top:1200px;left:360px;color:blue;">Pandora</h4>
          <h4 class="display-4" style="position:absolute;top:1200px;left:650px;color:blue">Riverdell</h4>
          <h4 class="display-4" style="position:absolute;top:1200px;left:990px;color:blue">Neverland</h4>


        </div>
        <div class="card" style="height:200px;width:400px;background-color:white;position:absolute;top:1500px;overflow:none; margin-left:200px">
          <div class="card-content" >
            <h4>Campus Life</h4>
            <p>At Dowell university we provide a very healthy learning atmosphere,the loction of
              campuses is very close to various transporation options. The campus is very scenic and provide
              a pollution free atmosphere.The campus is equipped with all facilities, there are five 1000 person seater hostel.
            </p>


          </div>

        </div>
        <div class="card" style="height:200px;width:400px;background-color:white;position:absolute;top:1500px;overflow:none; margin-left:200px;left:600px">
          <div class="card-content" >
            <h4>Placement</h4>
            <p>At Dowell university we provide all the skills required for the modern industry
              Many well known recruiters including Google, IBM, Microsoft visit our campus.
              The average package is around 100000 AUD per annum. Most of our students are in many industrial giants
              thus making our alum base strong. 
            </p>


          </div>

        </div>



      </div>
      <div class="footer">
        <div  style="width:100%;background-color:rgb(0,0,50);position:absolute;top:1840px;height:400px">
          <div class="d-flex flex-row">
            <div class="d-flex flex-column" style="color:white">
              <h4>Contacts</h4>
              <ul>
                <li>Dean: xyz@xyz.com</li>
                <li>Principal: xyz@xyz.com</li>
                <li>Dean Student Welfare: xyz@xyz.com</li>
              </ul>


            </div>
            <div class="d-flex flex-column" style="color:white;margin-top:50px;margin-left:300px">
              <h1 class="display 1">University of Dowell</h1>

            </div>
            <div class="d-flex flex-column" style="color:white;margin-top:50px;margin-left:300px">
              <ul>
                <li><a href="CMS.php" style="color:white"><h3>CMS</h3></a></li>
                <li><a href="Student.php" style="color:white"><h3>Student</h3></a></li>
                <li><a href="#" style="color:white"><h3>About</h3></a></li>
                <li><a href="#" style="color:white"><h3>Education</h3></a></li>
              </ul>

            </div>

          </div>
          <div class="footer-copyright">
            <p style="color:white;margin-left:40%;margin-top:100px">© University Of Dowell</p>

          </div>

        </div>


      </div>






  </body>

</html>

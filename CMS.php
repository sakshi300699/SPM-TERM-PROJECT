<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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


        @media screen and (max-width: 800px) {
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
    <title>CMS</title>
  </head>
  <body>

      <div class="header">
      <img src="./images/logo2.jpeg" alt="logo" style="height:100px;width:400px">
        <div class="header-right">
          <a href="Home.php">Home</a>
          <a href="UnitDetails.php">Unit Details</a>
          <a href="Student Registration.php">Student Register</a>
            <a href="Staff Registration.php">Staff Register</a>
          <a href="Login.php">Student Login</a>
          <a href="staffLogin.php">Staff Login</a>
          <a href="#">Contact</a> <!--You can a page containing containing contact details-->
        </div>



      <div class="container" style="width:100%;height:600px;position:absolute;left:0px;top:160px">
        <img src="./images/cms.jpg" style="opacity:40%">
        <div class="text">
          <h1 class="display-1 font-weight-bolder" style="color:blue;position:absolute;left:300px;top:310px;">Welcome To CMS</h1>

        </div>
        <div class="quote">
          <blockquote class="blockquote" style="position:absolute;top:900px;left:750px;font-weight:bold;color:blue">
            <h1><span>Anyone who never made a mistake has never tried anything new</span></h1>
            <footer class="blockquote-footer"><cite >Albert Einstein</cite></footer>

          </blockquote>

        </div>



    </div>


  </body>
</html>

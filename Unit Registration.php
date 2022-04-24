<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Unit Registration</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
          $('.dropdown-toggle').dropdown()
        });
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <h1 class="display-1 bolder" style="margin-left:25%"> Available Courses</h1>
      <a href="CMS.html" class="btn btn-success" style="margin-left:80%;width:100px">CMS &rarr;</a>
    </header>
    <div class="row" style="margin-top:50px;margin-bottom:300px">
      <div class="col">
    <div class="container" style="width: 18rem;height:200px;">
      <img src="./images/imageCap.jpg" style="width:18rem" alt="loading">
      <div class="card-body" >
        <h3>Web Development</h3>
        <ul>
          <li><h5>Unit Co-ordinator:Michelle Galler</h5></li>
          <li><h5>Available Sememster:2,Winter School</h5></li>
          <li><h5>Available Campus:Pandora,Riverdell</h5></li>
        </ul>
        <h5 class="display-5">Course Outline</h5>
        <ul>
          <li>
            <div class="dropdown">
              <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-A</button>
              <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">DOW123</a>
                <a class="dropdown-item" href="#">DOW124</a>
                <a class="dropdown-item" href="#">DOW125</a>

              </div>

            </div>
          </li>
          <li>
            <div class="dropdown">
              <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-B</button>
              <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">DOW223</a>
                <a class="dropdown-item" href="#">DOW224</a>
                <a class="dropdown-item" href="#">DOW225</a>

              </div>

            </div>
          </li>
          <li>
            <div class="dropdown">
              <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-C</button>
              <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">DOW323</a>
                <a class="dropdown-item" href="#">DOW324</a>
                <a class="dropdown-item" href="#">DOW325</a>

              </div>

            </div>
          </li>
        </ul>


        <a href="#" class="btn btn-primary">Register</a>

      </div>

    </div>
    </div>
    <div class="col">
  <div class="container" style="width: 18rem;height:150px;">
    <img src="./images/imageCap.jpg" style="width:18rem" alt="loading">
    <div class="card-body">
      <h3>Ethical Hacking</h3>
      <ul>
        <li><h5>Unit Co-ordinator:Frank Sheen</h5></li>
        <li><h5>Available Sememster:1,Spring School</h5></li>
        <li><h5>Available Campus:Neverland</h5></li>
      </ul>
      <p>Description</p>
      <h5 class="display-5">Course Outline</h5>
      <ul>
        <li>
          <div class="dropdown">
            <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-A</button>
            <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">DOW123</a>
              <a class="dropdown-item" href="#">DOW124</a>
              <a class="dropdown-item" href="#">DOW125</a>

            </div>

          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-B</button>
            <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">DOW223</a>
              <a class="dropdown-item" href="#">DOW224</a>
              <a class="dropdown-item" href="#">DOW225</a>

            </div>

          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-C</button>
            <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">DOW323</a>
              <a class="dropdown-item" href="#">DOW324</a>
              <a class="dropdown-item" href="#">DOW325</a>

            </div>

          </div>
        </li>
      </ul>
      <a href="#" class="btn btn-primary">Register</a>

    </div>

  </div>
  </div>
  <div class="col">
<div class="container" style="width: 18rem;height:150px;">
  <img src="./images/imageCap.jpg" style="width:18rem" alt="loading">
  <div class="card-body">
    <h3>Networking</h3>
    <ul>
      <li><h5>Unit Co-ordinator:Ross Clair</h5></li>
      <li><h5>Available Sememster:2,Spring School</h5></li>
      <li><h5>Available Campus:Pandora,Neverland</h5></li>
    </ul>
    <p>Description</p>
    <h5 class="display-5">Course Outline</h5>
    <ul>
      <li>
        <div class="dropdown">
          <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-A</button>
          <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">DOW123</a>
            <a class="dropdown-item" href="#">DOW124</a>
            <a class="dropdown-item" href="#">DOW125</a>

          </div>

        </div>
      </li>
      <li>
        <div class="dropdown">
          <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-B</button>
          <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">DOW223</a>
            <a class="dropdown-item" href="#">DOW224</a>
            <a class="dropdown-item" href="#">DOW225</a>

          </div>

        </div>
      </li>
      <li>
        <div class="dropdown">
          <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-C</button>
          <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">DOW323</a>
            <a class="dropdown-item" href="#">DOW324</a>
            <a class="dropdown-item" href="#">DOW325</a>

          </div>

        </div>
      </li>
    </ul>
    <a href="#" class="btn btn-primary">Register</a>

  </div>

</div>
</div>
<div class="col">
<div class="container" style="width: 18rem;height:200px;">
<img src="./images/imageCap.jpg" style="width:18rem" alt="loading">
<div class="card-body" >
  <h3>Data Science</h3>
  <ul>
    <li><h5>Unit Co-ordinator:Alan Green</h5></li>
    <li><h5>Available Sememster:1,2</h5></li>
    <li><h5>Available Campus:Pandora,Riverdell</h5></li>
  </ul>
  <p>Description</p>
  <h5 class="display-5">Course Outline</h5>
  <ul>
    <li>
      <div class="dropdown">
        <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-A</button>
        <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">DOW123</a>
          <a class="dropdown-item" href="#">DOW124</a>
          <a class="dropdown-item" href="#">DOW125</a>

        </div>

      </div>
    </li>
    <li>
      <div class="dropdown">
        <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-B</button>
        <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">DOW223</a>
          <a class="dropdown-item" href="#">DOW224</a>
          <a class="dropdown-item" href="#">DOW225</a>

        </div>

      </div>
    </li>
    <li>
      <div class="dropdown">
        <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-C</button>
        <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">DOW323</a>
          <a class="dropdown-item" href="#">DOW324</a>
          <a class="dropdown-item" href="#">DOW325</a>

        </div>

      </div>
    </li>
  </ul>
  <a href="#" class="btn btn-primary">Register</a>

</div>

</div>
</div>
    </div>




    <div class="row" >
      <div class="col" style="margin-top:180px">
    <div class="container" style="width: 18rem;height:200px">
      <img src="./images/imageCap.jpg" style="width:18rem" alt="loading">
      <div class="card-body" >
        <h3>Machine Learning</h3>
        <ul>
          <li><h5>Unit Co-ordinator:Elon Harper</h5></li>
          <li><h5>Available Sememster:Winter School</h5></li>
          <li><h5>Available Campus:Neverland</h5></li>
        </ul>
        <p>Description</p>
        <h5 class="display-5">Course Outline</h5>
        <ul>
          <li>
            <div class="dropdown">
              <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-A</button>
              <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">DOW123</a>
                <a class="dropdown-item" href="#">DOW124</a>
                <a class="dropdown-item" href="#">DOW125</a>

              </div>

            </div>
          </li>
          <li>
            <div class="dropdown">
              <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-B</button>
              <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">DOW223</a>
                <a class="dropdown-item" href="#">DOW224</a>
                <a class="dropdown-item" href="#">DOW225</a>

              </div>

            </div>
          </li>
          <li>
            <div class="dropdown">
              <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-C</button>
              <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">DOW323</a>
                <a class="dropdown-item" href="#">DOW324</a>
                <a class="dropdown-item" href="#">DOW325</a>

              </div>

            </div>
          </li>
        </ul>
        <a href="#" class="btn btn-primary">Register</a>

      </div>

    </div>
    </div>
    <div class="col" style="margin-top:180px">
  <div class="container" style="width: 18rem;height:200px;">
    <img src="./images/imageCap.jpg" style="width:18rem" alt="loading">
    <div class="card-body">
      <h3>Artificial Intelligence</h3>
      <ul>
        <li><h5>Unit Co-ordinator:Kevin Nash</h5></li>
        <li><h5>Available Sememster:1,Spring School</h5></li>
        <li><h5>Available Campus:Pandora</h5></li>
      </ul>
      <p>Description</p>
      <h5 class="display-5">Course Outline</h5>
      <ul>
        <li>
          <div class="dropdown">
            <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-A</button>
            <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">DOW123</a>
              <a class="dropdown-item" href="#">DOW124</a>
              <a class="dropdown-item" href="#">DOW125</a>

            </div>

          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-B</button>
            <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">DOW223</a>
              <a class="dropdown-item" href="#">DOW224</a>
              <a class="dropdown-item" href="#">DOW225</a>

            </div>

          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-C</button>
            <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">DOW323</a>
              <a class="dropdown-item" href="#">DOW324</a>
              <a class="dropdown-item" href="#">DOW325</a>

            </div>

          </div>
        </li>
      </ul>
      <a href="#" class="btn btn-primary">Register</a>

    </div>

  </div>
  </div>
  <div class="col" style="margin-top:180px">
<div class="container" style="width: 18rem;height:200px;">
  <img src="./images/imageCap.jpg" style="width:18rem" alt="loading">
  <div class="card-body">
    <h3>Neural Networks</h3>
    <ul>
      <li><h5>Unit Co-ordinator:Mike Karp</h5></li>
      <li><h5>Available Sememster:2,Spring school</h5></li>
      <li><h5>Available Campus:Riverdell, Neverland</h5></li>
    </ul>
    <p>Description</p>
    <h5 class="display-5">Course Outline</h5>
    <ul>
      <li>
        <div class="dropdown">
          <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-A</button>
          <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">DOW123</a>
            <a class="dropdown-item" href="#">DOW124</a>
            <a class="dropdown-item" href="#">DOW125</a>

          </div>

        </div>
      </li>
      <li>
        <div class="dropdown">
          <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-B</button>
          <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">DOW223</a>
            <a class="dropdown-item" href="#">DOW224</a>
            <a class="dropdown-item" href="#">DOW225</a>

          </div>

        </div>
      </li>
      <li>
        <div class="dropdown">
          <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-C</button>
          <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">DOW323</a>
            <a class="dropdown-item" href="#">DOW324</a>
            <a class="dropdown-item" href="#">DOW325</a>

          </div>

        </div>
      </li>
    </ul>
    <a href="#" class="btn btn-primary">Register</a>

  </div>

</div>
</div>
<div class="col" style="margin-top:180px">
<div class="container" style="width: 18rem;height:200px;">
<img src="./images/imageCap.jpg" style="width:18rem" alt="loading">
<div class="card-body">
  <h3>Deep Learning</h3>
  <ul>
    <li><h5>Unit Co-ordinator:Michael Cloey</h5></li>
    <li><h5>Available Sememster:2,Winter School </h5></li>
    <li><h5>Available Campus:Neverland</h5></li>
  </ul>
  <p>Description</p>
  <h5 class="display-5">Course Outline</h5>
  <ul>
    <li>
      <div class="dropdown">
        <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-A</button>
        <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">DOW123</a>
          <a class="dropdown-item" href="#">DOW124</a>
          <a class="dropdown-item" href="#">DOW125</a>

        </div>

      </div>
    </li>
    <li>
      <div class="dropdown">
        <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-B</button>
        <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">DOW223</a>
          <a class="dropdown-item" href="#">DOW224</a>
          <a class="dropdown-item" href="#">DOW225</a>

        </div>

      </div>
    </li>
    <li>
      <div class="dropdown">
        <button class="btn btn-outline-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" araia-exapanded="false">Schedule-C</button>
        <div class="dropdown-menu" araia-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">DOW323</a>
          <a class="dropdown-item" href="#">DOW324</a>
          <a class="dropdown-item" href="#">DOW325</a>

        </div>

      </div>
    </li>
  </ul>
  <a href="#" class="btn btn-primary">Register</a>

</div>

</div>
</div>
    </div>
    <div class="footer">
      <div class="d-flex flex-row">
        <a href="CMS.html" class="btn btn-outline-success" style="margin-left:600px;position:absolute;top:1600px;width:300px">Back</a>

      </div>

    </div>



  </body>
</html>

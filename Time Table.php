<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TimeTable</title>
    <meta name="viewport" content="width-device-width, initial-scale=1,shrink-to-fit=no"></meta>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstap CDN -->
  </head>
  <body>
    <h1 class="display-1" style="margin-left:30%;">Calendar</h1>

        <h3 class="card-header" id="monthAndYear" ></h3>
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

            <tbody id="calendarBody">

            </tbody>
        </table>
        <a href="Student Dashborad1.php" class="btn btn-outline-primary">&larr; Dashborad</a>







  </body>
  <script type="text/javascript">
    let today = new Date();
    let month= today.getMonth();
    let currentYear= today.getFullYear();
    months=["January","Feburary","March","April","May","June","July","August","September","October","November","December"];
    monthAndYear= document.getElementById("monthAndYear");
    showCalendar(month, currentYear);
    function showCalendar(month,year){
        let firstDay=new Date(year,month,1);
        let tbl= document.getElementById("calendarBody");
        monthAndYear.innerHTML= months[month]+" "+year;
        //creating all cells of table
        let date=1;
        for(let i=0;i<6;i++){
          //it creates a table row
          let row= document.createElement("tr");
          // now we will add cells to  this row
          for(let j=0;j<7;j++){
            if (i === 0 && (j < firstDay.getDay())) {
                console.log(j);
                cell = document.createElement("td");
                cellText = document.createTextNode(" ");
                cell.appendChild(cellText);
                row.appendChild(cell);
            }
            else if (date > daysInMonth(month, year)) {
                break;
            }

            else {
                cell = document.createElement("td");
                cellText = document.createTextNode(date);
                if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    cell.classList.add("bg-info");
                } // color today's date
                cell.appendChild(cellText);
                row.appendChild(cell);
                date++;
            }


        }

        tbl.appendChild(row); // appending each row into calendar body.

          }
    }
    function daysInMonth(iMonth,iYear){
      return 32- new Date(iYear,iMonth,32).getDate();
    }

  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

</html>

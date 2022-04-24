let today = new Date();
let month = today.getMonth();
let currentYear = today.getFullYear();
// let selectYear = document.getElementById("year").value;
//
//
// let selectMonth = document.getElementById("month").value;
// let tbody= document.createElement("tbody")
// document.getElementById("calendarBody").appendChild(tbody)

months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

monthAndYear = document.getElementById("monthAndYear");
showCalendar(month, currentYear);
  function showCalendar(month,year){


    let firstDay=new Date(year,month,1);


   let  tbl= document.getElementById("calendarBody");

    //clearing the table first
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
  function daysInMonth(iMonth, iYear) {
    return 32 - new Date(iYear, iMonth, 32).getDate();
}
function next() {
    currentYear = (currentMonth === 11) ? currentYear + 1 : currentYear;
    currentMonth = (currentMonth + 1) % 12;
    showCalendar(currentMonth, currentYear);
}

function previous() {
    currentYear = (selectMonth === 0) ? currentYear - 1 : currentYear;
    currentMonth = (selectMonth === 0) ? 11 : selectMonth - 1;
    showCalendar(currentMonth, currentYear);
}

function jump() {
    currentYear = parseInt(selectYear.value);
    currentMonth = parseInt(selectMonth.value);
    showCalendar(currentMonth, currentYear);
}

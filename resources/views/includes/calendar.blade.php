
<style>
  
    .main {
      position: relative;
      width: 100%;
      height: auto;
      /* top: 50%; */
      left: 50%;
      box-sizing: border-box;
      transform: translate(-50%, -50%);
      transition: all 0.195s ease;
      transform-style: preserve-3d;
    }
    .main.is-rotated-left {
      transform: translate(-50%, -50%) rotateY(-4deg);
    }
    .main.is-rotated-right {
      transform: translate(-50%, -50%) rotateY(4deg);
    }
    /* .main .sideb,
    .main .right-wrapper {
      background-color: white;
      width: 100%;
      float: left;
      height: 100%;
      box-sizing: border-box;
      padding: 25px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
    } */
    .main .sideb {
      background-color: white;
      width: 100%;
      float: left;
      height: 100%;
      box-sizing: border-box;
      padding: 10px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
    }
    .main .header {
      padding: 15px 0 20px;
      display: flex;
      justify-content: space-between;
      width: 100%;
    }
    .main .header i {
      padding: 0 5px;
      cursor: pointer;
    }
    .main .header span {
      display: inline-block;
      margin: 0 3px;
      font-weight: 700;
    }
    .main .right-wrapper {
      /* background-color: #f05855; */
      color: white;
      transform-origin: left center;
      transform: rotateY(110deg);
      transition: all 0.5s;
    }
    .main .right-wrapper.is-active {
      transform: rotateY(0deg);
    }
    .main .right-wrapper .header {
      text-align: left;
      justify-content: center;
    }
    .main .right-wrapper .day {
      font-size: 12em;
      text-indent: -12px;
      display: block;
    }
    .main .right-wrapper .month {
      font-size: 2.5em;
    }
    .main .sideb .showDate {
      color: white;
      text-align: right;
      width: 100%;
    }
    .main .sideb .showDate i {
      cursor: pointer;
      background: #f05855;
      border-radius: 4px;
      padding: 8px 12px;
      transform: scale(1);
      transition: all 0.3s;
    }
    .main .sideb .showDate i.is-active {
      transform: scale(-1);
    }
    .main .sideb table {
      text-align: center;
    
      width: 90%;
      margin: 30px auto 0;
      table-layout: fixed;
      border-collapse: collapse;
    }
    .main .sideb table tbody:before {
      content: "-";
      display: block;
      line-height: 0.75em;
      color: transparent;
    }
    .main .sideb table th {
      color: #f05855;
      font-size: 0.75em;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
    .main .sideb table td {
      padding: 11px 5px;
      color: #ced0ce;
      font-size: 0.75em;
      transition: all 0.3s;
      position: relative;
    }
    .main .sideb table td::before {
      content: "";
      display: none;
      width: 50%;
      height: 2px;
      position: absolute;
      left: 50%;
      top: 100%;
      transform: translate(-50%, -8px);
      background-color: #f05855;
    }
    .main .sideb table td.currentDay::before {
      display: block;
    }
    .main .sideb table td.selectable {
      color: #303633;
      cursor: pointer;
      font-weight: 700;
    }
    .main .sideb table td.selectable:hover {
      background: #f05855;
      color: white;
    }
    .main .sideb table td.between {
      background-color: #333;
      color: white;
    }
    .main .sideb table td.active, .main .sideb table td.hover {
      background: #f05855;
      color: white;
    }
    </style>
    <div class="main">
      <div class="sideb">
        <div class="header"><i class="fa fa-angle-left" aria-hidden="true"></i><span><span class="month" data-id=""> </span><span class="year"></span></span><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        <div class="calender">
          <table>
            <thead>
              <tr class="weedays">
                <th data-weekday="sun" data-column="0">Sun</th>
                <th data-weekday="mon" data-column="1">Mon</th>
                <th data-weekday="tue" data-column="2">Tue</th>
                <th data-weekday="wed" data-column="3">Wed</th>
                <th data-weekday="thu" data-column="4">Thu</th>
                <th data-weekday="fri" data-column="5">Fri</th>
                <th data-weekday="sat" data-column="6">Sat</th>
              </tr>
            </thead>
            <tbody>
              <tr class="days" data-row="0">
                <td data-column="0"></td>
                <td data-column="1"></td>
                <td data-column="2"></td>
                <td data-column="3"></td>
                <td data-column="4"></td>
                <td data-column="5"></td>
                <td data-column="6"></td>
              </tr>
              <tr class="days" data-row="1">
                <td data-column="0"></td>
                <td data-column="1"></td>
                <td data-column="2"></td>
                <td data-column="3"></td>
                <td data-column="4"></td>
                <td data-column="5"></td>
                <td data-column="6"></td>
              </tr>
              <tr class="days" data-row="2">
                <td data-column="0"></td>
                <td data-column="1"></td>
                <td data-column="2"></td>
                <td data-column="3"></td>
                <td data-column="4"></td>
                <td data-column="5"></td>
                <td data-column="6"></td>
              </tr>
              <tr class="days" data-row="3">
                <td data-column="0"></td>
                <td data-column="1"></td>
                <td data-column="2"></td>
                <td data-column="3"></td>
                <td data-column="4"></td>
                <td data-column="5"></td>
                <td data-column="6"></td>
              </tr>
              <tr class="days" data-row="4">
                <td data-column="0"></td>
                <td data-column="1"></td>
                <td data-column="2"></td>
                <td data-column="3"></td>
                <td data-column="4"></td>
                <td data-column="5"></td>
                <td data-column="6"></td>
              </tr>
              <tr class="days" data-row="5">
                <td data-column="0"></td>
                <td data-column="1"></td>
                <td data-column="2"></td>
                <td data-column="3"></td>
                <td data-column="4"></td>
                <td data-column="5"></td>
                <td data-column="6"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
      var month = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
    ];
    var weekday = [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
    ];
    var weekdayShort = [
        "sun",
        "mon",
        "tue",
        "wed",
        "thu",
        "fri",
        "sat"
    ];
    var monthDirection = 0;
     
    function getNextMonth() {
        monthDirection++;
        var current;
        var now = new Date();
        if (now.getMonth() == 11) {
            current = new Date(now.getFullYear() + monthDirection, 0, 1);
        } else {
            current = new Date(now.getFullYear(), now.getMonth() + monthDirection, 1);
        }
        initCalender(getMonth(current));
    }
     
    function getPrevMonth() {
        monthDirection--;
        var current;
        var now = new Date();
        if (now.getMonth() == 11) {
            current = new Date(now.getFullYear() + monthDirection, 0, 1);
        } else {
            current = new Date(now.getFullYear(), now.getMonth() + monthDirection, 1);
        }
        initCalender(getMonth(current));
    }
    Date.prototype.isSameDateAs = function (pDate) {
        return (
            this.getFullYear() === pDate.getFullYear() &&
            this.getMonth() === pDate.getMonth() &&
            this.getDate() === pDate.getDate()
        );
    };
     
    function getMonth(currentDay) {
        var now = new Date();
        var currentMonth = month[currentDay.getMonth()];
        var monthArr = [];
        for (i = 1 - currentDay.getDate(); i < 31; i++) {
            var tomorrow = new Date(currentDay);
            tomorrow.setDate(currentDay.getDate() + i);
            if (currentMonth !== month[tomorrow.getMonth()]) {
                break;
            } else {
                monthArr.push({
                    date: {
                        weekday: weekday[tomorrow.getDay()],
                        weekday_short: weekdayShort[tomorrow.getDay()],
                        day: tomorrow.getDate(),
                        month: month[tomorrow.getMonth()],
                        year: tomorrow.getFullYear(),
                        current_day: now.isSameDateAs(tomorrow) ? true : false,
                        date_info: tomorrow
                    }
                });
            }
        }
        return monthArr;
    }
     
    function clearCalender() {
        $("table tbody tr").each(function () {
            $(this).find("td").removeClass("active selectable currentDay between hover").html("");
        });
        $("td").each(function () {
            $(this).unbind('mouseenter').unbind('mouseleave');
        });
        $("td").each(function () {
            $(this).unbind('click');
        });
        clickCounter = 0;
    }
     
    function initCalender(monthData) {
        var row = 0;
        var classToAdd = "";
        var currentDay = "";
        var today = new Date();
     
        clearCalender();
        $.each(monthData,
            function (i, value) {
                // console.log(value);
                var weekday = value.date.weekday_short;
                var month = value.date.month;
                var day = value.date.day;
                var year = value.date.year;
                var column = 0;
                var index = i + 1;
                var price = 0;
     
                $(".sideb .header .month").html(value.date.month);
                $(".sideb .header .month").attr('data-id',value.date.month);
                $(".sideb .header .year").html(value.date.year);
                if (value.date.current_day) {
                    currentDay = "currentDay";
                    classToAdd = "selectable";
                    $(".right-wrapper .header span").html(value.date.weekday);
                    $(".right-wrapper .day").html(value.date.day);
                    $(".right-wrapper .month").html(value.date.month);
                }
                if (today.getTime() < value.date.date_info.getTime()) {
                    classToAdd = "selectable";
     
                }
                $("tr.weedays th").each(function () {
                    var row = $(this);
                    if (row.data("weekday") === weekday) {
                        column = row.data("column");
                        return;
                    }
                });

                // show current date 
                $($($($("tr.days").get(row)).find("td").get(column)).addClass(classToAdd + " " + currentDay).html(day+'<span style="display:block;">&#8377;{{$hotel->room_price}}</span>'));
                currentDay = "";
                if (column == 6) {
                    row++;
                }
            });
        $("td.selectable").click(function () {
            dateClickHandler($(this));
        });
    }
    initCalender(getMonth(new Date()));
     
    var clickCounter = 0;
    $(".fa-angle-double-right").click(function () {
        $(".right-wrapper").toggleClass("is-active");
        $(this).toggleClass("is-active");
    });
     
    function dateClickHandler(elem) {
     
        var day1 = parseInt($(elem).html());
        var month = $('.month').html();
        console.log(month);
        var year = $('.year').html();
        var monthNo = '';
        if(month == 'January'){
          monthNo = '01';
        }else if(month == 'February'){
          monthNo = '02';
        }else if(month == 'March'){
          monthNo = '03';
        }else if(month == 'April'){
          monthNo = '04';
        }else if(month == 'May'){
          monthNo = '05';
        }else if(month == 'June'){
          monthNo = '06';
        }else if(month == 'July'){
          monthNo = '07';
        }else if(month == 'August'){
          monthNo = '08';
        }else if(month == 'September'){
          monthNo = '09';
        }else if(month == 'October'){
          monthNo = '10';
        }else if(month == 'November'){
          monthNo = '11';
        }else{
          monthNo = '12';
        }

        if (clickCounter === 0) {
            $("td.selectable").each(function () {
                $(this).removeClass("active between hover");
            });
        }
        clickCounter++;
        if (clickCounter === 2) {
            $("td.selectable").each(function () {
                $(this).unbind('mouseenter').unbind('mouseleave');
            });
            clickCounter = 0;
            return;
        }
        $(elem).toggleClass("active");
        $("td.selectable").hover(function () {
     
            var day2 = parseInt($(this).html());

            $(this).addClass("hover");
            $("td.selectable").each(function () {
                $(this).removeClass("between");
     
            });
            if (day1 > day2 + 1) {
                $("td.selectable").each(function () {
                    var dayBetween = parseInt($(this).html());
                    if (dayBetween > day2 && dayBetween < day1) {
                        $(this).addClass("between");
                    }
                });
                if(day1 <= 9){
                  if(day1[0] != '0'){
                    day1 = '0' + day1; 
                  }
                }
                if(day2 <= 9){
                  if(day2[0] != '0'){
                    day2 = '0' + day2; 
                  }
                }
                var end_date = year +'-'+monthNo+'-'+day1;
                $('#book_to').val(end_date);
                var start_date = year +'-'+monthNo+'-'+day2;
                $('#book_from').val(start_date);
                    console.log(start_date);
            } else if (day1 < day2 + 1) {
                $("td.selectable").each(function () {
                    var dayBetween = parseInt($(this).html());
                    if (dayBetween > day1 && dayBetween < day2) {
                        $(this).addClass("between");
                    }
                });
                if(day1 <= 9){
                  if(day1[0] != '0'){
                    day1 = '0' + day1; 
                  }
                }
                if(day2 <= 9){
                  if(day2[0] != '0'){
                    day2 = '0' + day2; 
                  }
                }
                var end_date = year +'-'+monthNo+'-'+day2;
                $('#book_to').val(end_date);
                var start_date = year +'-'+monthNo+'-'+day1;
                $('#book_from').val(start_date);
            }
        }, function () {
            $(this).removeClass("hover");
        });
    }
    $(".fa-angle-left").click(function () {
        getPrevMonth();
        $(".main").addClass("is-rotated-left");
        setTimeout(function () {
            $(".main").removeClass("is-rotated-left");
        }, 195);
    });
     
    $(".fa-angle-right").click(function () {
        getNextMonth();
        $(".main").addClass("is-rotated-right");
        setTimeout(function () {
            $(".main").removeClass("is-rotated-right");
        }, 195);
    });
    </script>
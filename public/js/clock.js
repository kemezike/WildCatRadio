        function startTime() {
            var today = new Date();
            var h = today.getHours() > 12 ? today.getHours() - 12 : today.getHours() ;
            var m = today.getMinutes();
            var s = today.getSeconds();
            var d = new Date();
            var ampm = h <= 12 ? 'pm' : 'am';

            // weekday
            var weekday = new Array(7);
            weekday[0] =  "Sunday";
            weekday[1] = "Monday";
            weekday[2] = "Tuesday";
            weekday[3] = "Wednesday";
            weekday[4] = "Thursday";
            weekday[5] = "Friday";
            weekday[6] = "Saturday";
            var n = weekday[d.getDay()];

            // month
            var month = new Array();
            month[0] = "January";
            month[1] = "February";
            month[2] = "March";
            month[3] = "April";
            month[4] = "May";
            month[5] = "June";
            month[6] = "July";
            month[7] = "August";
            month[8] = "September";
            month[9] = "October";
            month[10] = "November";
            month[11] = "December";
            var M = month[d.getMonth()];

            // day
            var D = today.getDate();

            //year
            var Y = today.getFullYear();

            m = checkTime(m);
            s = checkTime(s);
            n = checkTime(n);
            M = checkTime(M);
            D = checkTime(D);
            Y = checkTime(Y);
            ampm = checkTime(ampm);

            document.getElementById('clock-time').innerHTML =
            h + ":" + m + " " +ampm;
            document.getElementById('clock-date').innerHTML =
            n + ", " + M + " " + D + ", " + Y;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
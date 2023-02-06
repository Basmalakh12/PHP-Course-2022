# Data and time functions

date_defult_timezone_get() :` Gets the default timezone used by all date/time functions `

 date_defult_timezone_set(timezone) : ` set timezoneused by all date/time functions `
 ```php
 
  date_defult_timezone_set("Africa/Cairo");

```

 date_creat(date/time , timezone)

 timezone_open(timezone) :` create new datetimezone object`

 checkdata( M , D , Y ) :`validate a gregorian data`


 <details>
<summary> date("y-m-d  H:i:s") </summary>
 y => year

 m => month

 d => day

 H => hour

 i => minute
 
 s => second

 </details>


 <details>
<summary> date_format() </summary>
 "year"

 Y => four digites

 y => two digites

 ---
 "month"

 M => 06-2

 m => text in 3 letters 

 F => full text 

 t => number of days in this month
 
 ---
 "day"

 d =>day of month 1-31

 j => day without zero 

 D => text in 3 letters

 I => full text 

 Z => day of the year 0-365

 S => st ,rd suffix for day of the month

 ---
 "time"

 a => small am/pm

 A => capital am/pm

 ---
 "hour"

 g => 1-12

 G => 0-23

 h => 01-12

 H => 00-23

 ---
 "minutes , seconds ,micro"

 i => 00-59

 s => 00 -59

 u => microseconds

 </details>

 ```php
 $d = date_creat();
 echo date_format($d, "Y"). "<br>"
 echo date_format($d, "y"). "<br>"

 ```








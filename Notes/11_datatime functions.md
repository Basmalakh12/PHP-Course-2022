 # DateTime

 ### Data and time functions

 date_defult_timezone_get() :` Gets the default timezone used by all date/time functions `

 date_defult_timezone_set(timezone) : ` set timezoneused by all date/time functions `
 ```php

  date_defult_timezone_set("Africa/Cairo");

 ```

 date_creat(date/time , timezone)

 timezone_open(timezone) :` create new datetimezone object`

 checkdate( M , D , Y ) :`validate a gregorian date`


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
 date_defult_timezone_set("Africa/Cairo");
 $d = date_creat();
 echo date_format($d, "Y"). "<br>"; // 2023
 echo date_format($d, "y"). "<br>"; //23

 ```
 ###  Add , Sub , Modify
 date_interval_create_from_date_string()

 date_add()

 date_sub()
 
 date_modify()

 ```php
 date_defult_timezone_set("Africa/Cairo");
 $d = date_creat();
 date_add($d,date_interval_create_from_date_string("1 year 2 months 3 day"));
 date_sub($d,date_interval_create_from_date_string("1 year 2 months 3 day"));
 date_modify($d,"+20 days");
 echo date_format($d, "Y/m/d H:i:s A");

 ```
 ### Time, Get_Date, Date_Parse

 - time() :` unix timestamp => seconds since 01 jan 1970`

 ```php
 date_defult_timezone_set("Africa/Cairo");
 echo time() ."<br>"; //seconds
 echo time() /60 ."<br>"; // minutes
 echo time() /60 /60 ."<br>"; //hours
 echo time() /60 /60 /24."<br>"; //days
 echo time() /60 /60 /24 365."<br>"; // years
 ```

 - getdate():` return array ,return day,year,hour, etc`

 ```php
 date_defult_timezone_set("Africa/Cairo");
 echo "<pre>";
 print_r(getdate());
 echo "</pre>";
 ```

 - date_parse():`Check for an error or not`


 ```php
 date_defult_timezone_set("Africa/Cairo");
 echo "<pre>";
 print_r(date_parse("1985-2-30  5:25:15 utc"));
 echo "</pre>";
 ```
 ### Date_Diff , StrToTime
 - deta_diff() :`returns the difference between two DateTime objects "difference between two period"`
 ```php
 date_defult_timezone_set("Africa/Cairo");
 $reg = date_creat("2023-02-10");
 $now = date_creat("now");
 $diff = deta_diff($reg,$now);
 echo "<pre>";
 print_r($diff);
 echo "</pre>";
 echo "you are a member for " . $diff->dayes . "Days <br>";
 ```
 - strtotime(datetime,base):` get date in text`

 











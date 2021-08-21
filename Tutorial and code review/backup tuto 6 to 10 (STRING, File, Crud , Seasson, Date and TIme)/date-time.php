<?php
/**
 * 
 * Date anmd time 
 */

 
//  Unix time stamp= >  January 01 1970 theke time mane 00 theke ekhn  obdi koy sec par hyece seta Unix time stamp 
echo time();// 1624252305 second 

echo PHP_EOL;

echo microtime(true);// 1624252614.8602 micro second  
echo PHP_EOL;
echo microtime(false);// 0.50691400 1624252763 micro second  
echo PHP_EOL;
var_dump( microtime(false) );// string(21) "0.47925900 1624252819" micro second  

echo PHP_EOL;
/**
 * Date
 */
echo date('d/m/y'); //date month year  21/06/21

echo PHP_EOL;

echo date('d/F/Y'); //date Fullmonth Fullyear 21/June/2021



/**
 * -=========================Time complexity
 */

function sum($n){
    $total = 0;
    for($i = 1 ; $i < $n ; $i++){
        $total +=$i;
    }
    return $total;
}

$start = microtime(true);
echo (sum(4));
echo PHP_EOL;
$end = microtime(true);

$total = ($end - $start);

echo $total;

// 6
// 0.0006110668182373

/**
 * ================================Time format
 */
echo date('d m y'); //22 06 21 

echo date('dS M Y'); //22nd Jun 2021
echo PHP_EOL;
echo date('dS F Y'); //22nd June 2021
echo date('dS F Y h:i:s'); //22nd June 06:59:30  
echo date('dS F Y H:i:s'); //22nd June 19:59:30  
echo date('dS F Y H:i:s a'); //22nd June 19:59:30 am 
echo date('dS F Y H:i:s A'); //22nd June 2021 07:03:03 AM

echo date('z'); //this year today is 172 days 


// date_default_timezone_set('UTC');
$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

echo $today;


 /**
 * ================================ Time zone set   https://www.php.net/manual/en/class.datetime.php || https://www.php.net/manual/en/function.date.php
 */
date_default_timezone_set("Asia/Dhaka");
date_default_timezone_set('UTC');
echo date('dS M Y s:i:h a'); //22nd Jun 2021 09:07:11 am

 /**
 * ================================
 */
date_default_timezone_set("Asia/Dhaka");

echo mktime(0,0,0,06,21,2021);//hour minuate,second, month,day,year//16242120001
echo mktime(0,0,0,06,22,2021);//hour minuate,second, month,day,year//624298400



echo gmmktime(0,0,0,06,21,2021);//624233600 //gmt format e pete


echo PHP_EOL; 
// june 22 theke 30 tarik obdi koto din = 8 days
echo (mktime(0,0,0,6,22,2021)- mktime(0,0,0,6,30,2021)) / (24*60*60); //june 22 theke 30 tarik obdi koto din = -8 days

echo (mktime(0,0,0,6,30,2021) - mktime(0,0,0,6,22,2021) ) / (24*60*60); //june 22 theke 30 tarik obdi koto din = 8 days



 /**
 * ================================ find difference 
 */


$d1 = new DateTime("15 june 2021");
$d2 = new DateTime("22 june 2021");

$difference = date_diff($d1, $d2);

echo $difference->format("%d");//7
echo $difference->format("%D");//07
echo $difference->format("%y years %m month %D Days");//0 Year 0 month 07 Days

 /**
 * ================================
 */





 /**
 * ================================
 */




 /**
 * ================================
 */
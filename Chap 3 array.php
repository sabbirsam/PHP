<?php

// Index array & Neumeric Array===============
$colors = array("Red", "Green", "Blue", "Yellow");
$numbers = array(1, 2, 2.5, 4, 7, 10);
 
// Sorting and printing array
// sort($colors);
// print_r($colors);

echo PHP_EOL;
echo PHP_EOL;

/**
 * Array
(
    [0] => Blue  
    [1] => Green 
    [2] => Red   
    [3] => Yellow
)
 */ 
//Decending order
// rsort($colors);
// print_r($colors);
/**
 * Array
(
    [0] => Yellow
    [1] => Red   
    [2] => Green 
    [3] => Blue  
)

 */
//newmeric
// sort($numbers);
// print_r($numbers);
/**
 * Array
(
    [0] => 1     
    [1] => 2     
    [2] => 2.5   
    [3] => 4     
    [4] => 7     
    [5] => 10    
)
 */

 /**
  * Associative Array=====================
  */

$age = array(
    "Peter"=>20, 
    "Harry"=>14, 
    "John"=>45, 
    "Clark"=>35
);
 
// Sorting array by key and print
asort($age); // assending sort in value wise
print_r($age);
/**
 * Assending
 * Array
(
    [Harry] => 14
    [Peter] => 20
    [Clark] => 35
    [John] => 45 
)

 */

echo PHP_EOL;
echo PHP_EOL;

arsort($age); //ar means decending sort in value wise
print_r($age);
/**
 *
 * Decending
 *  Array
(
    [John] => 45
    [Clark] => 35
    [Peter] => 20
    [Harry] => 14
)
 */

echo PHP_EOL;
echo PHP_EOL;


rsort($age); // Assending sort by key wise
print_r($age);
/**
 * Assending by key 
 * Array
(
    [0] => 45
    [1] => 35
    [2] => 20
    [3] => 14
)

 * 
 */


echo PHP_EOL;
echo PHP_EOL;

krsort($age); //// decending sort by key wise
print_r($age);
/**
 * decending by key
 * Array
(
    [3] => 14
    [2] => 20
    [1] => 35
    [0] => 45
)
 */


//  ====================================================================== Sorting above code

/**  
  * Array 
 */


 $student = array(
   "Md Sabbir",
   "CPT",
   1234,
   "01234"
 );
echo $student[0]; 
echo $student[1]; 
echo $student[2]; 
echo $student[3]; 
echo PHP_EOL;

// to print all value from array use foreach
 
foreach($student as $value){
  echo $value."\n";
}


echo PHP_EOL;

Print_r($student);
// output 

/**
 * Array
(
    [0] => Md Sabbir 
    [1] => CPT       
    [2] => 1234      
    [3] => 01234     
)
 * 
 */
echo "<hr>";

var_dump($student);
/**
 * Array
array(4) {
  [0]=>
  string(9) "Md Sabbir"
  [1]=>
  string(3) "CPT"
  [2]=>
  int(1234)
  [3]=>
  string(5) "01234"

 * 
 */

 
//  to reverse use array reverse;
echo "<hr>";
echo PHP_EOL;

Print_r(array_reverse( $student)); //use to reverse
/**
 * Array
(
    [0] => 01234
    [1] => 1234
    [2] => CPT
    [3] => Md Sabbir
)
 */

//  array value is there or not finder  -> in_array()


//  array value is there or not finder  -> in_array()

$student= array(
    "sabbir",
    "tanvir",
    "zobair",
    "Mamun"
  );
  
  
  if (in_array("sabbirs", $student)){
    echo "Found";
  }else{
    echo"Not found";
  }
  
  echo PHP_EOL;
  
  // Array keys found   array_key_exists
  $cities = array(
    "France"=>"Paris", 
    "India"=>"Mumbai", 
    "UK"=>"London", 
    "USA"=>"New York"
  );
   
  // Testing the key exists in the array or not
  if(array_key_exists("USA", $cities)){
    echo "Found";
  }else{
    echo "not Found";
  }
  
  //Test if string contains the word   strpos-> string position
  
  echo PHP_EOL;
  $word= "sams";
  $sentence="Hello sam, how are you";
  
  if(strpos($sentence, $word) != false){
      echo "Found";
  }else{
    echo "Not found";
  }
   
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  // array difference between two array 
  
  $one = array(
    "name"=> "Sabbir",
              013,
              "O+"
  
  );
  
  $two = array(
    "name"=> "Tanvir",
              017,
              "B+"
  );
  
  
  $diff = array_diff($one , $two);
  print_r( $diff );
  
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  
  
  $array1 = array("a" => "sky", "star", "moon", "cloud", "moon");
  $array2 = array("b" => "sky", "sun", "moon");
   
  // Comparing the values
  $result = array_diff($array1, $array2);
  print_r($result);
  
  /**
   * Array
  (
      [0] => star  //nai array 2tar modde
      [2] => cloud
  )
   */

   // array_merge 

$array1 = array(
    1, 
    "Name" => "sam",
    2, 
    "IUBAT", 
    3
  );
  
  $array2 = array(
    "a",
    "Name" => "Tanvir", 
    "city" => "Dhaka", 
    4, 
    "BMSSRRAU"
  );
   
  // Merging arrays together
  $result = array_merge($array1, $array2);
  print_r($result);
  
  /**
   * Array
  Array
  (
      [0] => 1
      [Name] => Tanvir
      [1] => 2
      [2] => IUBAT
      [3] => 3
      [4] => a
      [city] => Dhaka
      [5] => 4
      [6] => BMSSRRAU
  )
   */
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  // Filtering the array======================
  $array = array(
    "apple", 
    "", 
    0, 
    2, 
    null, 
    -5, 
    "0", 
    "orange", 
    10, 
    false
  );
  
  
  var_dump($array);
  /**
   * 
   * array(10) {
    [0]=>
    string(5) "apple"
    [1]=>string(0) ""
    [2]=>int(0)
    [3]=>int(2)
    [4]=>NULL
    [5]=>int(-5)
    [6]=>string(1) "0"
    [7]=>string(6) "orange"
    [8]=>int(10)
    [9]=>bool(false)
  }
   */
  
  
  echo "<br>";
  echo "<br>";
  echo "<br>";
   
  // Filtering the array
  $result = array_filter($array);                 
  var_dump($result);
  
  /**
   * 
   * array(5) {
    [0]=>string(5) "apple"
    [3]=>int(2)
    [5]=>int(-5)
    [7]=>string(6) "orange"
    [8]=>int(10)
  }
  
   */
  
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  echo PHP_EOL;
  
   // Defining a callback function
  function myFilter($var){
    return ($var !== NULL && $var !== FALSE && $var !== "");
  }
  
  // Filtering the array
  $result = array_filter($array, "myFilter");     
  var_dump($result);

//How to remove duplicate values from an array in PHP  -> array_unique()

$address = array("sabbir ahmed","Dhaka","Bangladesh", "sabbir ahmed","tanvir");
$remove = array_unique($address);

print_r($address);
/**
 * Array
(
    [0] => sabbir ahmed
    [1] => Dhaka
    [2] => Bangladesh
    [3] => sabbir ahmed
    [4] => tanvir
)
 */

var_dump($remove);
/**
 * array(4) {
  [0]=>
  string(12) "sabbir ahmed"
  [1]=>
  string(5) "Dhaka"        
  [2]=>
  string(10) "Bangladesh"  
  [4]=>
  string(6) "tanvir"       
}
 */


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

 
//How to remove the first element from an array in PHP  ->  array_shift() 

$hobbies = array("Acting", "Drawing", "Music", "Films", "Photography");
$remove = array_shift($hobbies);
print_r($hobbies);
/**
 * Array
(
    [0] => Drawing
    [1] => Music
    [2] => Films
    [3] => Photography
)

 */
echo PHP_EOL;
var_dump($remove); //string(6) "Acting"



echo PHP_EOL;

// How to remove the last element from an array in PHP ->   array_pop()

$address = array("sabbir ahmed","Dhaka","Bangladesh");

$remove = array_pop($address);

print_r($address);
/**
 * Array
(
    [0] => sabbir ahmed
    [1] => Dhaka
)
 */

var_dump($remove);
/**
 * string(10) "Bangladesh"
 */



// How to delete an element from an array in PHP  -> unset($arr1["b"]);
echo PHP_EOL;
$arr1 = array(
    "a" => "Apple", 
    "b" => "Ball", 
    "c" => "Cat"
);

unset($arr1["b"]);
print_r($arr1);
/**
 * Array
(
    [a] => Apple
    [c] => Cat
)

 */

echo PHP_EOL;

$arr2 = array(
    "Apple", 
    "Ball", 
    "Cat"
);
unset($arr2["Ball"]);
print_r($arr2);
/**
 * Array
(
    [0] => Apple
    [1] => Ball  // not removed need key. key is must to remove
    [2] => Cat
)
 */

echo PHP_EOL;

$arr3 = array(
    1, 
    2, 
   3,
   4
);
unset($arr3[2]);
print_r($arr3);
/**
 * Array
(
    [0] => 1
    [1] => 2
    [3] => 4
)

 */


  //print array with for loop
$n = 12;
$student = array(
     "SaBBIR",
     1234,
    "Grameen",

);

// var_dump($student);
// echo count($student); //3 


for($i=0; $i<count($student); $i++){
    echo $student[$i]."\n";
}

//key thakele emn kore ber hbe na, foreach use korte hbe
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$student = array(
    "name"=> "SaBBIR",
    "Id"=> 1234,
   "sim"=>"Grameen",

);

foreach($student as $key){
    echo $key."\n";
}

// foreach example with key and value ============================
$superhero = array(
  "name" => "Peter Parker",
  "email" => "peterparker@mail.com",
  "age" => 18
);

// Loop through superhero array
foreach($superhero as $key => $value){
  echo $key . " : " . $value . "\n";
}
/**
* 
name : Peter Parker
email : peterparker@mail.com
age : 18
==============================================================
*/



//array_unshift it used to add new value from top
$a = array(
  "sam",
  "tam",
  "ahmed"
);

$remove = array_unshift($a,"sabbir");
echo $remove;
print_r($a);
/**
* Array
(
  [0] => sabbir
  [1] => sam
  [2] => tam
  [3] => ahmed
)

*/


echo PHP_EOL;
echo PHP_EOL;

//array_push it used to add new value from below
$ab = array(
  "sam",
  "tam",
  "ahmed"
);

$remove = array_push($ab,"sabbir");

print_r($ab);
/**
* Array
(
  [0] => sam
  [1] => tam
  [2] => ahmed
  [3] => sabbir
)

*/


//Associative array=============================================================================================
$food= array(
  "Address_one"=> "Sabbir, Dhaka, 17103188",
  "Address_two"=> "Ahmed, Dhaka, 17103188",
  "Varsity"=> "IUBAT,IUT,BUET,DU",
);

$food['Address_one'] = $food['Address_one']." , Yappi "; // add Yappi in 'Address_one'
$food['Address_one'] .= " , new add "; // add Yappi in 'Address_one'

echo count($food);
echo PHP_EOL;
echo $food['Address_one'];

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

// print all 

foreach( $food as $key=>$value){
  echo $key." = ".$value;
  echo PHP_EOL;
  
  echo $value;
}


echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$keys= array_keys($food);
print_r($keys); 
/**
* Array
(
  [0] => Address_one
  [1] => Address_two
  [2] => Varsity
)
*/
echo PHP_EOL;  //if first i can found keys and then i can use for. but direct for will not work.
for ($i = 0; $i< count($keys); $i++){
  $sa = $keys[$i];
  echo $food[$sa]."\n";
}

/**
* 
* Sabbir, Dhaka, 17103188
Ahmed, Dhaka, 17103188
IUBAT,IUT,BUET,DU
*/

echo PHP_EOL;
echo PHP_EOL;
$values = array_values($food);
for ($i = 0; $i< count($values); $i++){
  $sa = $values[$i];
  echo $sa."\n";  //valuse need to find with direct 
}

//string k array banano
$name = array("sabbir, ahmed, akash, sam");
$name = explode(', ',"sabbir, ahmed, akash, sam"); // here it has a issue, ', '-> space chara gulo count hbe na karon ami space use koreci delimeter 

//so ami use korbw    ->     preg_split('/, |,/')
var_dump($name);

echo PHP_EOL;
$name = preg_split('/, |,/',"sabbir, ahmed, akash, sam-sam");
print_r( $name );
/**
 * Array
(
    [0] => sabbir
    [1] => ahmed
    [2] => akash
    [3] => sam-sam
)

 */


echo PHP_EOL;
/**
 * array(4) {
  [0]=>
  string(6) "sabbir"
  [1]=>
  string(6) " ahmed"
  [2]=>
  string(6) " akash"
  [3]=>
  string(4) " sam"  
}

 */
// join is used to add all array in string, means back to previously /
echo PHP_EOL;
$name = preg_split('/, |,/',"sabbir, ahmed, akash, sam-sam");
$nameJoin = join(", ",$name);//array inx string banano

echo $nameJoin; //sabbir,  ahmed,  akash,  sam




/**
 * multidimentional array / nested array
 */

$a = array(
  "Name"=> explode(", ","SAM, AHMED, AKASH"),
  "Country"=>explode(", ","BD, UK, PK, OK, CK, OOK , OOPO")
);


$add = array_unshift($a["Name"], "sabbir");
$addn= array_push($a["Country"], "Bangladesh");
print_r($a);

//specific access

echo $a["Name"][3]; // multidimensional array 



/**
 * Associative array and make it string
 */


$stud= array(
  'Fname'=>"SAM",
  "Lname"=>"Akash",
  'Age'=>"15",
  'Class'=>8
);

print_r($stud);
echo $stud['Fname']." ".$stud['Lname']."\n";

printf("My name is %s %s",$stud['Fname'], $stud['Lname']);

echo PHP_EOL;
echo PHP_EOL;

//  Associative array to string ====== use  serialize

echo serialize($stud); //a:4:{s:5:"Fname";s:3:"SAM";s:5:"Lname";s:5:"Akash";s:3:"Age";s:2:"15";s:5:"Class";i:8;}
echo PHP_EOL;
echo PHP_EOL;

$serilazed = serialize($stud);
$b = unserialize($serilazed);
print_r($b);


echo PHP_EOL;
echo PHP_EOL;


/**
 * array to json ====================================================
 * 
 */ 
$stud= array(
  'Fname'=>"SAM",
  "Lname"=>"Akash",
  'Age'=>"15",
  'Class'=>8
);
//json_encode();  means json e encode/banano kora
//json_decode();   means json k abr ager moto kora


$jsondata = json_encode($stud);  //{"Fname":"SAM","Lname":"Akash","Age":"15","Class":8}
echo $jsondata;

echo PHP_EOL;

$jsondecode = json_decode($jsondata);
print_r($jsondecode);
/**
* stdClass Object   // remove korte true dibw
(
 [Fname] => SAM
 [Lname] => Akash
 [Age] => 15
 [Class] => 8
)

*/

//   stdClass Object remove kore original array banate
echo PHP_EOL;
echo PHP_EOL;
$jsondecode = json_decode($jsondata,true);
print_r($jsondecode);
/**
* 
Array
(
 [Fname] => SAM
 [Lname] => Akash
 [Age] => 15
 [Class] => 8
)
*/




$demo = array(
  'name'=>'sam',
  'class'=>'six'
);

$b = $demo['name']='sabbir';
print_r($demo); //
/**
* Array
(
  [name] => sabbir
  [class] => six  
)
*/
echo PHP_EOL;
print_r($b); //sabbir

echo PHP_EOL;
echo PHP_EOL;

//new method =================================================
/**
* 
* Copy by value or deep copy
*/
$demos = array(
  'name'=>'sam',
  'class'=>'six'
);

$demo_copy = $demo;// all value copy to demo_copy but dmeos is same. because all data copy here. its a copy by value.
$demo_copy['name']='sabbir';

print_r($demos);// value are same as it is ,its not change
/**
* Array
(
  [name] => sam
  [class] => six
)
*/
echo PHP_EOL;
print_r($demo_copy); //demos value are change here in demos_copy
/**
* Array
(
  [name] => sabbir
  [class] => six
)

*/


/**
* 
* Copy by  refference by added an &
*/
echo PHP_EOL;echo PHP_EOL;echo PHP_EOL;

$demo_two = array(
  'name'=>'sam',
  'class'=>'six'
);
$demo_copy = &$demo_two; //so its location are copy here now both are change 

print_r($demo_two);
echo PHP_EOL;echo PHP_EOL;
print_r($demo_copy);

// output 
/**
* Array
(
  [name] => sam
  [class] => six
)


Array
(
  [name] => sam
  [class] => six
)

*/

// example with function 
$demo = array(
  'name'=>'sam',
  'class'=>'six'
);

function printData($demo){  //here & is not copied so only chnage on printData   //its also know an deep copy/ copy by value
  $demo['name']= $demo['name']." Ahmed";
  print_r($demo);
}

printData($demo);
echo PHP_EOL;
print_r($demo);

/**
* Array
(
  [name] => sam Ahmed
  [class] => six
)

Array
(
  [name] => sam
  [class] => six
)

*/

echo PHP_EOL;

function printData(&$demo){   //here & is added so location is copid so change in both side  // its also know as shallow copy /copy by reffer
  $demo['name']= $demo['name']." Ahmed";
  //$demo['name'].= " Ahmed";//
  print_r($demo);
}

printData($demo);
echo PHP_EOL;
print_r($demo);

/**
* Array
(
  [name] => sam Ahmed
  [class] => six     
)

Array
(
  [name] => sam Ahmed
  [class] => six     
)
*/


//array value find

$name = "sam, sam";

if(isset($name)){
    echo "name is set";
}else{
    echo "name is unset";
}



echo PHP_EOL;

if (isset($name) && (is_numeric($name) || $name != '')){
    echo "name is set";
}else{
    echo "name is unset";
}




echo PHP_EOL;

$names = array(
    'name'=>'sam',
    '',
    0,
    null,
    FALSE,
    
);

array_filter($names);
var_dump($names);
/**
 * array(5) {       
  ["name"]=>     
  string(3) "sam"
  [0]=>
  string(0) ""   
  [1]=>
  int(0)
  [2]=>
  NULL
  [3]=>
  bool(false)    
}

 */
echo PHP_EOL;
echo PHP_EOL;

function myFilter($var){
    return ($var !== NULL && $var !== FALSE && $var !== "");
}

$a = array_filter($names,"myFilter");
var_dump($a);
/**
 * array(2) {
  ["name"]=>
  string(3) "sam"
  [1]=>
  int(0)
}
 */


/**
 * Array Slicing ================================================
 */

$name = array(
  "Sabbir", 
  "Tanvir",
  "Zobair",
  "Mamun"
 );
$newName = array_slice($name, 1 , 2 ,true); //array name and , index number koto thek or koto theke and koto obdi or true dile key same thakeb
print_r($newName);
/**
* Array
(
 [0] => Zobair
 [1] => Mamun 

*/
/**
* Array
(
 [0] => Tanvir
 [1] => Zobair 

*/
/**
* 
Array
(
 [1] => Tanvir
 [2] => Zobair
)

*/

echo PHP_EOL;
echo PHP_EOL;

$names = array(
 "one"=>"Sabbir", 
 "two"=>"Tanvir",
 "three"=>"Zobair",
 "four"=>"Mamun",
 12=>124,
 "five"=>"AHMED"
);
$newNams = array_slice($names, 1 ); //array name and , index number koto thek or koto theke and koto obdi or true dile key same thakeb
print_r($newNams);
/**
* Array
(
 [two] => Tanvir
 [three] => Zobair
 [four] => Mamun
 [0] => 124         //wrong index so make null and true to fix this 
 [five] => AHMED
)
*/

$newNams = array_slice($names, 1,null,true ); //array name and , index number koto thek or koto theke and koto obdi or true dile key same thakeb
print_r($newNams);
/**
* Array
(
 [two] => Tanvir
 [three] => Zobair
 [four] => Mamun
 [12] => 124  //now its fixed
 [five] => AHMED
)
*/

/**
 * Array Splice ================================================
 */

$name = array(
  "Sabbir", 
  "Tanvir",
  "Zobair",
  "Mamun"
 );

$newName = array_splice($name, 1 ,true); 
print_r($newName);
/**
* Array
(
 [0] => Tanvir
)
*/
echo "\n";
print_r($name);  // below tanvir is missing mane kete ber kora hyce
/**
* Array
(
 [0] => Sabbir
 [1] => Zobair
 [2] => Mamun
)

*/

/**
 * Array Splice ================================================
 */

$name = array(
  "Sabbir", 
  "Tanvir",
  "Zobair",
  "Mamun",
  "Mango",
  "Banana",
 );

$new_add = array("newone", "newtwo");

$newName = array_splice($name, 1, -1, $new_add); 
print_r($new_add);
print_r($name);

/**
* Array
(
  [0] => newone
  [1] => newtwo
)
Array
(
  [0] => Sabbir
  [1] => newone
  [2] => newtwo
  [3] => Banana
)

*/

/**
 * Array Splice ================================================
 */

$number = array(1,2,3,4,5,10,6,9,7,11);
$address = array(
    "Name"=> "SABBIR",
    "Address"=> "Dhaka",
    "phone"=> "013",

);

sort($number);
print_r( $number);
/**
 * Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 7
    [7] => 9
    [8] => 10
    [9] => 11
)
 */
echo "\n";
echo "\n";
sort($address);
print_r( $address); // missing key to fix use asort
/**
 *Array
(
    [0] => 013
    [1] => Dhaka
    [2] => SABBIR
)
 */

echo "\n";
echo "\n";

asort($number);
print_r( $number);
/**
 * Array       
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [6] => 6
    [8] => 7
    [7] => 9
    [5] => 10
    [9] => 11
)
 */


echo "\n";
echo "\n";


asort($address);
print_r( $address);
/**
 * 
Array
(
    [phone] => 013
    [Address] => Dhaka
    [Name] => SABBIR
)
 */

 foreach($address as $add){
     echo $add."\n";
 }
 /**
  * 013
Dhaka
SABBIR
  */

  foreach($number as $num){
    echo $num."\n";
}
 
/**
 * 1
2
3
4
5
6
7
9
10
11
 */

 
/**
 * Array sort, asort, arsort, rsort, ksort, SORT_STRING, SORT_FLAG_CASE
 */

$name = array(
  "name"=>"sam",
  "Full Name"=>"SAM",
  "Account"=>"City Bank",
  "Home"=>"BD",
  "Home2"=>"banfladesh"

);
//  ksort($name); //key sort
//  print_r($name);
/**
* Array
(
 [Account] => City Bank
 [Home] => BD
 [name] => sam
)
*/

sort($name , SORT_STRING);
print_r($name);
/**
* Array
(
 [0] => BD
 [1] => City Bank
 [2] => SAM
 [3] => banfladesh
 [4] => sam
)
*/
sort($name , SORT_STRING | SORT_FLAG_CASE);
print_r($name);
/**
* Array
(
 [0] => banfladesh       //b sobar upore
 [1] => BD               // capital B o upore
 [2] => City Bank
 [3] => sam
 [4] => SAM
)
*/



// Array Search ================================================================
$name = array("a"=>"Apple","b"=>"Ball","c"=>"Cat","D"=>"Doll");
$num = array("2",8,7,3,4,9,11,5);

if(in_array(2,$num)){
    echo "Found";
}else{
    echo "Not Found";
}

echo PHP_EOL;
//3rd one is strict mane type o check korbe so ami "2" khhujtci but 8 nai  -> niddle mane ja khujbw, haystak jetar viotre khujbw, ar type
if(in_array(2,$num,true)){
    echo "Found";
}else{
    echo "Not Found";
}

/**
    Found    
    Not Found
 * output 
 * /
/**
 * 
 */
//  To find in where it was, menas ofset======================
$num = array("2",8,7,3,4,9,11,5);
echo PHP_EOL;
$a = array_search(2, $num);
echo $a;
/**
 * output: 0 mane sobar samne ase
 */
$name = array("a"=>"Apple","b"=>"Ball","c"=>"Cat","D"=>"Doll");

 if(array_key_exists("b",$name)){
     echo "found";
 }
//  or ========================================

$b = array_key_exists("b",$name);
echo $b;//output 1
echo PHP_EOL;
//  or ========================================

if(key_exists("b",$name)){
         echo "found";
}else{
    echo "not found";
}
//output: found



/**
 * Array intercept to find common in 2 array
 */
$n1=array(
  1,5,7,9,6,3,4,5
);

$n2 =array(
  11,32,42,15,3,4,5,8
);

$a = array_intersect($n1 , $n2);
print_r($a);
/**
* Array       
(
  [1] => 5
  [5] => 3
  [6] => 4
  [7] => 5
)

*/

$n3=array(
  "one"=>1, "five"=>5,"seven"=>7,
);

$n4 =array(
  "Eleven"=> 11,"thirty two"=>32,"eight"=>7
);

$b = array_intersect($n3 , $n4);
print_r($b);
/**
* Array
(
  [seven] => 7
)

*/


$n3=array(
  "one"=>1, "five"=>5,"seven"=>7,
);

$n4 =array(
  "Eleven"=> 11,"thirty two"=>32,"seven"=>7
);

$b = array_intersect_assoc($n3 , $n4);
print_r($b);
/**
* Array
(
  [seven] => 7
)

*/

// difference finding ============================1st array kon elements 2nd array te nai seta print hbe
$n1=array(
  1,5,7,9,6,3,4,5
);

$n2 =array(
  11,32,42,15,3,4,5,8
);


$b = array_diff($n3 , $n4);
print_r($b);
/**
* Array
(
  [one] => 1  
  [five] => 5 
)
*/
// anothet with key check ====
$n1=array(
  1,5,7,9,6,3,4,5
);

$n2 =array(
  11,32,42,15,3,4,5,8
);


$b = array_diff_assoc($n3 , $n4);
print_r($b);
/**
* Array
(
  [one] => 1
  [five] => 5
)
*//**
 * Array intercept to find common in 2 array
 */
$n1=array(
  1,5,7,9,6,3,4,5
);

$n2 =array(
  11,32,42,15,3,4,5,8
);

$a = array_intersect($n1 , $n2);
print_r($a);
/**
* Array       
(
  [1] => 5
  [5] => 3
  [6] => 4
  [7] => 5
)

*/

$n3=array(
  "one"=>1, "five"=>5,"seven"=>7,
);

$n4 =array(
  "Eleven"=> 11,"thirty two"=>32,"eight"=>7
);

$b = array_intersect($n3 , $n4);
print_r($b);
/**
* Array
(
  [seven] => 7
)

*/


$n3=array(
  "one"=>1, "five"=>5,"seven"=>7,
);

$n4 =array(
  "Eleven"=> 11,"thirty two"=>32,"seven"=>7
);

$b = array_intersect_assoc($n3 , $n4);
print_r($b);
/**
* Array
(
  [seven] => 7
)

*/

// difference finding ============================1st array kon elements 2nd array te nai seta print hbe
$n1=array(
  1,5,7,9,6,3,4,5
);

$n2 =array(
  11,32,42,15,3,4,5,8
);


$b = array_diff($n3 , $n4);
print_r($b);
/**
* Array
(
  [one] => 1  
  [five] => 5 
)
*/
// anothet with key check ====
$n1=array(
  1,5,7,9,6,3,4,5
);

$n2 =array(
  11,32,42,15,3,4,5,8
);


$b = array_diff_assoc($n3 , $n4);
print_r($b);
/**
* Array
(
  [one] => 1
  [five] => 5
)
*/

/**
 * ==========================================================================IMPORTANT-============================
 */

// Array IMPORTATN knowledge 
// =======================================Array_walk;
$num = array(1,2,3,4,8,6,7);

function square($n){
    printf("The square of %d is %d\n",$n , $n*$n);
}

array_walk($num , 'square');  //array vitor function call korte 'square' emn kroe kora lage

/**
 * The square of 1 is 1 
The square of 2 is 4 
The square of 3 is 9 
The square of 4 is 16
The square of 8 is 64
The square of 6 is 36
The square of 7 is 49
 */




 
// Array IMPORTATN knowledge 
// =======================================array_map   mainly work for return;
$num = array(1,2,3,4,8,6,7);


function cube($n){
    return $n*$n*$n;
}

$newArray = array_map('cube', $num); //first function then array
print_r($newArray);
/**
 * Array
(
    [0] => 1  
    [1] => 8  
    [2] => 27 
    [3] => 64 
    [4] => 512
    [5] => 216
    [6] => 343
)
 */


 
// Array IMPORTATN knowledge 
// =======================================array_filter   mainly work for    ->     true return;
$num = array(1,2,3,4,8,6,7);


function filterFUn($n){
    return $n%2 == 0; //mane true hole return korbe
}

$newArray = array_filter($num,'filterFUn'); //first function then array
print_r($newArray);
/**
 * main Array 
(
    [0] => 1  
    [1] => 2  
    [2] => 3 
    [3] => 4 
    [4] => 8
    [5] => 6
    [6] => 7
)
 */

//  output: 
/**
 * Array       
(
    [1] => 2
    [3] => 4
    [4] => 8
    [5] => 6
)

 */




// Array IMPORTATN knowledge 
// =======================================array_filter   mainly work for return;
$num = array('sam','ron','jon','sim',);


function filterByS($n){
    return $n[0]=='s';
}

$newArray = array_filter($num,'filterByS'); //first function then array
print_r($newArray);

/**
 * Array
(
    [0] => sam
    [3] => sim
)
 */



 /**
 * Array reduce===================
 */

$num = array(1,3,2);


function filterFUn($oldValue, $newValue){
    return $oldValue+$newValue; //mane true hole return korbe
}

$newArray = array_reduce($num,'filterFUn'); //first function then array
print_r($newArray);
/**
 * output: 6
 * filterFUn(0, 1) = 0+1=1 return 1
 * filterFUn(1, 3) = 1+3=4 return 4
 * filterFUn(4, 2) = 4+2=6 return 6
 * output 6
 */

 /**
 * Array store in specifi way==========================================================
 */


$number = array();
for($i = 5; $i<10; $i++){
    array_push($number, $i);
}

print_r($number);
/**
 * Array       
(
    [0] => 5
    [1] => 6
    [2] => 7
    [3] => 8
    [4] => 9
)
 */

//  Array input =============================
$number = array();
for($i = 5; $i<10; $i++){
    array_unshift($number, $i);
}

print_r($number);
/**
 * Array       
(
    [0] => 9
    [1] => 8
    [2] => 7
    [3] => 6
    [4] => 5

 */

 
/**
 * Array store in another way===================
 */

$number = range(1, 4, 2);  //koto theke , koto obdi , koto gor kore stepping 
$number = range(1, 4);
print_r($number);

/**
 * Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
 */

 /**
 * ===================print them
 */

foreach(range(1, 10, 2) as $oddNumber){
  echo $oddNumber."\n";
}
/**
1
3
5
7
9
*/

// rndom number generator  ========================   mt_rand

$random = mt_rand(0,7);
echo  $random;


$num = range(1,8);
$random = mt_rand(0,7);
if($random %2 == 0){
    echo "Even NUmber";
}else{
    echo "ODD NUmber";
}


// Array number suffle ========================
$num = range(1,8);
shuffle($num);
print_r($num);
/**
 * Array       
(
    [0] => 3
    [1] => 1
    [2] => 6
    [3] => 4
    [4] => 7
    [5] => 8
    [6] => 5
    [7] => 2
)
 */


 
// Array number suffle with associative array and protect key to show
$num = array(
  'a'=>'Apple',
  'b'=>'Bat',
  'c'=>'Cat',
);
// shuffle($num);
// print_r( $num );
/**
* Array   here we lost key
(
  [0] => Bat
  [1] => Cat
  [2] => Apple
)
*/

$k = array_rand($num);
// echo $k; //will print all key randomly one 
// echo $num[$k] ;//it will print all value one randomly


print_r($num[$k]); 




// END ================>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
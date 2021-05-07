<?php
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



  
  
  
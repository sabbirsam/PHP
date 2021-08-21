<?php
include_once "function.php";

/**  
  * ===========================File 
  *
  * r	Open the file for reading only.
  * r+	Open the file for reading and writing.
  * w	Open the file for writing only and clears the contents of file. If the file does not exist, PHP will attempt to create it.
  *w+	Open the file for reading and writing and clears the contents of file. If the file does not exist, PHP will attempt to create it.
  * a	Append. Opens the file for writing only. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
  * a+	Read/Append. Opens the file for reading and writing. Preserves file content by writing to the end of the file. If the file does not exist, PHP will attempt to create it.
  * x	Open the file for writing only. Return FALSE and generates an error if the file already exists. If the file does not exist, PHP will attempt to create it.
  * x+	Open the file for reading and writing; otherwise it has the same behavior as 'x'.
  *
 */

/**  
  * ==========================read file
 */


$myFiles = "sam.txt"; //store the file then
$fo= fopen($myFiles, 'r');

$read = fgets($fo, '3'); //used to read the text till a new line \n comming
echo $read;

fclose($fo);



$myFiles = "sam.txt"; //store the file then
$fo= fopen($myFiles, 'r');

$read = fgets($fo); 

while($line =fgets($fo)){
  echo $line;
} 

fclose($fo);



/**  
  * ==========================rewind use 
 */


$myFiles = "sam.txt"; //store the file then
$fo= fopen($myFiles, 'r');

$read = fgets($fo); 

while($line =fgets($fo)){
  echo $line;
} 
// rewind($fo);

while($line =fgets($fo)){
  echo $line;
} 

fclose($fo);

/**
Hello sam from data dss
Hello sam from data fvsdv
Hello sam from data ffff
*/




$myFiles = "sam.txt"; //store the file then
$fo= fopen($myFiles, 'r');

$read = fgets($fo); 

while($line =fgets($fo)){
  echo $line;
} 
// rewind($fo);

while($line =fgets($fo)){
  echo $line;
} 

fclose($fo);
/**
Hello sam from data dss
Hello sam from data fvsdv
Hello sam from data ffff 

Hello sam from data dss
Hello sam from data fvsdv
Hello sam from data ffff
 */



$myFiles = "sam.txt"; //store the file then
$fo= fopen($myFiles, 'r');

$read = fgets($fo); 

while($line =fgets($fo)){
  echo $line;
} 
// rewind($fo);
fseek($fo, 6);

while($line =fgets($fo)){
  echo $line;
} 

fclose($fo);
/**
Hello sam from data dss
Hello sam from data fvsdv
Hello sam from data ffffsam from data

Hello sam from data dss
Hello sam from data fvsdv
Hello sam from data ffff
 */

 

 
$myFiles = "sam.txt"; //store the file then
$fo= fopen($myFiles, 'r');

$read = fgets($fo); 

while($line =fgets($fo)){
  echo $line;
} 
// rewind($fo);
fseek($fo, -1, SEEK_END); //end e cursor k paty dey

while($line =fgets($fo)){
  echo $line;
} 

fclose($fo);
/**
Hello sam from data dss   
Hello sam from data fvsdv 
Hello sam from data samm  
 */

 
 
$myFiles = "data2.txt"; //store the file then
$open = fopen($myFiles,"r");
$read = fread($open,"30");
echo $read; //Hello sabbir from data2 

fclose($open);


// Another 



$myFiles = "data2.txt"; //store the file then

if(file_exists($myFiles)){ //check file is exist 

  $open=fopen($myFiles,"r");  //open the files
  $read = fread($open, "20"); //read the files

  echo $read; //print the file content

  fclose($open); //close the file
}else{
  echo "Not found";
}



// Another 

// read the file 
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Attempt to open the file
    $handle = fopen($file, "r") or die("ERROR: Cannot open the file.");

     // Read fixed number of bytes from the file
    $read = fread($handle,"20"); // to read the file , it have 2 parameter : file and how much you want to read
    echo $read;

    // Closing the file handle
    fclose($handle);
} else{
    echo "ERROR: File does not exist.";
}



/**  
  * ===========================File  ,Full file read 
 */


$myFiles = "data2.txt"; //store the file then

if(file_exists($myFiles)){ //check file is exist 

  $open=fopen($myFiles,"r");  //open the files
  $read = fread($open, filesize($myFiles)); //read the full files content so use filesize(add main file variable)

  echo $read; //print the file content

  fclose($open); //close the file
}else{
  echo "Not found";
}


/**  
  * ==========================Easily ============read the full content without opening readfile($myFiles);  // just use readfile
 */


$myFiles = "data2.txt"; //store the file then

if(file_exists($myFiles)){ //check file is exist 

  readfile($myFiles);  // just use readfile
  
}else{
  echo "Not found";
}



/**  
  * ==========================Easily read the full content   file_get_contents($myFiles);
 */


$myFiles = "data2.txt"; //store the file then

if(file_exists($myFiles)){ //check file is exist 

 $con=  file_get_contents($myFiles);  // just use readfile

 echo $con;
  
}else{
  echo "Not found";
}


/**  
  * ==========================Easily read the full content as a array of line  not a string
 */


$myFiles = "data2.txt"; //store the file then

if(file_exists($myFiles)){ //check file is exist 

 $con=  file($myFiles);  // same as readfile but it  but it returns the file contents as an array of lines, 
  foreach($con as $c){
      echo $c;
  }

  print_r($con);  //just to show by me
  
}else{
  echo "Not found";
}

/**
 * Hello sabbir from data2 Array      
(
    [0] => Hello sabbir from data2 
)

 */



 

$myFiles = "data2.txt"; //store the file then

readfile($myFiles);  // no need to add echo or anything

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

echo file_get_contents($myFiles); //need to echo and it returend 

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$a=  file_get_contents($myFiles); //need to echo and it returend 
echo $a;



$a = file($myFiles);//need to store then use for each 
foreach($a as $b){
  echo $b;
}




/**  
  * ===========W R I T E=============== Write  the full content on txt file
 */


$myFiles = "data2.txt"; //store the file then

if(file_exists($myFiles)){
    $open = fopen($myFiles,"w");

    $txt = "Hello Bangladesh ";

    $write= fwrite($open, $txt);

    fclose($open);
    echo "Data written to the file successfully.";
    
}




/**  
  * ==========================write data with the old data 
 */

$myFiles = "sam.txt"; //write data with the old data 


if(file_exists($myFiles)){

  $read = file_get_contents($myFiles);

    $open = fopen($myFiles,"w");

    $txt = "\nHello Bangladesh ";

    $write= fwrite($open, $read);
    $write= fwrite($open, $txt);

    fclose($open);
    echo "Data written to the file successfully.";
    
}




/**  
  * ==========================write data with  using            -          r+ 
 */

$myFiles = "sam.txt"; //write data with the old data 

// r+ means => write and read both mood e open hbe ar file ar previous content theke jabe 
$fopen = fopen($myFiles, "r+");  //full line porbe new line na pawa obdi then ami fwrite use kore likte parbw cursor ta jekane thakbe oikanei lekha thakbe 

$read = fgets($fopen);
echo $read;

fwrite($fopen, "Sabbir");
$read = fgets($fopen);
echo $read;

/**
Hello Bangladesh from Dhaka 
Hello Bangladesh From Rangpur

// then full line pore new line pawar por oikane fist space pawa obdi lekha kete then replace kore lekbe 

Hello Bangladesh from Dhaka  
SabbirBangladesh From Rangpur

//Hello er jaygy sabbir
 */

// fseek / rewind used to make it from the begning 
fseek($fopen,0);//suru te niye jabw

fwrite($fopen, "This is new line"); // ei kane joto character ase oitukui lekha hbe 




/**  
  * ==========================  W+
 */

$myFiles = "sam.txt"; //write data with the old data 

// W+ means => write but remove the previous text and set the courser into end so nothing will print or echo
$fopen = fopen($myFiles, "w+");  

fwrite($fopen, "Sabbir");
fseek($fopen,0);//suru te niye jabw

$a = fgets($fopen);

echo $a;






/**  
  * ==========================Easily Write  the full content on txt file  but it will overwrite 
 */


$myFiles = "data2.txt"; //store the file then
$txts = "Hello Bangladesh New way to write ------------ ";

if(file_exists($myFiles)){


    $txt = "Hello Bangladesh New way to write ";

    $write= file_put_contents($myFiles, $txts) or die("ERROR: Cannot write the file.");


    echo "Data written to the file successfully.";
    
}


/**  
  * ==========================Easily Write but not overwrite  the full content on txt file using FILE_APPEND
 */


$myFiles = "data2.txt"; //store the file then
$txts = "This is ne wline ok  ------------ ";

if(file_exists($myFiles)){


    $txt = "Hello Bangladesh New way to write ";

    $write= file_put_contents($myFiles, $txts, FILE_APPEND | LOCK_EX) or die("ERROR: Cannot write the file.");  // LOCK _EX used to loock file so if i write on that time oters can not write here


    echo "Data written to the file successfully.";
    
}



/**  
  * ==========================Rename the files easily by using rename
 */


$myFiles = "new2.txt"; //store the file then
$txts = "This is ne wline ok  ------------ ";

if(file_exists($myFiles)){

  rename($myFiles,"new4.txt");
    
}else{
  echo "ERROR: File cannot beFound.";
}






/**  
  * ==========================Rename the files
 */


$myFiles = "new.txt"; //store the file then
$txts = "This is ne wline ok  ------------ ";

if(file_exists($myFiles)){

    if(rename($myFiles,"new2.txt")){
      echo "File renamed successfully.";
    }else{
      echo "ERROR: File cannot be renamed.";
  }
    
}else{
  echo "ERROR: File cannot beFound.";
}




/**  
  * ==========================Remove the files totally
 */


$myFiles = "new4.txt"; //store the file then


if(file_exists($myFiles)){

  unlink($myFiles);
  echo"removed files";
    
}else{
  echo "ERROR: File cannot beFound.";
}

// fgetc()	Reads a single character at a time.
// fgets()	Reads a single line at a time.
// fgetcsv()	Reads a line of comma-separated values.
// filetype()	Returns the type of the file.
// feof()	Checks whether the end of the file has been reached.
// is_file()	Checks whether the file is a regular file.
// is_dir()	Checks whether the file is a directory.
// is_executable()	Checks whether the file is executable.
// realpath()	Returns canonicalized absolute pathname.
// rmdir()	Removes an empty directory.


/**
 * to find the current path
 */
echo getcwd(); // to find the current path; C:\Users\SABBIR\Desktop\Php



$myFiles = "sam.txt"; //store the file then

if(is_readable($myFiles) && file_exists($myFiles)){ 
  $a = file_get_contents($myFiles);
  echo $a;
}else{
  echo "Not Found";
}






/**  
  * ==========================  Arry data write on a text file 
 */

$myFiles = "sam.txt"; //write data with the old data 

$student = array(
  array(
    'fname'=>'Md Sabbir',
    'lname'=>'Sam',
    'mobile' => '01307107409',
    'district'=>'Dhaka'
  ),

  array(
    'fname'=>'Robin',
    'lname'=>'Hossain',
    'mobile' => '03554627107409',
    'district'=>'Khulna'
  ),

  array(
    'fname'=>'Sharihar',
    'lname'=>'Hasan',
    'mobile' => '0457107409',
    'district'=>'Dinajpur'
  ),

);

$open = fopen($myFiles, "w");
foreach($student as $std){
  $save=  sprintf("%s %s %s %s \n", $std['fname'], $std['lname'] , $std['mobile'], $std['district']); // must use sprintf not printf
  $write = fwrite($open, $save);
}



// end -------------------------------------------------------------------


// nOW READ ALL FROM THE FILE 
$open = fopen($myFiles,"r");

while($read = fgets($open)){
  $data = explode(" ",$read); // karon file e space diye save kora 
  printf("Name = %s%s\nMobile = %s\nDistrict = %s\n\n", $data[0],$data[1],$data[2],$data[3]);

  // printf("FName = %s\n", $std[0]);
  // printf("LName = %s\n", $std[1]);
  // printf("mobile = %s\n", $std[2]);
  // printf("district = %s\n", $std[3]);

}
fclose($open);

/**
Name = SabbirSam       
Mobile = 01307107409   
District = Dhaka       

Name = RobinHossain    
Mobile = 03554627107409
District = Khulna      

Name = ShariharHasan   
Mobile = 0457107409    
District = Dinajpur  
 * 
 */


 
// Minimized   Way Using CSV-------------------------------------------------------------------


$myFiles = "sam.txt"; //write data with the old data 

$student = array(
  array(
    'fname'=>'Sabbir',
    'lname'=>'Sam',
    'mobile' => '01307107409',
    'district'=>'Dhaka'
  ),

  array(
    'fname'=>'Robin',
    'lname'=>'Hossain',
    'mobile' => '03554627107409',
    'district'=>'Khulna'
  ),

  array(
    'fname'=>'Sharihar',
    'lname'=>'Hasan',
    'mobile' => '0457107409',
    'district'=>'Dinajpur'
  ),

);

$open = fopen($myFiles, "w");
foreach($student as $std){
  fputcsv($open, $std);
}




// now read array file from the data 

$open = fopen($myFiles,"r");

while($read = fgetcsv($open)){

  printf("Name = %s %s\nMobile = %s\nDistrict = %s\n\n", $read[0],$read[1],$read[2],$read[3]);


}
fclose($open);

/**
 * 
 * Name = Sabbir Sam
Mobile = 01307107409
District = Dhaka

Name = Robin Hossain
Mobile = 03554627107409
District = Khulna

Name = Sharihar Hasan
Mobile = 0457107409
District = Dinajpur

 */


 /**  
  * ==========================  Arry add new data in the end
 */

$myFiles = "sam.txt"; //write data with the old data 

$student = array(
    'fname'=>'Newadd',
    'lname'=>'New',
    'mobile' => '01307107409',
    'district'=>'NewDhaka'

);

// now read array file from the data 

$open = fopen($myFiles,"a");

fputcsv($open, $student);

fclose($open);


/**  
  * ==========================  Arry delete data
 */

$myFiles = "sam.txt"; //write data with the old data 


$open = file($myFiles);
print_r($open);

/**
 * 
 Array
(
    [0] => Sabbir,Sam,01307107409,Dhaka

    [1] => Robin,Hossain,03554627107409,Khulna

    [2] => Sharihar,Hasan,0457107409,Dinajpur

    [3] => Newadd,New,01307107409,NewDhaka

)
 * 
 */
// now delete so 
unset($open[2]);

$fp = fopen($myFiles, "w");
foreach($open as $o){
  fwrite($fp,$o);
} 


/**  
  * ==========================  Save data in seriliazed way.
 */

$myFiles = "sam.txt"; //write data with the old data 

$student = array(
  array(
    "fname"=>"Sabbir",
    "lname"=>"Ahmed",
    "phn"=>"01307107409",
    "location"=>"Dhaka",
  ),
  array(
    "fname"=>"Rakib",
    "lname"=>"Hasan",
    "phn"=>"01797823947",
    "location"=>"Dhaka",
  ),
  array(
    "fname"=>"Jani",
    "lname"=>"mani",
    "phn"=>"01797823947",
    "location"=>"Dhaka",
  )
  

);


$data = serialize($student);
file_put_contents($myFiles, $data);

// or 


$data = serialize($student);
file_put_contents($myFiles, $data, FILE_APPEND | LOCK_EX);


/**
 * a:3:{i:0;a:4:{s:5:"fname";s:6:"Sabbir";s:5:"lname";s:5:"Ahmed";s:3:"phn";s:11:"01307107409";
 * s:8:"location";s:5:"Dhaka";}i:1;a:4:{s:5:"fname";s:5:"Rakib";s:5:"lname";s:5:"Hasan";
 * s:3:"phn";s:11:"01797823947";s:8:"location";s:5:"Dhaka";}i:2;a:4:{s:5:"fname";
 * s:4:"Jani";s:5:"lname";s:4:"mani";s:3:"phn";s:11:"01797823947";s:8:"location";s:5:"Dhaka";}}
 */


 
/**  
  * ==========================  Read data in unseriliazed way.
 */

$myFiles = "sam.txt"; //write data with the old data 

$student = array(
  array(
    "fname"=>"Sabbir",
    "lname"=>"Ahmed",
    "phn"=>"01307107409",
    "location"=>"Dhaka",
  ),
  array(
    "fname"=>"Rakib",
    "lname"=>"Hasan",
    "phn"=>"01797823947",
    "location"=>"Dhaka",
  ),
  array(
    "fname"=>"Jani",
    "lname"=>"mani",
    "phn"=>"01797823947",
    "location"=>"Dhaka",
  )
  

);



$read = file_get_contents($myFiles);
$data = unserialize($read);
print_r($data);

/**
 * 
 Array
(
    [0] => Array
        (
            [fname] => Sabbir
            [lname] => Ahmed
            [phn] => 01307107409
            [location] => Dhaka
        )

    [1] => Array
        (
            [fname] => Rakib
            [lname] => Hasan
            [phn] => 01797823947
            [location] => Dhaka
        )

    [2] => Array
        (
            [fname] => Jani
            [lname] => mani
            [phn] => 01797823947
            [location] => Dhaka
        )

)
 */


 
/**  
  * ==========================  delete data in unseriliazed way.
 */

$myFiles = "sam.txt"; //write data with the old data 


$read = file_get_contents($myFiles);
$data = unserialize($read);
print_r($data);

// to delete 
unset($data[1]);
$newData = serialize($data);

file_put_contents($myFiles, $newData, LOCK_EX);


/**  
  * ==========================  JSON Data file save
 */

$myFiles = "sam.txt"; //write data with the old data 

$student = array(
  array(
    "fname"=>"Sabbir",
    "lname"=>"Ahmed",
    "phn"=>"01307107409",
    "location"=>"Dhaka",
  ),
  array(
    "fname"=>"Rakib",
    "lname"=>"Hasan",
    "phn"=>"01797823947",
    "location"=>"Dhaka",
  ),
  array(
    "fname"=>"Jani",
    "lname"=>"mani",
    "phn"=>"01797823947",
    "location"=>"Dhaka",
  )
  
);

/**
 * // save data as a json 
 */

$data = json_encode($student);
$save = file_put_contents($myFiles, $data, LOCK_EX); 


/**
 * // Read data from a json 
 */

$data = file_get_contents($myFiles);
// $read  = json_decode($data); //it will print as a object
$read  = json_decode($data, true); // if used then it will print as a array
print_r($read);
echo $read[0]['fname'];





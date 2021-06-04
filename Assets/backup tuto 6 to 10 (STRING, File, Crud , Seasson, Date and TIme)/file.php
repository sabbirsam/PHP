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
  * ==========================Easily Write  the full content on txt file
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

    $write= file_put_contents($myFiles, $txts, FILE_APPEND) or die("ERROR: Cannot write the file.");


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



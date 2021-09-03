<?php


 /**
  * Directory Iterator  Using SPL libarary class : -14.5
  */

//   ./ = current directory 
//   ../ = parent directory 

$dir = new DirectoryIterator("./"); // give the path

// now use foreach 

foreach($dir as $files){
    echo $files->getPathname()."\n";
}

/**
 .\.
.\..
.\.git
.\.idea
.\All Main files Inside Asstets backup.txt
.\demo.html
.\demo.php
.\demo1.php
.\demo2.php
.\function.php
.\Login
.\Login 2
.\project
.\sam.txt
.\session
.\Tutorial and code review
 */


  /**
  * Directory Iterator  Using SPL libarary class : -14.5=============================================
  new DirectoryIterator("./");
  getpathname()

  */

$dir = new DirectoryIterator("./"); // give the path

// now use foreach 

foreach($dir as $files){

    if($files->isDot()){
        continue; // means dot thakle seta skip korbe
    }

    if($files->isDir()){  // if its a directory
        echo $files->getPathname()."\n";
    }else{

        echo $files->getPathname().":" . $files->getSize()."\n";  // to get the file size
    }
}

/**
 * Its has a limitation , its can be print inside the folder files, as recursive can not be used here
 .\.git
.\.idea
.\All Main files Inside Asstets backup.txt:38
.\demo.html:6402
.\demo.php:571
.\demo1.php:165
.\demo2.php:38
.\function.php:27
.\Login
.\Login 2
.\project
.\sam.txt:219
.\session
.\Tutorial and code review
 */

// so to fix use 

 /**
  * Directory Iterator  Using SPL libarary class
  */

  $dir = new RecursiveDirectoryIterator("./"); // give the path 
  // now use it on Iterator 
  $files = new RecursiveIteratorIterator($dir);
  
  foreach($files as $file){
      echo $file."\n";
  }
  
  
  
  /**
   .\.
  .\..
  .\.git\.
  .\.git\..
  .\.git\COMMIT_EDITMSG
  .\.git\config
  .\.git\description
  delete some of them .................
  .\session\t2\session.php
  .\session\t2\sessiont0.php
  .\Tutorial and code review\.
  .\Tutorial and code review\..
  .\Tutorial and code review\Ajax\.
  .\Tutorial and code review\Ajax\..
  .\Tutorial and code review\Ajax\demo.html
  .\Tutorial and code review\Ajax\demo.php
  .\Tutorial and code review\Ajax\demo1.php
  .\Tutorial and code review\Ajax\demo2.php
  .\Tutorial and code review\Ajax\function.php
  .\Tutorial and code review\backup 11 Class and object\.
  .\Tutorial and code review\backup 11 Class and object\..
  .\Tutorial and code review\backup 11 Class and object\demo.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\.
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\..
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Chap 1 Basic PHP backup.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Chap 2 Function Backup.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Chap 3 array.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\checkbox_and_show.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\checkbox_multiple_checkbox_minimize_way__show_use_function.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\checkbox_multiple_checkbox_show_use_function.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\file_html.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\file_html_select_according_file_type.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\file_html_select_according_file_type_OPTIMIZE.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\file_multiple_input_take.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\get_post_ternary_nullcollese_operator.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\php_info.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\random_number_decode_encode_all_code_together.ctp
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\random_number_generate.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\random_number_match_and_show_decode.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Sanitization.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field_multiple_data_with_remain_select.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field_multiple_select.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field_multiple_select_with data_show.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field_single_select.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_multiple_data.php
  .\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Show_data_field_itself.php
  .\Tutorial and code review\backup tuto 11 Exception try catch finally\.
  .\Tutorial and code review\backup tuto 11 Exception try catch finally\..
  .\Tutorial and code review\backup tuto 11 Exception try catch finally\expression.php
  .\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\.
  .\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\..
  .\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\cookie.php
  .\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\date-time.php
  .\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\file.php
  .\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\session-part1.php
  .\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\String -part 1.php
  .\Tutorial and code review\File\.
  .\Tutorial and code review\File\..
  .\Tutorial and code review\File\Capture3.png
  .\Tutorial and code review\File\screencapture-blueprint-nu-2021-05-15-09_14_12.png
  .\Tutorial and code review\File\screencapture-decodeme-org-uk-the-science-2021-05-18-15_36_57.png
  .\Tutorial and code review\FileSystem and directory\.
  .\Tutorial and code review\FileSystem and directory\..
  .\Tutorial and code review\FileSystem and directory\directoryItterator.php
  .\Tutorial and code review\FileSystem and directory\file.php
  .\Tutorial and code review\Trait\.
  .\Tutorial and code review\Trait\..
  .\Tutorial and code review\Trait\trait.php
   */





    /**
  * Directory Iterator  Using SPL libarary class
  */

$dir = new RecursiveDirectoryIterator("./"); // give the path 
// now use it on Iterator 
$files = new RecursiveIteratorIterator($dir);

foreach($files as $file){
    echo $file->getFileName()."\n";  // here getFilename called
}

/**
 * main
.
..
.
..
.gitignore
modules.xml
Php.iml
php.xml
Delete some portion --------->>>>>>>>>>>>>>>>>
demo.php
.
..
Chap 1 Basic PHP backup.php
Chap 2 Function Backup.php
Chap 3 array.php
checkbox_and_show.php
checkbox_multiple_checkbox_minimize_way__show_use_function.php
checkbox_multiple_checkbox_show_use_function.php
file_html.php
file_html_select_according_file_type.php
file_html_select_according_file_type_OPTIMIZE.php
file_multiple_input_take.php
get_post_ternary_nullcollese_operator.php
php_info.php
random_number_decode_encode_all_code_together.ctp
random_number_generate.php
random_number_match_and_show_decode.php
Sanitization.php
select_field.php
select_field_multiple_data_with_remain_select.php
select_field_multiple_select.php
select_field_multiple_select_with data_show.php
select_field_single_select.php
select_multiple_data.php
Show_data_field_itself.php
.
..
expression.php
.
..
cookie.php
date-time.php
file.php
session-part1.php
String -part 1.php
.
..
Capture3.png
screencapture-blueprint-nu-2021-05-15-09_14_12.png
screencapture-decodeme-org-uk-the-science-2021-05-18-15_36_57.png
.
..
directoryItterator.php
file.php
.
..
trait.php
 */


  /**
  * Directory Iterator  Using SPL libarary class
  */

$dir = new RecursiveDirectoryIterator("./", RecursiveDirectoryIterator::SKIP_DOTS); // give the path 
// now use it on Iterator 
$files = new RecursiveIteratorIterator($dir);

foreach($files as $file){
    echo $file->getPath().DIRECTORY_SEPARATOR. $file->getFileName()."\n";
}
/**
 .\Login 2\index.php
.\Login 2\indexnohash.php
.\project\data\db.txt
.\project\inc\function.php
.\project\inc\guideline save.html
.\project\inc\template\nav.php
.\project\index.php
.\sam.txt
.\session\session.php
.\session\sessiont0.php
.\session\t1\session.php
.\session\t1\sessiont0.php
.\session\t2\session.php
.\session\t2\sessiont0.php
.\Tutorial and code review\Ajax\demo.html
.\Tutorial and code review\Ajax\demo.php
.\Tutorial and code review\Ajax\demo1.php
.\Tutorial and code review\Ajax\demo2.php
.\Tutorial and code review\Ajax\function.php
.\Tutorial and code review\backup 11 Class and object\demo.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Chap 1 Basic PHP backup.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Chap 2 Function Backup.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Chap 3 array.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\checkbox_and_show.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\checkbox_multiple_checkbox_minimize_way__show_use_function.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\checkbox_multiple_checkbox_show_use_function.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\file_html.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\file_html_select_according_file_type.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\file_html_select_according_file_type_OPTIMIZE.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\file_multiple_input_take.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\get_post_ternary_nullcollese_operator.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\php_info.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\random_number_decode_encode_all_code_together.ctp
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\random_number_generate.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\random_number_match_and_show_decode.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Sanitization.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field_multiple_data_with_remain_select.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field_multiple_select.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field_multiple_select_with data_show.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_field_single_select.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\select_multiple_data.php
.\Tutorial and code review\backup tuto 1 to 5 (basic, function,array,html,data scrumble)\Show_data_field_itself.php
.\Tutorial and code review\backup tuto 11 Exception try catch finally\expression.php
.\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\cookie.php
.\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\date-time.php
.\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\file.php
.\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\session-part1.php
.\Tutorial and code review\backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)\String -part 1.php
.\Tutorial and code review\File\Capture3.png
.\Tutorial and code review\File\screencapture-blueprint-nu-2021-05-15-09_14_12.png
.\Tutorial and code review\File\screencapture-decodeme-org-uk-the-science-2021-05-18-15_36_57.png
.\Tutorial and code review\FileSystem and directory\directoryItterator.php
.\Tutorial and code review\FileSystem and directory\file.php
.\Tutorial and code review\Trait\trait.php

 */


  /**
  * Total Directory size */

  $size = 0;

$dir = new RecursiveDirectoryIterator("./", RecursiveDirectoryIterator::SKIP_DOTS); // give the path 
// now use it on Iterator 
$files = new RecursiveIteratorIterator($dir);

foreach($files as $file){
    if($file->isFile()){
        $size += $file->getSize();
    }
    // echo $file->getPath().DIRECTORY_SEPARATOR. $file->getFileName()."\n";
}

echo "Directory size {$size} bytes";
// Directory size 7235541 bytes


 /**
  * Path info
  1. Base name: echo pathinfo(FILENAME, PATHINFO_BASENAME) =>  demo.html
  2. extension: echo pathinfo(FILENAME, PATHINFO_EXTENSION) =>  .html
  3. directory path: echo pathinfo(FILENAME, PATHINFO_DIRNAME)=>  C:/Users/sabbir/Desktop/Php/
  4. File Name: echo pathinfo(FILENAME, PATHINFO_FILENAME)
  5. Current directory :   echo pathinfo( pathinfo(FILENAME, PATHINFO_DIRNAME),  PATHINFO_BASENAME); //Php =>   name: =>Php
  */

  const FILENAME= "C:/Users/sabbir/Desktop/Php/demo.html";

  echo pathinfo(FILENAME, PATHINFO_BASENAME)."\n"; // demo.html
  echo pathinfo(FILENAME, PATHINFO_DIRNAME)."\n"; //C:/Users/sabbir/Desktop/Php
  echo pathinfo(FILENAME, PATHINFO_FILENAME)."\n"; //demo
  echo pathinfo(FILENAME, PATHINFO_EXTENSION)."\n"; //html
  echo pathinfo( pathinfo(FILENAME, PATHINFO_DIRNAME),  PATHINFO_BASENAME); //Php






  
 /**
  * Copy directory and files
  */

function CopyDir($source , $destination){
    $source = rtrim($source,"/");
    $destination = rtrim($destination,"/");

    if(!file_exists($destination)){
        mkdir($destination);
        // mkdir($destination, 0777, true);
    }

    foreach(scandir($source) as $file){

        if("." != $file && ".." != $file){ 

            $sourcePath = $source.DIRECTORY_SEPARATOR.$file;
            $destinationpath = $destination.DIRECTORY_SEPARATOR.$file;

         
            if(is_dir($sourcePath)){

                CopyDir($sourcePath, $destinationpath);
                
            }elseif(is_file($sourcePath)){

                // then just copy 
                copy($sourcePath, $destinationpath);
            }
        }

    }

}

$source = getcwd().DIRECTORY_SEPARATOR."source/QBF";
$destination = getcwd().DIRECTORY_SEPARATOR."destination/QBF";

CopyDir($source, $destination);



 /**
  * Copy directory and files
  */

  function CopyDir($source , $destination){
    $filecount = 0;

    $source = rtrim($source,"/");
    $destination = rtrim($destination,"/");

    if(!file_exists($destination)){
        mkdir($destination);
        // mkdir($destination, 0777, true);
    }

    foreach(scandir($source) as $file){

        if("." != $file && ".." != $file){ 

            $sourcePath = $source.DIRECTORY_SEPARATOR.$file;
            $destinationpath = $destination.DIRECTORY_SEPARATOR.$file;

         
            if(is_dir($sourcePath)){

                $filecount += CopyDir($sourcePath, $destinationpath);  // file count 

            }elseif(is_file($sourcePath)){

                $filecount++;
                // then just copy 
                copy($sourcePath, $destinationpath);  // file count 
            }
        }

    }

    return $filecount;  //file count

}

$source = getcwd().DIRECTORY_SEPARATOR."source/QBF";
$destination = getcwd().DIRECTORY_SEPARATOR."destination/QBF";

$fc = CopyDir($source, $destination);
echo "Total {$fc} files have been copied";



// GLOB ============================================================================

 /**
  * GLOB function
  to show current directory: all   ./*
  */
  print_r(glob('./*')); // Its show all things 
  /**
   * Array
  (
      [0] => ./All Main files Inside Asstets backup.txt
      [1] => ./Login
      [2] => ./Login 2
      [3] => ./Tutorial and code review
      [4] => ./demo.html
      [5] => ./demo.php
      [6] => ./demo1.php
      [7] => ./demo2.php
      [8] => ./destination
      [9] => ./function.php
      [10] => ./project
      [11] => ./sam.txt
      [12] => ./session
      [13] => ./source
  )
   */
  
  print_r(glob('./*' , GLOB_ONLYDIR));
  /**
   * Array
  (
      [0] => ./Login
      [1] => ./Login 2
      [2] => ./Tutorial and code review
      [3] => ./destination
      [4] => ./project
      [5] => ./session
      [6] => ./source
  )
   */


  print_r(glob('./L*', GLOB_ONLYDIR)); // only specific letter start with L
  /**
   * Array
  (
      [0] => ./Login
      [1] => ./Login 2
  )
   */

  print_r(glob('./*o*', GLOB_ONLYDIR)); // only specific letter anywhere  with o will show 
  /**
   * 
  Array
  (
      [0] => ./Login
      [1] => ./Login 2
      [2] => ./Tutorial and code review
      [3] => ./destination
      [4] => ./project
      [5] => ./session
      [6] => ./source
  )
  
   */

  print_r(glob('./{L,p}*', GLOB_ONLYDIR| GLOB_BRACE)); //  which start with u or t, those only show
  /**
   * 
  Array
  (
      [0] => ./Login
      [1] => ./Login 2
      [2] => ./project
  )
  
  
   */

    /**
  * GLOB function
  to show current directory: all   ./*
  */
print_r(GLOB('./project/*/*')); // to show all from inside all directory
/**
 * Array
(
    [0] => ./project/data/db.txt
    [1] => ./project/inc/function.php
    [2] => ./project/inc/guideline save.html
    [3] => ./project/inc/template
)

 */
print_r(GLOB('./project/*/*php')); 
/**
Array
(
    [0] => ./project/inc/function.php
)


 */
  
 
print_r(GLOB('./destination/*/*[!.php]')); //.php sese nai segulo print korte
/**
Array
(
    [0] => ./destination/QBF/Inc
    [1] => ./destination/QBF/assets
    [2] => ./destination/QBF/composer.json
    [3] => ./destination/QBF/composer.lock
    [4] => ./destination/QBF/console-log.txt
    [5] => ./destination/QBF/gulpfile.js
    [6] => ./destination/QBF/languages
    [7] => ./destination/QBF/package-lock.json
    [8] => ./destination/QBF/package.json
    [9] => ./destination/QBF/readme.txt
    [10] => ./destination/QBF/templates
    [11] => ./destination/QBF/vendor
)

 */
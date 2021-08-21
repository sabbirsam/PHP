<?php

/**
 *   File System and directory==================
 */

 /**
  * Get the current directory
  */

echo getcwd(); 

// C:\Users\sabbir\Desktop\Php





 /**
  * Get the current directory filed and folder -> scandir
  */

  $dire=  scandir(getcwd());
    print_r($dire);
/**
 Array
(
    [0] => .
    [1] => ..
    [2] => .git
    [3] => .idea
    [4] => All Main files Inside Asstets backup.txt
    [5] => Login
    [6] => Login 2
    [7] => Tutorial and code review
    [8] => demo.html
    [9] => demo.php
    [10] => demo1.php
    [11] => demo2.php
    [12] => function.php
    [13] => project
    [14] => sam.txt
    [15] => session
)
 
 
 */



  /**
  * Get the current directory filed and folder  with identifying file and directory-> scandir
  //         .   -> is current director 
//         ..    -> parent directory 

  */

$dire=  scandir(getcwd());
foreach($dire as $dir){
    if("." != $dir && ".." != $dir){  // current and parent directory
        if(is_dir($dir)){
            echo "[FOLDER] :{$dir}\n";
        }else{
            echo "[FILES] :{$dir}\n";
        }
    }
}


/**

[FOLDER] :.git
[FOLDER] :.idea
[FILES] :All Main files Inside Asstets backup.txt
[FOLDER] :Login
[FOLDER] :Login 2
[FOLDER] :Tutorial and code review
[FILES] :demo.html
[FILES] :demo.php
[FILES] :demo1.php
[FILES] :demo2.php
[FILES] :function.php
[FOLDER] :project
[FILES] :sam.txt
[FOLDER] :session
 
 */


 
 /**
  * Count  current directory folder  scandir
  */



function CountDirectory($dir){
    $count = 0;
    $dire=  scandir($dir);
    foreach($dire as $dir){
        if("." != $dir && ".." != $dir){  // current and parent directory
            if(is_dir($dir)){
                $count++;
            }
        }
    }
    return $count;
    
}

echo CountDirectory(getcwd());
// 7 ta folder ase


/**
 * OPENDIR===========================================Start
 * 
 */

 /**
  * opendir uses 
  */


  $entries = opendir(getcwd());
  print_r($entries);
  //Resource id #6
  
  
  while($a = readdir($entries)){
      echo $a."\n";
  }
  /**
   ..
  .git
  .idea
  All Main files Inside Asstets backup.txt
  demo.html
  demo.php
  demo1.php
  demo2.php
  function.php
  Login
  Login 2
  project
  sam.txt
  session
  Tutorial and code review
   */

 /**
  * opendir uses 
  */


  $entries = opendir(getcwd());
  print_r($entries);
  //Resource id #6
  
  
  while(false!==($a = readdir($entries))){  // PHP suggest while use opendir then use false !== in readdir
      echo $a."\n";
  }
  /**
   ..
  .git
  .idea
  All Main files Inside Asstets backup.txt
  demo.html
  demo.php
  demo1.php
  demo2.php
  function.php
  Login
  Login 2
  project
  sam.txt
  session
  Tutorial and code review
   */
    


   
 /**
  * Using class to find directory and files from any folder
  */

  class Dir{
    public $directories=[];
    public $files = [];

    function __construct($path) {
      if(is_readable($path)){
        $entries = scandir($path);

        foreach($entries as $entry){
          
          if("."!=$entry && ".."!=$entry){  // current and parent directory
            if(is_dir($entry)){
              array_push($this->directories, $entry);
              // echo "[FOLDER] :{$entry}\n";
            }else{
              array_push($this->files, $entry);
              // echo "[FILES] :{$entry}\n";
            }
          }
        }

      }
    }


    /**
     * Get Directories
     */
    public function getDirectories()
    {
      return $this->directories;
    }


    /**
     * Get Directories
     */
    public function getFiles()
    {
      return $this->files;
    }


  }


  $directory = new Dir(getcwd());
  print_r($directory->getDirectories());
  /**
   Array
(
    [0] => .git
    [1] => .idea
    [2] => Login
    [3] => Login 2
    [4] => Tutorial and code review
    [5] => project
    [6] => session
)
   */


    /**
  * Using class to find directory and files from any folder
  */

  class Dir{
    public $directories=[];
    public $files = [];

    function __construct($path) {
      if(is_readable($path)){
        $entries = scandir($path);

        foreach($entries as $entry){
          
          if("."!=$entry && ".."!=$entry){  // current and parent directory
            if(is_dir($entry)){
              array_push($this->directories, $entry);
              // echo "[FOLDER] :{$entry}\n";
            }else{
              array_push($this->files, $entry);
              // echo "[FILES] :{$entry}\n";
            }
          }
        }

      }
    }

    /**
     * Get index to print files inside from another sub directory based on index
     */

    function getDirectory($index)
     {
       if(isset($this->directories[$index])){
          return new Dir($this->directories[$index]);
       }else{
         throw new Exception("Not found");
       }

       return false;
     }

     

    /**
     * Get Directories
     */
    public function getDirectories()
    {
      return $this->directories;
    }


    /**
     * Get Directories
     */
    public function getFiles()
    {
      return $this->files;
    }


  }


  $directory = new Dir(getcwd());
  print_r($directory->getDirectories());

  $oop = $directory->getDirectory(4);
  print_r($oop);


  
  class Dir{
    public $directories=[];
    public $files = [];

    function __construct($path) {
      if(is_readable($path)){
        $entries = scandir($path);

        foreach($entries as $entry){
          
          if("."!=$entry && ".."!=$entry){  // current and parent directory
            if(is_dir($path.DIRECTORY_SEPARATOR.$entry)){
              array_push($this->directories, $entry);
              // echo "[FOLDER] :{$entry}\n";
            }else{
              array_push($this->files, $entry);
              // echo "[FILES] :{$entry}\n";
            }
          }
        }

      }
    }

    /**
     * Get index to print files inside from another sub directory based on index
     */

    function getDirectory($index)
     {
       if(isset($this->directories[$index])){
          return new Dir($this->directories[$index]);
       }else{
         throw new Exception("Not found");
       }

       return false;
     }

     

    /**
     * Get Directories
     */
    public function getDirectories()
    {
      return $this->directories;
    }


    /**
     * Get Directories
     */
    public function getFiles()
    {
      return $this->files;
    }


  }


  $directory = new Dir(getcwd());
  print_r($directory->getDirectories());

  $oop = $directory->getDirectory(4);
  print_r($oop);


  /**
   Array
(
    [0] => .git
    [1] => .idea
    [2] => Login
    [3] => Login 2
    [4] => Tutorial and code review
    [5] => project
    [6] => session
)
Dir Object
(
    [directories] => Array
        (
            [0] => Ajax
            [1] => File
            [2] => FileSystem and directory
            [3] => Trait
            [4] => backup 11 Class and object
            [5] => backup tuto 1 to 5 (basic, function,array,html,data scrumble)
            [6] => backup tuto 11 Exception try catch finally
            [7] => backup tuto 6 to 10 (STRING, File, Crud , Seasson, Date and TIme)
        )

    [files] => Array
        (
            [0] => data.txt
            [1] => form.html
            [2] => form.php
            [3] => function.php
            [4] => index.php
        )

)
   */

// Delete and create folder and file ============================================================================

 /**
  * make directory : MKDIR   and remove directory : RMDIR
  */

  
  mkdir("SAM");
  rmdir("SAM");

   /**
  * Recurseively directory  create
  */


mkdir("SAM/D1/D2/D3", 0777, true); // file directory name - mode - recursive true




 /**
  * Recurseively directory  and delte with issue 
  */


  mkdir("SAM/D1/D2", 0777, true);
  file_put_contents("SAM/D1/D2/sam.txt", "Hello");
  
  sleep(5);
  
  rmdir("SAM");
  //rmdir(SAM): Directory not empty in C:\Users\sabbir\Desktop\Php\demo.php on line 14

  // FIX ---------- need unlink 

   /**
  * Recurseively directory remove
  */

mkdir("SAM",0777, true);
sleep(2);
file_put_contents("SAM/sam.txt","Hi");

sleep(8);
unlink("SAM/sam.txt");
sleep(2);
rmdir("SAM");



 /**
  * #PART 1
  * Make function to get the path and delete folder with file
  */

  mkdir("SAM",0777, true);
  file_put_contents("SAM/sam.txt","Hi");
  
  // DeleteDir("SAM");
  DeleteDir(getcwd().DIRECTORY_SEPARATOR."SAM");
  
  
  function DeleteDir($path){
      // print_r($path);//no need
      print_r(scandir( $path) );
  }
  /**
   (
      [0] => .
      [1] => ..
      [2] => sam.txt
  )
   */
  
  

 /**
  * Part 2
  Only work on file not any recursive folder
  * Make function to get the path and delete folder with file
  */

//   mkdir("SAM",0777, true);
//   file_put_contents("SAM/sam.txt","Hi");

DeleteDir(getcwd().DIRECTORY_SEPARATOR."SAM");


function DeleteDir($path){
    // print_r(scandir( $path) );

    $filesINPath = scandir($path);

    if(count($filesINPath) > 2){   // . current , .. parent so kicu na thakle 2ta ar thakle 2 er upore
        //has file so foreach kore file ber korbe 
        foreach($filesINPath as $file){
            if("."!=$file && ".."!=$file){
                $filesPath = $path.DIRECTORY_SEPARATOR.$file;
                unlink($filesPath);
            }
        }
    }

    rmdir($path); // no file so can be remove
    
}





 /**
  * Recursive file and folder delete
  */

  mkdir("SAM/d1/d2",0777, true);
  file_put_contents("SAM/sam.txt","Hi");
  file_put_contents("SAM/d1/sam.txt","Hi");
  file_put_contents("SAM/d1/d2/sam.txt","Hi");
  sleep(5);

DeleteDir(getcwd().DIRECTORY_SEPARATOR."SAM");


function DeleteDir($path){
    if(!is_readable()){
      return;
    }
    // print_r(scandir( $path) );

    $filesINPath = scandir($path);

    if(count($filesINPath) > 2){   // . current , .. parent so kicu na thakle 2ta ar thakle 2 er upore
        //has file so foreach kore file ber korbe 
        foreach($filesINPath as $file){
            if("."!=$file && ".."!=$file){

                $filesPath = $path.DIRECTORY_SEPARATOR.$file;
                if(is_dir($filesPath)){

                    DeleteDir($filesPath);  // Recursive call 
                }
                else{

                    unlink($filesPath);
                }
            }
        }
    }

    rmdir($path); // no file so can be remove
    
}


/**
  /**
   * http://permissions-calculator.org/
  * File Permissiom
  
directory   read(4) write(2)   execute(1) 
d            r        w          x       =  4+2+1 = 7

file    read(4)   write(2) execute(1) 
-         r           w      x       =  4+2+1 = 7
 */
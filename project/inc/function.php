<?php
// --------------------------------------file save korbw kothy r seta koi ase ki name e 
define('DB_NAME','./data/db.txt');  // use pwd to find current location then use the file store place to store

function seed(){
    $data = array(
        array(
            'id'=> 1,
            'fname'=> 'Sabbir', 
            'lname'=> 'Ahmed', 
            'roll'=>10
        ),
        array(
            'id'=> 2,
            'fname'=> 'Anik', 
            'lname'=> 'Ahmed', 
            'roll'=>12
        ),
        array(
            'id'=> 3,
            'fname'=> 'Samiya',  
            'lname'=> 'Mahbub',  
            'roll'=>13
        ),
        array(
            'id'=> 4,
            'fname'=> 'Sumiyya', 
            'lname'=> 'Hasn', 
            'roll'=>14
        ),
        array(
            'id'=> 5,
            'fname'=> 'Antik', 
            'lname'=> 'Rahul', 
            'roll'=>15
        ),
        array(
            'id'=> 6,
            'fname'=> 'Dark', 
            'lname'=> 'Sam', 
            'roll'=>16
        ),
    );

    $serilizedData = serialize($data); 

    file_put_contents( DB_NAME, $serilizedData, LOCK_EX);
}


// --------------------------------------------------------to show data 
function generateReport(){
    $serilizedData = file_get_contents(DB_NAME);
    $students = unserialize($serilizedData);

    ?>
<!-- now show data on a table first close the php then write table code then again start php -->
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Roll</th>

            <th width="25%">Action</th>

        </tr>

        <?php
        
        foreach($students as $student){
            ?>
                <tr>
                    <td>
                        <?php printf('%s', $student['id']);?>
                    </td>

                    <td>
                        <?php printf('%s %s', $student['fname'], $student['lname']);?>
                    </td>

                    <td>
                        <?php printf('%s', $student['roll']);?>
                    </td>

                    <td>
                        <?php printf('<a href="./index.php?task=edit&id=%s">Edit</a> | <a href="./index.php?task=delete&id=%s">Delete</a> ',$student['id'],$student['id'] );?>
                    </td>
                </tr>

            <?php

        }
        ?>
    </table>

    <?php

}



//------------------------------------ To add student
/**  without validation
function addStudent($fname, $lname, $roll){
    // this need to get the content 
    $serilizedData = file_get_contents(DB_NAME);
    $students = unserialize($serilizedData); 

    // add id so 0 theke start hole 0+1
    $newId= count($students)+1;


    $student = array(
        'id'=>$newId,
        'fname'=>$fname,
        'lname'=>$lname,
        'roll'=>$roll,
    );


    array_push($students, $student);

    // reserilize 
    $serilizedData = serialize($students);
    file_put_contents(DB_NAME, $serilizedData, LOCK_EX);

}

 */ 

//  with validation using roll 
function addStudent($fname, $lname, $roll){

    $found = false; 



    // this need to get the content 
    $serilizedData = file_get_contents(DB_NAME);
    $students = unserialize($serilizedData); 


    // check the roll 
    foreach($students as $_found){

        if($_found['roll'] == $roll){
            $found = true;
            break;
        }
       
    }


    if(!$found){

            // add id so 0 theke start hole 0+1
                $newId= count($students)+1;


                $student = array(
                    'id'=>$newId,
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'roll'=>$roll,
                );


                array_push($students, $student);

                // reserilize 
                $serilizedData = serialize($students);
                file_put_contents(DB_NAME, $serilizedData, LOCK_EX);

                return true;

    }else{
        return false;
    }

    

}


// -----------------------------------Edit student 
function getStudent($id){
    // this need to get the content 
    $serilizedData = file_get_contents(DB_NAME);
    $students = unserialize($serilizedData); 

    // check the roll  and ID 
    foreach($students as $student){

        if($student['id'] == $id){
            return $student;
        }
       
    }
    return false;

}


// Update Student 

function updateStudent($id, $fname, $lname, $roll){

    $found = false;
    // this need to get the content 
    $serilizedData = file_get_contents(DB_NAME);
    $students = unserialize($serilizedData); 

    // check the roll 
    foreach($students as $_found){

        if($_found['roll'] == $roll && $_found['id'] != $id){
            $found = true;
            break;
        }
       
    }

    if(!$found){
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll'] = $roll;
    
    
        $serilizedData = serialize($students);
        file_put_contents(DB_NAME, $serilizedData, LOCK_EX);
        
        return true;
    }else{
            return false;
    }


}
<?php 

require_once('./inc/function.php');

$info = '';
/*predefined data storing as a <a href="./index.php?task=seed"> Seed</a>   seed mode   so below code*/
// start 
$task = $_GET['task'] ?? 'report'; // task = task hole task r na hole report = <a href="./index.php?task=report"> All Student |</a>

$error = $_GET['error'] ?? '0';


if('seed' == $task){
    seed();
    $info = "Seeding is completed";
}
// End 


// now data add korbw, first sanitize kore nei
if(isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST, 'fname',FILTER_SANITIZE_STRING);
    $lname = filter_input(INPUT_POST, 'lname',FILTER_SANITIZE_STRING);
    $roll = filter_input(INPUT_POST, 'roll',FILTER_SANITIZE_NUMBER_INT);
    $id = filter_input(INPUT_POST, 'id',FILTER_SANITIZE_NUMBER_INT);


    if($id){
        //Update
        if($fname !='' && $lname !='' && $roll !=''){
            $result = updateStudent($id, $fname, $lname, $roll);
            if($result){
                // form resubmission avoid korte
                header('location: ./index.php?task=report');
            }else{
                // header('location: ./index.php?task=report&error=1');
                $error = 1; 
            }
        }


    }else{
        // now save the data if not empty 
            if($fname !='' && $lname !='' && $roll !=''){
                // now call the function which has all the code to save data 
            $result =  addStudent($fname, $lname, $roll);

            if($result){
                    // form resubmission avoid korte
                    header('location: ./index.php?task=report');
            }else{
                // header('location: ./index.php?task=report&error=1');
                $error = 1; 
            }
            }

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

<!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

<!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <title>Document</title>
    <style>
    body{
        margin: top 30px;
    }

    blockquote {
    border-left: 0.3rem solid #ff0c0c;
    color: red;
    box-shadow: 3px 2px 12px 0px
}
    
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">

         <h2>Project</h2>
         <p> This is a simple crud project</p>

         <?php include_once ('./inc/template/nav.php'); ?>
          <hr/>

         <?php
            if($info != ''){
                echo "<p>{$info}</p>";
               
            }
         ?>


        </div>


    </div>

    <!-- Same roll error check  -->

    <?php if ('1' == $error): ?>


            <div class="row">
                <div class="column column-60 column-offset-20">
               
                <blockquote>
                
                Error,  Duplicate roll=<?php echo $roll; ?> found
                
                </blockquote>
                </div>
            </div>

    <?php endif;  ?>



    <!-- Data show  -->

    <?php if ('report' == $task): ?>


            <div class="row">
                <div class="column column-60 column-offset-20">
                <?php generateReport(); ?>
            
                </div>


            </div>

    <?php endif;  ?>


    <!--Add New Data   -->

    <?php if ('add' == $task): ?>


            <div class="row">
                <div class="column column-60 column-offset-20">
                <form  action="./index.php?task=add" method="POST">

                        <label for="fname">First Name:</label>
                        <input type="text" placeholder="Enter First Name" id="fname" name="fname" value="<?php echo $fname; ?>" >

                        <label for="lname">Last Name:</label>
                        <input type="text" placeholder="Enter Last Name" id="lname" name="lname" value="<?php echo $lname; ?>">

                        <label for="roll">Roll:</label>
                        <input type="number" placeholder="Enter Last Name" id="roll" name="roll"value="<?php echo $roll; ?>">
                    

                        <button type="submit" class="button-primary" name="submit">Submit</button>

                </form>
                </div>


            </div>

    <?php endif;  ?>


    <!--Add New Data   -->

    <?php 
    if ('edit' == $task ): 
        $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_STRING); //Id ta ber korlam

        $student = getStudent($id);// function 

        if($student):
        
     ?>
            <div class="row">
                <div class="column column-60 column-offset-20">
                <form  action="" method="POST">

                        <input type="hidden" value="<?php echo $id?>" name="id">

                        <label for="fname">First Name:</label>
                        <input type="text" placeholder="Enter First Name" id="fname" name="fname" value="<?php echo $student['fname']; ?>" >

                        <label for="lname">Last Name:</label>
                        <input type="text" placeholder="Enter Last Name" id="lname" name="lname" value="<?php echo $student['lname']; ?>">

                        <label for="roll">Roll:</label>
                        <input type="number" placeholder="Enter Last Name" id="roll" name="roll"value="<?php echo $student['roll']; ?>">
                    

                        <button type="submit" class="button-primary" name="submit">Update</button>

                </form>
                </div>


            </div>


    <?php 
    
    endif;  
    endif;   
    ?>
    
</div>
    
</body>
</html>
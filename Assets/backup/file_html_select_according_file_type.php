<?php
//include_once "../Assets/function.php";   //used for multiple checkbox
if($_FILES['photo']){
    if($_FILES['photo']['type'] == 'image/png' || $_FILES['photo']['type'] == 'image/jpg' || $_FILES['photo']['type'] == 'image/jpeg'){
        move_uploaded_file($_FILES['photo']['tmp_name'],"../Assets/File/".$_FILES['photo']['name']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- You should properly set the path from the main file. -->
    <title>Document</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <div>
                <h1>
                    <!--issue check  ki ki file ase ta dekha jabe-->
                    <pre>
                        <p>
                            <?php
                            print_r($_POST);
                            print_r($_FILES);
                            ?>
                        </p>
                    </pre>


                    <?php

                    ?>

                </h1>
            </div>

            <form method="POST" enctype="multipart/form-data">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname">

                <label for="lname">Last Name</label>
                <input type="text" id="lname"  name="lname">

                <label for="photo">First Name</label>
                <input type="file" id="photo"  name="photo">

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

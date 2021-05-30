<?php
include_once "../Assets/function.php";   //used for multiple checkbox

$country=array("Dhaka","Khulna","Rangpur","Barishal");

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
        <!--      ============================================  select field-->
        <div class="column column-60 column-offset-20">
            <div class="row">
                <div>

                </div>

                <form method="POST">

                    <label for="country">Select Country</label>
                    <select id="country" name="usethis">
                        <option value="" disabled selected>Select Division</option>

                        <?php selectFirlds($country);?>

                    </select>

                    <input type="submit">
                </form>
            </div>
            <p>
                <?php
                if(isset($_POST['usethis']) && $_POST['usethis'] !=''){
//                    printf("You select : %s",$_POST['usethis']);  //this is not sanitize
                    printf("You select : %s",filter_input(INPUT_POST,'usethis',FILTER_SANITIZE_STRING));  //this is sanitize
                }
                ?>
            </p>
        </div>
    </div>
</div>

</body>
</html>

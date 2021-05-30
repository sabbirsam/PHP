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
                    <select style="height: 200px;" id="country" name="country[]" multiple> <!-- //use array country[] insted of usethis for multiple select-->
                        <option value="" disabled selected>Select Division</option>

                        <?php selectFirlds($country);?>

                    </select>

                    <input type="submit">
                </form>
            </div>
            <p>
                <?php
                //                print_r($_POST);


                /* single select er jonno*//* single select er jonno*/
                /*if(isset($_POST['usethis']) && $_POST['usethis'] !=''){
//                    printf("You select : %s",$_POST['usethis']);  //this is not sanitize
                    printf("You select : %s",filter_input(INPUT_POST,'usethis',FILTER_SANITIZE_STRING));  //this is sanitize
                }*/

                /*multiple select*//*multiple select*//*multiple select*//*multiple select*//*multiple select*//*multiple select*/

                //                $scountry = $_POST['country'];  //normal no sanitization
                //                $scountry = isset($_POST['country']) ? $_POST['country'] : array();  //normal validation
                //                $scountry = $_POST['country'] ?? array();  //optimize with null collese validation

                $scountry = filter_input(INPUT_POST,'country',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);  //now sanitize
                //                print_r($scountry);
                if(count($scountry) >0 ){
                    echo "You select:" .join(", ",$scountry);
                }
                ?>
            </p>
        </div>
    </div>
</div>

</body>
</html>

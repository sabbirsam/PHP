<?php
//include_once "../Assets/function.php";   //used for multiple checkbox

function selectFirlds($options){
    foreach ($options as $option){
        printf("<option value='%s'>%s</option>",strtolower($option), ucwords($option));
    }
}
$country= array("Bangladesh", "japan","saudi","Pakistan");
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
                    <?php
                    //                    print_r($_POST['country']);
                    $acountry= filter_input(INPUT_POST,'country',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);
                    if(count($acountry) >0){
                        echo "you have selected: ". join(", ",$acountry);
                    }

                    /* if(isset($_POST['country']) && $_POST['country'] !=''){
                         printf("You select : %s",filter_input(INPUT_POST,'country',FILTER_SANITIZE_STRING));  //this is not sanitize
                     }*/
                    ?>
                </h1>
            </div>

            <form method="POST">
                <label for="country">Select your Country</label>
                <select id="country" name="country[]" multiple>
                    <option style="height: 25px;" value="" disabled selected>Select Division</option>
                    <?php selectFirlds($country);?>
                </select>
                <input type="submit">
            </form>
        </div>
    </div>
</div>

</body>
</html>

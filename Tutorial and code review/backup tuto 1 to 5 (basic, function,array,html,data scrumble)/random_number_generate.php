<?php
//include_once "../Assets/function.php";   //used for multiple checkbox

function displayKey($key){
    printf("value = '%s'", $key);
}


$task = 'encode';  // take a mood
if (isset($_GET['task']) && $_GET['task'] != ''){
    $task = $_GET['task'];
}

$key = 'abcdefghijklmnopqrstuvwxyz1234567890';

if('key' == $task){
    $key_original = str_split($key);  //jehetu kono faka space nai $key gulo te so string to array banate ami str_split use korlam
    /* print_r($key_original);*//*
Array ( [0] => a [1] => b [2] => c [3] => d [4] => e [5] => f [6] => g [7] => h [8] => i [9] => j [10] => k [11] => l [12] => m [13] => n [14] => o [15] => p [16] => q [17] => r [18] => s [19] => t [20] => u [21] => v [22] => w [23] => x [24] => y [25] => z [26] => 1 [27] => 2 [28] => 3 [29] => 4 [30] => 5 [31] => 6 [32] => 7 [33] => 8 [34] => 9 [35] => 0 )
*/
    shuffle($key_original);
    $key = join('',$key_original);

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
        textarea {
            min-height: 16.5rem;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">

            <h2>Data Scrambler</h2>
            <p>
                <a href="./form.php?task=encode">Encode</a>
                <a href="./form.php?task=decode">Decode</a>
                <!--                <a href="javascript:window.location.href=window.location.href">Generate Key</a>-->  <!--//use this js code to relaod-> javascript:window.location.href=window.location.href-->
                <a href="./form.php?task=key">Generate Key</a>  <!--//  or use this way-> ./ mane ami Assets folder er vitore then form.php?task=key
            </p>-->
        </div>
    </div>

    <div class="row">
        <div class="column column-60 column-offset-20">

            <form method="POST" enctype="multipart/form-data">
                <label for="key">Key</label>
                <input type="text" id="key" name="key" <?php displayKey($key);?>>

                <label for="data">Data</label>
                <textarea  id="data"  name="data"></textarea>

                <label for="result">Result</label>
                <textarea  id="result"  name="result"></textarea>

                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

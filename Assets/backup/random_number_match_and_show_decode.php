<?php
include_once "../Assets/function.php";   //used for multiple checkbox


$task = 'encode';  // take a mood give any value example encode, now encode is empty so it has no value
if (isset($_GET['task']) && $_GET['task'] != ''){
    $task = $_GET['task'];
}

$key = 'abcdefghijklmnopqrstuvwxyz1234567890';



if('key' == $task){
    $key_original = str_split($key);  //jehetu kono faka space nai $key gulo te so string to array banate ami str_split use korlam
    shuffle($key_original);
    $key = join('',$key_original);

}elseif (isset($_POST['key']) && $_POST['key'] != ''){  //take method which is POST and key holo for er value ja fole submit dile sei key theke jasse
    $key = $_POST['key'];
}

//============data encodeing



$encodedScrambleData = '';
if('encode' == $task){
    $data = $_POST['data'] ?? '';// from name of input field

    if($data != ''){
        $encodedScrambleData = encodedScrambleData($data , $key);
    }
}

//below code in function.php
function encodedScrambleData($originalData, $key){
    $original_key = 'abcdefghijklmnopqrstuvwxyz1234567890';

    $data = '';
    $length = strlen($originalData);

    for($i=0; $i<$length; $i++){
        $currentCharacter = $originalData[$i];

        $postion= strpos($original_key, $currentCharacter);//haystack and then niddle

        if($postion !== false){
            $data .= $key[$postion];
        }
        else{
            $data .= $currentCharacter;
        }
    }
    return $data;
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

            <form method="POST" action="form.php" ">
            <label for="key">Key</label>
            <input type="text" id="key" name="key" <?php displayKey($key);?>>

            <label for="data">Data</label>
            <textarea  id="data"  name="data"><?php if(isset($_POST['data'])){ echo $_POST['data'];}?></textarea>

            <label for="result">Result</label>
            <textarea  id="result"  name="result"><?php echo $encodedScrambleData;?> </textarea>

            <div>
                <button type="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

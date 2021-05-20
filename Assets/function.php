<?php
function displayKey($key){
    printf("value = '%s'", $key);
}


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
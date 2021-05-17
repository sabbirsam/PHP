<?php
//in_array(jake khujbw niddle, jar vitore khujbo haystack)
//  and isset for remove empty error then is_array for check is it array or not then in_array is for array search

function isChecked($inputName, $value){  //$inputName is for haystack ar $value is niddle
    if(isset($_POST[$inputName]) && is_array($_POST[$inputName]) && in_array($value, $_POST[$inputName])){
        echo "checked";
    }
}

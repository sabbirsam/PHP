<?php
// auto add all option value in select field by using array

function selectFirlds($options , $selectValues){
    foreach ($options as $option){
//        printf("<option value='%s'>%s</option>",$option,$option);
        $selected = '';
//        in_array() used
        if(in_array($option, $selectValues)){
            $selected="selected";
        }
        printf("<option value='%s' %s>%s</option>\n",strtolower($option), $selected, ucwords($option));
    }
}

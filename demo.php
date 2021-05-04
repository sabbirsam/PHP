<?php

/**
 * Switch Case
 */

$k= "green";

switch( $k ){
    case 'red':
    case 'green':
        echo ucwords($k)." Color";
        break;
    case 'blue':
        echo"Blue Color";
        break;
        
       
    default:
        echo"not color";    

}   

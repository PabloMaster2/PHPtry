<?php
$foo = 10;
 
try {
    if( is_numeric($foo) ){
        if ($foo > 5){
            throw new Exception('number too high'); // this will be thrown
        }
    }
    else {
        throw new Exception('not a number type');
    }
}
?>

<?php
    $passlen=5;
    $pass='';
    for($i=0;$i<$passlen;$i++){
        $pass.=chr(rand(33,126));
    }   
    echo($pass)
?>
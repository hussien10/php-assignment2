<?php
    $num=22;
    $count=1;
    for($i=0;$num>=10;$i++){
        $num=floor($num/10);
        $count++;
    }
    echo $count;
?>
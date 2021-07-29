<?php
    $nums=[1254,545.5454,44472.25,5554,545454.2222];
    echo "array before formated <br>";
    print_r( $nums);
    foreach($nums as &$num){
        $num=number_format($num,0,".",",");
    }
    echo "<br> array after formated <br>";
    print_r( $nums);
?>
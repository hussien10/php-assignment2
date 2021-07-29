<?php
    $names=["ahmed","osama","kareem","abdelmajeed","hady"];
    echo "array before shuffled <br>";
    print_r($names);
    $newarr=[];
    foreach($names as $index=>$name){
        $element=rand(0,count($names)-1);
        $newarr[$index]=$names[$element];
        unset($names[$element]);
        $names=array_values($names);
    }
    $names=$newarr;
    unset($newarr);
    echo "<br> array after shuffled <br>";
    print_r($names);
?>
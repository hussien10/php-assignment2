<?php
    $names=["ahmed","osama","kareem","abdelmajeed","hady"];
    $len=0;
    foreach($names as $name){
        if(strlen($name)>$len){
            $len=strlen($name);
        }
    }

    echo "the longest array name is $len";
?>
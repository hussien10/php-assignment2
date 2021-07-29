<?php
    $names=["ahmed","osama","kareem","abdelmajeed","hady"];
    unset($names[2]);
    echo "array before reset indexes <br>";
    print_r( $names);
    $names=array_values($names);
    echo "<br>array after reset indexes <br>";
    print_r( $names);
?>

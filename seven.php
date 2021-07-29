
<?php
    $names = ['ahmed', 'mohammed', 'hasan'];
    $list='';
    foreach($names as $name){
        $list.= "<li>$name</li>";
    }
    echo "<ul>$list</ul>"
?>

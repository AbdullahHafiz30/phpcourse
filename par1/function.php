<?php

function add($x,$y){
    return $x + $y;
}

echo add(15,2);
echo "<br>";
echo add(7,5);
echo "<br>";
echo add(6,8);
echo "<br>";

function hello($x){
    $user = $x;
    if($user === "abdullah"){
        echo "hello " . $user;
    }else{
        echo "bye " . $user;
    }
}

hello("abdullah");
echo "<br>";
hello("anas");

?>
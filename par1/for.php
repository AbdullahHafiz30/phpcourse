<?php

$family = array("father", "mother", "brother");

foreach($family as $member){
    echo "$member <br>";
}

for($i = 0; $i <= 5; $i++){
    echo $i + 10 . "<br>";
}
for($i = 0; $i < count($family); $i++){
    echo $family[$i] . "<br>";
}

?>
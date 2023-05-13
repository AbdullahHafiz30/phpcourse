
<?php
    $username="abdullah hafiz";
    $email="abd@hotmail.com";

    if($username === "abdullah hafiz" && $email === "abd@hotmail.com"){
        echo "welcome admin";
        echo "<br>";
    }



?>





<?php
$number1= 20;
$number2= 2;

if($number1 > $number2){
    echo "number 1 is bigger";
    if($number1 === 20){
        echo "<br>";
        echo "number 1 is 20";
    }
}else if($number2 > $number1){
    echo "number 1 is smaller";
}else{
    echo "the numbers are the same";
}

?>
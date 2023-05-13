<form action= "array.php" method="post">
    <input type="text" name="xname">
    <input type="submit">
</form>

<?php

    $xname = $_POST["xname"];
    //echo $xname;
    //$family = array("father", "mother", "brother");
    /*$family = [
        "programmer" => "abdullah",
        "Designer" => "majed",
        "gamer" => "anas"
    ];
    $family[1] = "love";
    $family[3] = "sister";*/

    $score = [
        "abdullah" => [
            "score" => "90",
            "grade" => "A"
        ],
        "waleed" => [
            "score" => "80",
            "grade" => "B"
        ],
        "ahmed" => [
            "score" => "70",
            "grade" => "C"
        ]
    ];

    echo "score :" . $score[$xname]["score"];
    echo "<br>";
    echo "grade :" . $score[$xname]["grade"]
    /*echo $family[1];
    echo "<br>";
    echo $family[3];
    echo "<br>";
    echo count($family);*/


?>
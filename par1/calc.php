<?php
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $op = $_GET["op"];

    function add($x,$y){
        return $x + $y;
    }

    if(empty($number1)){
        $resoult = "number 1 is empty";
    }elseif(empty($number2)){
        $resoult = "number 2 is empty";
    }elseif(empty($op)){
        $resoult = "operator is empty";
    }else{
        if($op === "+"){
            $resoult = add($_GET["number1"], $_GET["number2"]);
        }elseif($op === "-"){
            $resoult = $_GET["number1"] - $_GET["number2"];
        }elseif($op === "*"){
            $resoult = $_GET["number1"] * $_GET["number2"];
        }elseif($op === "/"){
            $resoult = $_GET["number1"] / $_GET["number2"];
        }
    }
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head >

<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">

            <div>
                <label>Enter Number1:</label>
                <input type="number" id="num1" name="number1" class="form-control">
            </div>

            <div>
                <label>Enter Number2:</label>
                <input type="number" id="num2" name="number2" class="form-control">
            </div>
            
            <div>
                <label>Enter operator:</label>
                <input type="text" name="op" class="form-control">
            </div>
            
            <br>
            <div class="alert alert-success">
                <?php echo $resoult?>
            </div>
            
            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
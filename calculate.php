<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
</head>
<body>

    <h2>Result</h2>

    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $result = $num1 + $num2;

    echo "First Number: " . $num1 . "<br>";
    echo "Second Number: " . $num2 . "<br><br>";

    echo "Result: " . $result;

    ?>

    <br><br>

    <a href="index.html">Go Back</a>

</body>
</html>

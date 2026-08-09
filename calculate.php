<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
</head>
<body>

    <h2>Result</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo 'Please submit the form to calculate a result.';
    } else {
        $num1 = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
        $num2 = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);

        if ($num1 === false || $num2 === false || $num1 === null || $num2 === null) {
            echo 'Please provide two valid numbers.';
        } else {
            $result = $num1 + $num2;

            echo 'First Number: ' . htmlspecialchars((string) $num1) . '<br>';
            echo 'Second Number: ' . htmlspecialchars((string) $num2) . '<br><br>';

            echo 'Result: ' . htmlspecialchars((string) $result);
        }
    }

    ?>

    <br><br>

    <a href="index.html">Go Back</a>

</body>
</html>

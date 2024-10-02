<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Equation Discriminant</title>
</head>
<body>

<h1>Discriminant of a Quadratic Equation</h1>

<form action="handleForm.php" method="POST">
    <p>A <input type="text" placeholder="Value of A here" name="coefficientA"></p>
    <p>B <input type="text" placeholder="Value of B here" name="coefficientB"></p>
    <p>C <input type="text" placeholder="Value of C here" name="coefficientC"></p>
    <p><input type="submit" value="Submit" name="submitBtn"></p>
</form>

</body>
</html>

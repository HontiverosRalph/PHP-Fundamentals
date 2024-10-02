<?php
session_start();

if (isset($_POST['submitBtn'])) {
    // Get the values of coefficientA, coefficientB, and coefficientC from the form
    $coefficientA = $_POST['coefficientA'];
    $coefficientB = $_POST['coefficientB'];
    $coefficientC = $_POST['coefficientC'];

    // Validate that 'coefficientA' is not zero
    if ($coefficientA != 0) {
        // Calculate the discriminant (b^2 - 4ac)
        $discriminant = ($coefficientB * $coefficientB) - (4 * $coefficientA * $coefficientC);

        // Display the discriminant
        echo $discriminant;
        
        // Check the nature of the roots based on the discriminant
        if ($discriminant >= 0) {
            // Real roots (either two distinct or one repeated)
            $root1 = (-$coefficientB + sqrt($discriminant)) / (2 * $coefficientA);
            $root2 = (-$coefficientB - sqrt($discriminant)) / (2 * $coefficientA);

            if ($root1 == $root2) {
                // Display the repeated root
                echo "<br>Root = $root1";
            } else {
                // Display both distinct roots
                echo "<br>Root 1 = $root1, Root 2 = $root2";
            }
        } 
    } else {
        echo "Invalid input: 'A' must not be zero.";
    }
}
?>

<p><a href="unset.php">Return</a></p>

<html>
<head>
    <title>Odd Even</title>
</head>
<body>
    <h2>Odd Even Checker</h2>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>

    <?php
    // Check if form was submitted using GET
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Check if the 'number' field is set
        if (isset($_GET["number"])) {
            $number = $_GET["number"];

            // Validate input
            if (is_numeric($number)) {
                if ($number % 2 == 0) {
                    echo "<p>{$number} is an even number.</p>";
                } else {
                    echo "<p>{$number} is an odd number.</p>";
                }
            } else {
                echo "<p>Please enter a valid number.</p>";
            }
        }
    }
    ?>
</body>
</html>


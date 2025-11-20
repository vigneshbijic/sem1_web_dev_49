<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body style="text-align: center;">
    <h2>Details of Student</h2>
    
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="name"><br><br>
        Email ID: <input type="email" name="mail"><br><br>
        Address: <textarea rows="4" name="adrs"></textarea><br><br>
        Gender:
        M <input type="radio" value="M" name="gender">
        F <input type="radio" value="F" name="gender"><br><br>
        DOB: <input type="date" name="dob"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (
            isset($_GET["name"]) &&
            isset($_GET["mail"]) &&
            isset($_GET["adrs"]) &&
            isset($_GET["gender"]) &&
            isset($_GET["dob"])
        ) {
            $name = htmlspecialchars($_GET["name"]);
            $mail = htmlspecialchars($_GET["mail"]);
            $adrs = htmlspecialchars($_GET["adrs"]);
            $gen  = htmlspecialchars($_GET["gender"]);
            $dob  = htmlspecialchars($_GET["dob"]);

            echo "<br><br><b>DETAILS:</b><br><br>";
            echo "Name: $name<br>";
            echo "Email ID: $mail<br>";
            echo "Address: $adrs<br>";
            echo "Gender: $gen<br>";
            echo "D.O.B: $dob<br>";
        } else {
            echo "<p>Please enter all values.</p>";
        }
    }
    ?>
</body>
</html>


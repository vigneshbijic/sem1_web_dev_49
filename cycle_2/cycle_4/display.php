<?php
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookno = $_POST['bookno']; 
    $booktitle = $_POST['booktitle'];
    $bookedition = $_POST['booked'];
    $bookpub = $_POST['bookpub'];

    // Insert new book record
    $insert_sql = "INSERT INTO book_details (id, title, edition, publisher) VALUES('$bookno', '$booktitle', '$bookedition', '$bookpub')";
    mysqli_query($conn, $insert_sql);
}

// Fetch all records
$query = mysqli_query($conn, "SELECT * FROM book_details");
?>
<html>
<head>
<title>Display Book Details</title>
</head>
<body>
<h2 align="center">Book Details</h2>
<br>
<table align="center" border="1" cellpadding="5" cellspacing="0">
<tr>
    <th>Book Number</th>
    <th>Title</th>
    <th>Edition</th>
    <th>Publisher</th>
</tr>
<?php
if ($query && mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['title']) . "</td>";
        echo "<td>" . htmlspecialchars($row['edition']) . "</td>";
        echo "<td>" . htmlspecialchars($row['publisher']) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4' align='center'>No records found</td></tr>";
}
?>
</table>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<?php
require_once "load.php";  

// Prepare and execute the SQL query using PDO
$sql = "SELECT * FROM userinfo";
$result = $conn->query($sql); // Execute the query using the PDO connection

// Fetch all results into an array
$users = $result->fetchAll(PDO::FETCH_ASSOC);

if (count($users) > 0) {
    echo "<table class='table table-hover'>
        <tr>
            <th>Email</th>
            <th>Full Name</th>
            <th>Username</th>
        </tr>";

    foreach ($users as $row) {
        echo "<tr>
            <td>" . $row["email"] . "</td>
            <td>" . $row["FullName"] . "</td>
            <td>" . $row["username"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "NO RESULTS.";
}
?>

</body>
</html>

<?php
// Assuming you have a PHP script that connects to the database and fetches the unique brgy_code values
// Modify the following code based on your database connection and query logic

// Example code using mysqli extension
$mysqli = new mysqli('localhost', 'root', '', 'obis');

// Check for connection errors
if ($mysqli->connect_errno) {
    echo json_encode(['error' => 'Failed to connect to MySQL: ' . $mysqli->connect_error]);
    exit();
}

// Prepare the SQL statement to fetch unique brgy_code values
$sql = "SELECT DISTINCT brgy_code FROM bcpc_tbl";

// Execute the query
$result = $mysqli->query($sql);

// Fetch the result into an array
$brgyCodes = [];
while ($row = $result->fetch_assoc()) {
    $brgyCodes[] = $row['brgy_code'];
}

// Close the database connection
$mysqli->close();

// Send the JSON response
echo json_encode($brgyCodes);

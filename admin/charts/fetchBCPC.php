<?php
// Assuming you have a PHP script that connects to the database and fetches the data
// Modify the following code based on your database connection and query logic

// Example code using mysqli extension
$mysqli = new mysqli('localhost', 'root', '', 'obis');

// Check for connection errors
if ($mysqli->connect_errno) {
    echo json_encode(['error' => 'Failed to connect to MySQL: ' . $mysqli->connect_error]);
    exit();
}

// Get the brgyCode parameter from the request
$brgyCode = isset($_GET['brgyCode']) ? $_GET['brgyCode'] : '';

// Prepare the SQL statement with a parameterized query to prevent SQL injection
$stmt = $mysqli->prepare("SELECT year, quarter1, quarter2, quarter3, quarter4 FROM bcpc_tbl WHERE brgy_code = ?");
$stmt->bind_param('s', $brgyCode);

// Execute the query
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

// Fetch the data into an associative array
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the statement and database connection
$stmt->close();
$mysqli->close();

// Prepare the chart data
$labels = array_column($data, 'year');
$datasets = [
    [
        'label' => 'Quarter 1',
        'data' => array_column($data, 'quarter1'),
        'backgroundColor' => getRandomColor(0.8)
    ],
    [
        'label' => 'Quarter 2',
        'data' => array_column($data, 'quarter2'),
        'backgroundColor' => getRandomColor(0.8)
    ],
    [
        'label' => 'Quarter 3',
        'data' => array_column($data, 'quarter3'),
        'backgroundColor' => getRandomColor(0.8)
    ],
    [
        'label' => 'Quarter 4',
        'data' => array_column($data, 'quarter4'),
        'backgroundColor' => getRandomColor(0.8)
    ],
];

// Prepare the response
$response = [
    'labels' => $labels,
    'datasets' => $datasets
];

// Set the response content type to JSON
header('Content-Type: application/json');

// Send the JSON response
echo json_encode($response);

// Helper function to generate random background colors for the chart
function getRandomColor($alpha = 1)
{
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);

    return "rgba($red, $green, $blue, $alpha)";
}

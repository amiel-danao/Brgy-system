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

// Get the selected brgyCode from the request
$brgyCode = $_GET['brgyCode'];

// Prepare the SQL query with the optional brgyCode filter
$sql = "SELECT year, aip, SUM(total) as total_sum FROM bdf_tbl";
if (!empty($brgyCode)) {
    $sql .= " WHERE brgy_code = '$brgyCode'";
}
$sql .= " GROUP BY year, aip ORDER BY year, aip";

$result = $mysqli->query($sql);

$labels = []; // Array to store the labels (year + aip)
$data = []; // Array to store the data values

if ($result) {
    // Fetch data and store in the arrays
    while ($row = $result->fetch_assoc()) {
        $labels[] = $row['year'] . ' ' . $row['aip'];
        $data[] = $row['total_sum'];
    }
    $result->free_result();
}

// Close the database connection
$mysqli->close();

// Prepare the chart data as an array
$chartData = [
    'labels' => $labels,
    'datasets' => [
        [
            'label' => 'BDF Chart',
            'data' => $data,
            'backgroundColor' => getRandomColor(0.8)
        ]
    ]
];

// Return the chart data as JSON
header('Content-Type: application/json');
echo json_encode($chartData);

// Helper function to generate random background colors for the chart
function getRandomColor($alpha = 1)
{
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);

    return "rgba($red, $green, $blue, $alpha)";
}

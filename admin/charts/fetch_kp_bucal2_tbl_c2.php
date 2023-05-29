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


// Get the selected brgy_code from the request
$brgyCode = $_GET['brgyCode'];
$year = '';

if(isset($_GET['year']))
{
    $year = $_GET['year'];
}

// Prepare the SQL statement
$query = "SELECT SUM(physical_abuse) AS physical_abuse_total, SUM(sexual_abuse) AS sexual_abuse_total, SUM(physcological_abuse) AS psychological_abuse_total, SUM(economic_abuse) AS economic_abuse_total FROM kp_bucal2_tbl_c2 WHERE `brgy_code` = '$brgyCode'";

if (!empty($year)) {
    $query .= " AND year = '$year'";
}

$stmt = $mysqli->prepare($query);

// Execute the query
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

$data = [];

if ($result && $result->num_rows > 0) {
    // Fetch the row
    $row = $result->fetch_assoc();

    // Prepare the data for the pie chart
    $data = [
        'Physical Abuse' => (int) $row['physical_abuse_total'],
        'Sexual Abuse' => (int) $row['sexual_abuse_total'],
        'Psychological Abuse' => (int) $row['psychological_abuse_total'],
        'Economic Abuse' => (int) $row['economic_abuse_total']
    ];
}

// Prepare the chart data in the required format
$chartData = [
    'labels' => array_keys($data),
    'datasets' => [
        [
            'data' => array_values($data),
            'backgroundColor' => [
                '#FF6384',
                '#36A2EB',
                '#FFCE56',
                '#8D9AFF'
            ]
        ]
    ]
];

// Close the statement and connection
$stmt->close();
$mysqli->close();

// Return the chart data as JSON
header('Content-Type: application/json');
echo json_encode($chartData);
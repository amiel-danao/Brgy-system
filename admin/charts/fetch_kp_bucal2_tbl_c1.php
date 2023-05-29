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

// Prepare the SQL query
$sql = "SELECT `criminal(2a.1)`, `civil(2a.2)`, `others(2a.3)`, `totals(2a.4)`
        FROM `kp_bucal2_tbl_c1`
        WHERE `brgy_code` = '$brgyCode'";

if (!empty($year)) {
    $sql .= " AND year = '$year'";
}

// Execute the query
$result = $mysqli->query($sql);

$data = []; // Array to store the data values
$labels = []; // Array to store the labels

if ($result && $result->num_rows > 0) {
    // Fetch data and store in the arrays
    $row = $result->fetch_assoc();
    $labels = ['Criminal', 'Civil', 'Others', 'Totals'];
    $data = [
        $row['criminal(2a.1)'],
        $row['civil(2a.2)'],
        $row['others(2a.3)'],
        $row['totals(2a.4)']
    ];

    // Free the result set
    $result->free_result();
}

// Close the database connection
$mysqli->close();

// Prepare the chart data as an array
$chartData = [
    'labels' => $labels,
    'datasets' => [
        [
            'data' => $data,
            'backgroundColor' => [
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)'
            ]
        ]
    ]
];

// Return the chart data as JSON
header('Content-Type: application/json');
echo json_encode($chartData);
?>

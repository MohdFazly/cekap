<?php
include('connect.php');

// Initialize a variable to store the success message
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $deliveryNote = $_POST["deliveryNote"];
    $lorryNumber = $_POST["LorryNumber"];
    $driverName = $_POST["driverName"];
    $fromLocation = $_POST["fromLocation"];
    $toLocation = $_POST["toLocation"];
    $deliveryDate = $_POST["deliveryDate"];
    $totalLogs = $_POST["TotalLogs"];
    $totalVolume = $_POST["TotalVolume"];

    // Validate and sanitize data as needed

    // Perform SQL query to insert data into the database
    $insertQuery = "INSERT INTO deliverydetails (DeliveryNote, LorryNumber, DriverName, FromLocation, ToLocation, DeliveryDate, TotalLogs, TotalVolume) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssssssdd", $deliveryNote, $lorryNumber, $driverName, $fromLocation, $toLocation, $deliveryDate, $totalLogs, $totalVolume);

    if ($stmt->execute()) {
        // Data inserted successfully, set the success message
        $successMessage = "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Delivery Note Input</title>
    <!-- Add your CSS styling here -->
</head>
<body>
    <div class="container">
        <h2>Admin Delivery Note Input</h2>
        <!-- Display the success message if it's not empty -->
        <?php if (!empty($successMessage)) { ?>
            <div class="success-message"><?php echo $successMessage; ?></div>
        <?php } ?>
        <form id="deliveryForm" method="POST" action="process_delivery.php">
            <!-- Rest of your form -->
        </form>
    </div>

    <!-- JavaScript logic can be added here if needed -->
</body>
</html>

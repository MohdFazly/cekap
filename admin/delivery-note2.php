<?php
include ('connect.php');

	// Query to retrieve lorry numbers
	$lorryQuery = "SELECT LorryNumber FROM Lorry WHERE status='available'";
	$lorryResult = $conn->query($lorryQuery);
	
	// Query to retrieve driver name
	$driverQuery = "SELECT DriverName FROM driver";
	$driverResult = $conn->query($driverQuery);
	
	// Query to retrieve location
	$fromlocationQuery = "SELECT LocationName FROM location";
	$fromlocationResult = $conn->query($fromlocationQuery);
	
	// Query to retrieve location
	$tolocationQuery = "SELECT LocationName FROM location";
	$tolocationResult = $conn->query($tolocationQuery);	
		
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Delivery Note Input</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
        }

        select, input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Delivery Note Input</h2>
		<!-- Display the success message if it's not empty -->
        <?php if (!empty($successMessage)) { ?>
            <div class="success-message"><?php echo $successMessage; ?></div>
        <?php } ?>
        <form id="deliveryForm" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="Name">
            <label for="deliveryNote">Delivery Note:</label>
            <input type="text" id="deliveryNote" name="deliveryNote" required />
            </div>
            
            <div class="Name">
            <label for="LorryNumber">Lorry Number:</label>
			<select id="LorryNumber" name="LorryNumber" required>
				<?php while ($row = $lorryResult->fetch_assoc()) { ?>
					<option value="<?php echo $row['LorryNumber']; ?>"><?php echo $row['LorryNumber']; ?></option>
				<?php } ?>
			</select>
            </div>

            <div class="Name">
            <label for="driverName">Driver Name:</label>
            <select id="driverName" name="driverName" required>
				<?php while ($row = $driverResult->fetch_assoc()) { ?>
					<option value="<?php echo $row['DriverName']; ?>"><?php echo $row['DriverName']; ?></option>
				<?php } ?>
            </select>
            </div>

            <div class="Name">
            <label for="fromLocation">From:</label>
            <select id="fromLocation" name="fromLocation" required>
				<?php while ($row = $fromlocationResult->fetch_assoc()) { ?>
					<option value="<?php echo $row['LocationName']; ?>"><?php echo $row['LocationName']; ?></option>
				<?php } ?>
            </select>
            </div>

            <div class="Name">
            <label for="toLocation">To:</label>
            <select id="toLocation" name="toLocation" required>
				<?php while ($row = $tolocationResult->fetch_assoc()) { ?>
					<option value="<?php echo $row['LocationName']; ?>"><?php echo $row['LocationName']; ?></option>
				<?php } ?>			
            </select>
            </div>
			
            <div class="Name">
			<label for="deliveryDate">Delivery Date:</label>
			<input type="date" id="deliveryDate" name="deliveryDate" required>
            </div>

            <div class="Name">
            <label for="TotalLogs">Total Logs:</label>
            <input type="number" id="TotalLogs" name="TotalLogs" required>
            </div>

            <div class="Name">
            <label for="TotalVolume">Total Volume:</label>
            <input type="number" id="doubleField" name="TotalVolume" step="0.01" required>
            </div>
                    
            <div class="bt-btn">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

<?php
include('connect.php');

// Initialize variables to store form data and success message
$deliveryNote = $lorryNumber = $driverName = $fromLocation = $toLocation = $deliveryDate = $totalLogs = $totalVolume = '';
$successMessage = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize form data
    $deliveryNote = htmlspecialchars($_POST["deliveryNote"]);
    $lorryNumber = htmlspecialchars($_POST["LorryNumber"]);
    $driverName = htmlspecialchars($_POST["driverName"]);
    $fromLocation = htmlspecialchars($_POST["fromLocation"]);
    $toLocation = htmlspecialchars($_POST["toLocation"]);
    $deliveryDate = htmlspecialchars($_POST["deliveryDate"]);
    $totalLogs = floatval($_POST["TotalLogs"]); // Convert to float
    $totalVolume = floatval($_POST["TotalVolume"]); // Convert to float

    // Validate form data as needed

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
        // Error handling - display the error message
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}
$conn->close();
?>

</body>
</html>

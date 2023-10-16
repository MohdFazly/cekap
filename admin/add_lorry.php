<?php
// Assuming you have a database connection established
$host = 'localhost';
$db   = 'cekap';
$user = 'root';
$pass = '';
$charset = 'utf8mb4'; 

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Assume your form data is coming from POST
$lorry=$_POST['numberlorry'];
$sic=$_POST['status'];


// Check for duplicate data
$stmt = $pdo->prepare("SELECT * FROM lorry WHERE LorryNumber = :numberlorry");
$stmt->execute(['numberlorry' => $lorry]);

if ($stmt->rowCount() > 0) {
    // Data already exists, handle accordingly
	echo "<script
	type='text/jscript'>alert('Duplicate Lorry Number. Rejecting the request.')</script>";
	header('refresh:1 url=display_lorry.php');

} else {
    // Data doesn't exist, insert into the database
    $insertStmt = $pdo->prepare("INSERT INTO lorry (LorryNumber, Status) VALUES (:numberlorry, :status)");
    $insertStmt->execute(['numberlorry' => $lorry,'status' => $sic]);
    echo "<script
	type='text/jscript'>alert('Lorry Number inserted successfully.')</script>";
	header('refresh:1 url=display_lorry.php');
}

	
?>

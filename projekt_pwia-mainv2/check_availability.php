<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "zskresort";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
$guests = $_GET['guests'];
$promo_code = $_GET['promo_code'];


$sql = "SELECT * FROM rooms WHERE availability = TRUE LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    $row = $result->fetch_assoc();
    $room_id = $row['room_id'];
    $room_number = $row['room_number'];

    
    $stmt = $conn->prepare("INSERT INTO bookings (checkin, checkout, guests, promo_code, room_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi", $checkin, $checkout, $guests, $promo_code, $room_id);
    $stmt->execute();
    $stmt->close();

    
    $sql = "UPDATE rooms SET availability = FALSE WHERE room_id = $room_id";
    $conn->query($sql);

    echo "<h1>Booking Confirmed</h1>";
    echo "<p>Room Number: $room_number</p>";
    echo "<p>Check-In: $checkin</p>";
    echo "<p>Check-Out: $checkout</p>";
    echo "<p>Number of Guests: $guests</p>";
    echo "<p>Promotion Code: $promo_code</p>";
} else {
    
    echo "<h1>No Rooms Available</h1>";
    echo "<p>Please try different dates or reduce the number of guests.</p>";
}

$conn->close();
?>

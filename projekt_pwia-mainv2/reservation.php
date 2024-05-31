<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation - Serenity Shores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="about_us.php">About Us</a>
        <a href="our_rooms.php">Our Rooms</a>
        <a href="reservation.php">Reservation</a>
        <a href="rooms.php">Rooms</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="hero">
        <div class="hero-content">
            <h1>Reservation</h1>
            <p>Make a reservation at Serenity Shores.</p>
            <div class="booking-form">
                <form action="check_availability.php" method="GET">
                    <label for="check-in">Check-In</label>
                    <input type="date" id="check-in" name="checkin" required>
                    <label for="check-out">Check-Out</label>
                    <input type="date" id="check-out" name="checkout" required>
                    <label for="guests">No. of Guests</label>
                    <select id="guests" name="guests">
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <label for="promo-code">Have a promotion code?</label>
                    <input type="text" id="promo-code" name="promo_code" placeholder="Enter code">
                    <button type="submit">Check Availability</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

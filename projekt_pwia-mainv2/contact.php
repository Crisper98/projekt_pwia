<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Serenity Shores</title>
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
    <div class="content">
        <div class="form-container">
            <form class="form" id="contactForm">
                <div class="form-group">
                    <label for="email">Company Email</label>
                    <input required name="email" id="email" type="email">
                </div>
                <div class="form-group">
                    <label for="textarea">How Can We Help You?</label>
                    <textarea required cols="50" rows="10" id="textarea" name="textarea"></textarea>
                </div>
                <button type="submit" class="form-submit-btn">Submit</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

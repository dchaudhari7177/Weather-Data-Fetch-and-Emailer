<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather App</title>
    <link rel="stylesheet" href="assets/style.css">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="container">
        <h1>Weather Data Emailer Appllication</h1>
        <form action="send_email.php" method="POST">
            <div class="form-group">
                <label for="location"><i class="fas fa-map-marker-alt"></i> Enter Location:</label>
                <input type="text" id="location" name="location" placeholder="E.g., New York, London" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Enter Email:</label>
                <input type="email" id="email" name="email" placeholder="example@example.com" required>
            </div>
            <button type="submit">Get Weather</button>
        </form>
    </div>
</body>
</html>

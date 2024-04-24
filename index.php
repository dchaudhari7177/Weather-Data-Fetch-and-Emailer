<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather App</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h1>Weather App</h1>
        <form action="send_email.php" method="POST">
            <label for="location">Enter Location:</label>
            <input type="text" id="location" name="location" required>
            <label for="email">Enter Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Get Weather</button>
        </form>
    </div>
</body>
</html>

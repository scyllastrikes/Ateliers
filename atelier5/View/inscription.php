<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form method="post" action="Verification.php">
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" required><br>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>
        <label for="address">Address:</label>
        <input type="text" name="address" required><br>
        <label for="DoB">Date of Birth:</label>
        <input type="date" name="DoB" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

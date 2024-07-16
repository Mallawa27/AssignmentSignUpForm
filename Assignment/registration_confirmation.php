<?php
$firstName = $_GET['first_name'];
$lastName = $_GET['last_name'];
$email = $_GET['email'];
$phoneNumber = $_GET['phone_number'];

echo "<h1>Welcome $firstName!</h1>";
echo "<p>Your details have been successfully registered.</p>";
echo "<p>First Name: $firstName</p>";
echo "<p>Last Name: $lastName</p>";
echo "<p>Email: $email</p>";
echo "<p>Phone Number: $phoneNumber</p>";
?>

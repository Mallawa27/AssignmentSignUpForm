<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="form-wrapper">
    <h1 style="color:white" >SIGNUP FORM</h1>
    <form method="post" action="insert.php" onsubmit="return validateForm()">
      <fieldset id="s_id">
        <label for="first-name">First Name:</label>
        <input type="text" id="firstName" name="first_name" required><br><br>

        <label for="last-name">Last Name:</label>
        <input type="text" id="lastName" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone-number">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phone_number" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required minlength="6"><br><br>

        <label for="repeat-password">Repeat Password:</label>
        <input type="password" id="repeatPassword" name="repeat_password" required minlength="6"><br><br>
        
        <input type="submit" class="btn" id="submit" name="submit">

</fieldset>
</form>
</div>
<script src="javascript.js"></script>
</body>
</html>
  
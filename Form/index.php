<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <?php include("contact.php"); ?>
</head>
<body>
<div class="container"> 
<h1>Contact me</h1>
<form method="POST" id="contact" action= <?= $_SERVER["PHP_SELF"]; ?>>
<span class="status"><?= $status ?></span>
<input type="text" name="fullname" id="fullname" placeholder="Full Name">
<span class="error"><?= $fullname_error ?></span>
<input type="email" name="email" id="email" placeholder="Email">
<span class="error"><?= $email_error ?></span>
<input type="tel" name="phone" id="phone"  placeholder="Phone">
<span class="error"><?= $phone_error ?></span>
<textarea name="message" id="message" cols="30" rows="10"  placeholder="Message"></textarea>
<button type="submit">Send</button>
</form>
</div>
</body>
</html>

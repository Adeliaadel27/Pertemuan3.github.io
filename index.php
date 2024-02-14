<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation - Easy Tutorials Youtube Channel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web\css\all.css">
    <script src="fontawesome-free-6.4.2-web\css\all.css" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
            <i class="fas fa-paper-plane"></i>
            <div class="input-group">
                <label>Full name</label>
                <input name="nama" type="text" placeholder="Enter your name" id="contact-name" onkeyup="validateName()">
                <span id="name-error"></span>
            </div>
            <div class="input-group">
                <label>Phone No.</label>
                <input name="phone" type="text" placeholder="123 456 7890" id="contact-phone" onkeyup="validatePhone()">
                <span id="phone-error"></span>
            </div>
            <div class="input-group">
            <label> Email Id</label>
            <input name="email" type="email" placeholder="Enter Email" id="contact-email" onkeyup="validateEmail()">
            <span id="email-error"></span>
            </div>
            <div class="input-group">
            <label>Your Message</label>
            <textarea name="message" rows="5" placeholder="Enter your message" id="contact-message" onkeyup="validateMessage()"></textarea>
            <span id="message-error"></span>
            </div>
         <button onclick="return validateForm()">Submit</button>
         <span id="submit-error"></span>
    </form>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php
$nama = "";
$phone = "";
$email = "";
$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = anti_inject($_POST["nama"]);
    $phone = anti_inject($_POST["phone"]);
    $email = anti_inject($_POST["email"]);
    $message = anti_inject($_POST["message"]);
}
function anti_inject($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo "<h2>Your Input:</h2>";
echo "Your Name:".$nama."<br>";
echo "Your Phone:".$phone."<br>";
echo "Your Email:".$email."<br>";
echo "Your Message:".$message."<br>";
?>
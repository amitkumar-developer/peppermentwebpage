<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $position = $_POST["position"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    $subject = "Job Application: $position";
    $message = "Name: $name\nEmail: $email\n";
    
    $headers = "From: $email";
    
    $to = "itsamitkumar03@gmail.com";  // Replace with your Gmail address
    
    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        echo "Application submitted successfully. We'll get in touch with you soon!";
    } else {
        echo "Failed to submit application. Please try again later.";
    }
}
?>

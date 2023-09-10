<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient's email address
    $to = "shubhamnikamsn007@gmail.com";

    // Email subject
    $email_subject = "Mail From Website";

    // Compose the email message
    $email_message = "Name: " . $name . "\n";
    $email_message .= "Email: " . $email . "\n";
    $email_message .= "Subject: " . $subject . "\n";
    $email_message .= "Message:\n" . $message;

    // Additional headers
    $headers = "From: noreply@yoursite.com" . "\r\n";
    $headers .= "Reply-To: " . $email;

    // Send the email
    if (mail($to, $email_subject, $email_message, $headers)) {
        // Email sent successfully, you can redirect the user
        header("Location: success.html"); // Create this page to display a success message
        exit();
    } else {
        // Email failed to send
        echo "Error: Email could not be sent.";
    }
}
?>


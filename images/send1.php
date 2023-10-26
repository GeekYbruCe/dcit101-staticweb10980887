<?php
// Set the recipient email address
$to = "solomonlartey17@gmail.com";

// Set the subject of the email
$subject = "Test Email";

// Set the message body
$message = "This is a test email sent from a PHP script.";

// Set the sender's email address
$from = "lord@st.ug.edu.gh";

// Set additional headers
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email could not be sent.";
}
?>

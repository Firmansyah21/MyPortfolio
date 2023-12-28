<?php
if ($_POST) {
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'syahfirman2106@gamil.com'; // Ganti dengan email Anda
    $subject = 'New Message from Contact Form';

    // Menyiapkan header email
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Email sending failed";
    }
}

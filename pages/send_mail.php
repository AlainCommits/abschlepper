<?php
// Include config file
require_once '../includes/init.php';

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = sanitize_input($_POST['name']);
    $email = sanitize_input($_POST['email']);
    $phone = sanitize_input($_POST['phone']);
    $subject = sanitize_input($_POST['subject']);
    $message = sanitize_input($_POST['message']);
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Ungültige E-Mail-Adresse');
    }
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Email content
    $email_content = "Neue Kontaktanfrage:\n\n";
    $email_content .= "Name: " . $name . "\n";
    $email_content .= "E-Mail: " . $email . "\n";
    $email_content .= "Telefon: " . $phone . "\n";
    $email_content .= "Betreff: " . $subject . "\n\n";
    $email_content .= "Nachricht:\n" . $message;
    
    // Send email
    $to = $companyData['email'];
    $mail_subject = "Neue Kontaktanfrage: " . $subject;
    
    if(mail($to, $mail_subject, $email_content, $headers)) {
        // Send confirmation to user
        $confirmation_subject = "Ihre Anfrage bei " . $companyData['name'];
        $confirmation_message = "Sehr geehrte(r) " . $name . ",\n\n";
        $confirmation_message .= "vielen Dank für Ihre Anfrage. Wir werden uns schnellstmöglich bei Ihnen melden.\n\n";
        $confirmation_message .= "Mit freundlichen Grüßen\n";
        $confirmation_message .= $companyData['name'] . "\n\n";
        $confirmation_message .= "Ihre Nachricht:\n" . $message;
        
        mail($email, $confirmation_subject, $confirmation_message, "From: " . $companyData['email']);
        
        // Redirect back to contact page with success message
        header("Location: contact.php?status=success");
        exit();
    } else {
        header("Location: contact.php?status=error");
        exit();
    }
}
?>

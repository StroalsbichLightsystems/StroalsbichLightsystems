
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $to = "your-email@example.com"; // Change to your email address
    $subject = "Neue Nachricht von " . $name;
    $headers = "From: " . $email;
    if (mail($to, $subject, $message, $headers)) {
        echo "Danke, Ihre Nachricht wurde gesendet.";
    } else {
        echo "Entschuldigung, es gab ein Problem beim Senden Ihrer Nachricht.";
    }
}
?>

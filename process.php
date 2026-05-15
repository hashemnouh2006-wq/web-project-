<?php
// process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'] ?? 'Not provided';
    $email = $_POST['email'] ?? 'Not provided';
    $message = $_POST['message'] ?? 'No message';

    echo "<div style='font-family: Arial; padding: 20px; text-align:center; margin-top:50px;'>";
    echo "<h1>Submission Received</h1>";
    echo "<div style='border: 1px solid #ccc; display: inline-block; padding: 20px; border-radius: 10px;'>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($message) . "</p>";
    echo "</div>";
    echo "<br><br><a href='index.html' style='color: blue;'>Back to Home</a>";
    echo "</div>";
} else {
    header("Location: contact-me.html");
}
?>
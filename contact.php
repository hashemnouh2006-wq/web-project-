<?php
// process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Submitted Form Details</h1>";
    echo "<ul>";
    foreach ($_POST as $key => $value) {
        // Clean and display all data 
        echo "<li><strong>" . htmlspecialchars(ucfirst($key)) . ":</strong> " . htmlspecialchars($value) . "</li>";
    }
    echo "</ul>";
    echo "<a href='contact.html'>Return to Contact Page</a>";
} else {
    // Redirect if they try to access this page directly [cite: 19]
    header("Location: contact.html");
}
?>
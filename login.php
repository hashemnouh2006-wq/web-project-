<?php
// login.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u_email = $_POST['email'] ?? '';
    $u_pass = $_POST['password'] ?? '';

    $correct_id = "b2412100001"; 
    $correct_email = $correct_id . "@sakarya.edu.tr";

    if ($u_email === $correct_email && $u_pass === $correct_id) {
        echo "<div style='text-align:center; margin-top:100px; font-family:Arial;'>";
        echo "<h1>Hoşgeldiniz " . htmlspecialchars($correct_id) . "</h1>";
        echo "<p><a href='index.html'>Back to Home Page</a></p>";
        echo "</div>";
    } else {
        echo "<div style='text-align:center; color:red; margin-top:100px;'>";
        echo "<h2>Login Failed</h2>";
        echo "<p>Expected: $correct_email</p>";
        echo "<p>Received: " . htmlspecialchars($u_email) . "</p>";
        echo "<br><a href='login.html'>Try Again</a>";
        echo "</div>";
    }
}
?>
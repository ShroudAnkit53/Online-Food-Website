<?php
// Start the session
session_start();

// Destroy the session to log out the user
session_destroy();

// Redirect to the login page
echo "<script>
        alert('Logout Successful!');
        window.location.href = 'index.php';
        </script>";
exit();
?>

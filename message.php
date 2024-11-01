<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate form fields (optional but recommended)
    if (empty($name) || empty($email) || empty($number) || empty($subject) || empty($message)) {
        echo "<script>
                    alert('All fields are required!');
                    window.location.href = 'main.php';
                  </script>";
    } else {
        // Prepare SQL to insert data into the database
        $sql = "INSERT INTO messages (name, email, phone_number, subject, message)
                VALUES ('$name', '$email', '$number', '$subject', '$message')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Message Sent Successfully!');
                    window.location.href = 'main.php';
                  </script>";
        } else {
            echo "<script>alert('Error sending message: " . $conn->error . "'); window.location.href='main.php';</script>";
        }
    }

    // Close the connection
    $conn->close();
}
?>

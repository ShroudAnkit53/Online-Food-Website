<?php
include 'config.php';  // Include the file with database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookingid = $_POST['bookingid'];
    $date = $_POST['date'];
    $persons = $_POST['persons'];
    $time = $_POST['time'];

    // Check if the booking ID already exists
    $check_stmt = $conn->prepare("SELECT bookingid FROM bookings WHERE bookingid = ?");
    $check_stmt->bind_param("s", $bookingid);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        // If the booking ID already exists, show an alert
        echo "<script>alert('Booking ID is already there. Please use a different one.'); 
              window.location.href = 'main.php';</script>";
    } else {
        // Prepare and bind to insert a new record
        $stmt = $conn->prepare("INSERT INTO bookings (bookingid, date, persons, time) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $bookingid, $date, $persons, $time);

        if ($stmt->execute()) {
            echo "<script>alert('Booking successful!'); 
                  window.location.href = 'main.php';</script>";
        } else {
            echo "<script>alert('Booking failed. Please try again.'); 
                  window.location.href = 'main.php';</script>";
        }

        $stmt->close();
    }

    $check_stmt->close();
    $conn->close();
}
?>


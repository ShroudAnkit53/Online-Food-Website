<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = $_POST['booking_id'];

    // Check if booking exists
    $sql = "SELECT * FROM bookings WHERE bookingid='$booking_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // If the booking exists, delete it
        $delete_sql = "DELETE FROM bookings WHERE bookingid='$booking_id'";
        
        if ($conn->query($delete_sql) === TRUE) {
            echo "<script>alert('Booking cancelled successfully!');
            window.location.href = 'main.php'</script>";
        } else {
            echo "<script>alert('Error cancelling booking. Please try again later.');
            window.location.href = 'main.php'</script>";
        }
    } else {
        echo "<script>alert('Booking ID not found.');
        window.location.href = 'main.php'</script>";
    }

    $conn->close();
}
?>



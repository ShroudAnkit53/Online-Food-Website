<?php
include 'config.php'; // Your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $plan = $_POST['plan'];
    $cost = $_POST['cost'];
    $date = $_POST['date'];

    // Insert subscription details into the database
    $sql = "INSERT INTO subscriptions (name, email, address, plan, cost,subscription_date)
            VALUES ('$name', '$email', '$address', '$plan', '$cost', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Subscription successful!')</script>";
        echo "<script>window.location = 'main.php';</script>"; // Redirect after successful subscription
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

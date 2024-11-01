
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    // Check if the email or username already exists
    $check_sql = "SELECT * FROM tb_users WHERE email='$email' OR username='$username'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // If email or username is found, notify the user
        echo "<script>
                    alert('Email or Username has taken already');
                    window.location.href = 'index.php';
                  </script>";
    } else {
        // If they are unique, proceed with registration
        $sql = "INSERT INTO tb_users (username, email, password) VALUES ('$username', '$email', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Registration successful!');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

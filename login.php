<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "<script>
                    alert('Login successful!');
                    window.location.href = 'main.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Invalid password!');
                    window.location.href = 'index.php';
                  </script>";
        }
    } else {
        echo "<script>
                    alert('No user found!');
                    window.location.href = 'main.php';
                  </script>";
    }

    $conn->close();
}
?>

<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, email)
            VALUES ('$username', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?success=1");
    } else {
        echo "Eroare: " . $conn->error;
    }
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];

    // Validate and sanitize the input data if needed

    // Connect to the database
    $conn = new mysqli("localhost", "username", "password", "database_name");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO user_data (name, email, number, message) VALUES ('$name', '$email', '$number', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Data stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

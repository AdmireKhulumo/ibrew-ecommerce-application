<?php

include 'functions.php';

debug_log($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-register'])) {
    // Check if all fields are present
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        // Get form data
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $conn = db_connect();

        // Save information to database
        debug_log("Adding data ... ");
        $sql = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$password', 'buyer')";

        if ($conn->query($sql) === TRUE) {
            echo "New user added successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // todo: redirect on success

        // Close database connection
        $conn->close();
    } else {
        echo "All fields are required.";
    }
}

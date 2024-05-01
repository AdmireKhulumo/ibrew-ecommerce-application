<?php
include 'functions.php';
debug_log("running login.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-login'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = db_connect();

    // get the user with their email
    $sql = "SELECT password FROM users WHERE email = '$email'";

    $result = $conn->query($sql);

    if ($result === FALSE){
        echo "User not found.";
    }
    else {
        $db_pass = $result->fetch_column();
        debug_log($db_pass);

        if($db_pass === FALSE){
            echo "Password not found";
        }
        else if($db_pass !== $password){
            debug_log("Password incorrect.");
            echo "Incorrect password";
        }
        else {
            debug_log("Password correct.");
            echo "Password okay";
            // TODO: set the user session here
            redirect("index.php");
        }
    }

    $conn->close();
}

?>
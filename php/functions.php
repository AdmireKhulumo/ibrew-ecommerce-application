<?php

// for debug logging
include __DIR__."/../vendor/autoload.php";
$debug = new \bdk\Debug(array(
    'collect' => true,
    'output' => true,
));

// accessing environment variables
$env = parse_ini_file(__DIR__."/../.env");

function debug_log($value): void
{
    global $debug;
    $debug->log($value);
}

// Connect to MySQL database
function db_connect(): mysqli
{
    debug_log("Connecting to database...");

    global $env;
    $db_servername = $env["db_servername"];;
    $db_username = $env["db_username"];
    $db_password = $env["db_password"];
    $db_name = $env["db_name"];

    $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

/**
 * @param $page_name
 * @return void
 */
function redirect($page_name): void
{
    debug_log("/$page_name");
    header("Location: /$page_name");
}

function get_product($id): false|array|null
{
    $conn = db_connect();
    $sql = "SELECT id, name, category, description, url, price FROM products WHERE id='$id'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

function start_session(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

?>
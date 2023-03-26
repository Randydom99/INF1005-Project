<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
// Create database connection.
$config = parse_ini_file('../../private/db-config.ini');
$conn = new mysqli($config['servername'], $config['username'],
        $config['password'], $config['dbname']);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the statement:
$stmt = $conn->prepare("DELETE FROM world_of_pets_members WHERE member_id = ?");

// Bind the parameters:
$stmt->bind_param("i", $_POST["member_id"]);

// Execute the query:
$stmt->execute();

// Clean up:
$stmt->close();
$conn->close();

// Redirect back to the admin page:
header("Location: adminpage.php");
exit();
?>
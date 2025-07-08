<?php
session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $status = "Pending";
    $date = date("Y-m-d");

    $stmt = $conn->prepare("INSERT INTO complaints (user_id, category, description, status, date) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $user_id, $category, $description, $status, $date);
    $stmt->execute();

    header("Location: ../frontend/view_complaints.php");
    exit();
}
?>
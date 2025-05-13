<?php
include_once("config.php");
session_start();

if ($conn->connect_error) {
    $_SESSION['message'] = "Database connection failed.";
    header("Location: index.php"); // Replace with your actual page
    exit();
}

$email = isset($_POST['email']) ? trim($_POST['email']) : '';

if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $stmt = $conn->prepare("INSERT INTO newsletter_emails (email) VALUES (?)");
    $stmt->bind_param("s", $email);
    if ($stmt->execute()) {
        $_SESSION['message'] = "Thank you for subscribing!";
    } else {
        $_SESSION['message'] = "Something went wrong.";
    }
    $stmt->close();
} else {
    $_SESSION['message'] = "Please enter a valid email address.";
}

$conn->close();
header("Location: ../index.php"); // Replace with the page where form is
exit();
?>

<?php

$email = $_POST["email"];
$full_name = $_POST["full_name"];
$dob = $_POST["dob"];
$profile_picture = $_POST["profile_picture"];
$user_password = $_POST["user_password"];

$query = $mysqli -> prepare("INSERT INTO users (email, full_name, dob, profile_picture, user_password) VALUE (?, ?, ?, ?, ?)");
$query = bind_param("ssiss", $email, $full_name, $dob, $profile_picture, $user_password);
$query -> execute();

$response = [];
$response["success"] = true;

echo json_encode($response)

?>
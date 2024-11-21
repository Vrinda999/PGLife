<?php
session_start();
require "../includes/database_connect.php";

$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);

$sql = "SELECT * FROM users WHERE email='$email' ANd password = '$password'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $reponse = array("success" => false, "message" => "Somethig Went Wrong!");
    echo json_encode($reponse);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    $reponse = array("success" => false, "message" => "Login Failed! Invalid Wmail or Password :(");
    echo json_encode($reponse);
    return;
}

$row = mysqli_fetch_assoc($result);
$_SESSION['user_id'] = $row['id'];
$_SESSION['full_name'] = $row['full_name'];
$_SESSION['email'] = $row['email'];

$response = array("success" => true, "message" => "Login successful!");
echo json_encode($response);
mysqli_close($conn);
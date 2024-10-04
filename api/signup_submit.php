<?php
require("../includes/database_connect.php");

$full_name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
$college_name = $_POST['college_name'];
$gender = $_POST['gender'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Something Went Wrong!";
    exit;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    echo "This Email ID is Already Registered with Us!";
    exit;
}

$sql = "INSERT INTO users (email, password, full_name, phone, gender, college_name) VALUES ('$email', '$password', '$full_name', '$phone', '$gender', '$college_name'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Something Went Wrong!";
    exit;
}

echo "Your Account has been Created Successfully!";
?>

Click <a href="../index.php">Here</a> to Continue.

<?php
mysqli_close($conn);
?>
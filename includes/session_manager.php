<?php

// Set the timeout duration (10 minutes)
$timeout_duration = 600;            // Unit: Seconds

// Check if `last_activity` is set
if (isset($_SESSION['last_activity'])) {
    // Calculate the session's lifetime
    $elapsed_time = time() - $_SESSION['last_activity'];

    // Destroy Session If expired
    if ($elapsed_time > $timeout_duration) {
        session_unset();                        // Unset session variables
        session_destroy();                      // Destroy the session
        header("Location: logout_page.php?message=SessionExpired"); // Redirect to Homepage

        // echo '<script type="text/javascript">
        // // alert("Session Expired. Log In Again!");
        //     window.onload = function () { alert("Session Expired. Log In Again!"); } 
        // </script>';

        exit();
    }
}

// Update `last_activity` time
$_SESSION['last_activity'] = time();
?>
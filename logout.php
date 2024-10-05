<?php
session_start();                            // Helps Identify the Session.
session_destroy();                          // Helps Destroy the Session.
header("location: index.php");      // Takes User back to the Home Page, This Time, Logged Out.
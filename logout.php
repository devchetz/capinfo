<?php

# Start Session:
session_start();
unset($_SESSION['username']); // Delete the username
session_destroy(); // This would delete all of the session
header('Location: login.php'); // Redirect to login.php

?>
<?php
require 'header.php';
// Destroying the session, can be done either way
session_destroy(); //unset($_SESSION);
// Using refresh to delay the redirect, to display the alert message
header("refresh:3; url=index.php");
require 'footer.php';
?>
<div class="alert alert-danger mx-3" role="alert">
    Logging Out! Redirecting to the main page.
</div>

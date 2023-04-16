<?php
// Starting the session for all pages where data will be transferred
session_start();
?>
<!-- Importing Bootstrap and CSS files -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/main.css" />
<header>
    <nav>
        <ul>
            <!-- Importing the required images -->
            <li><img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt="Hamburger Icon" class="ham" /></li>
            <li>Halifax Canoe and Kayak</li>
            <li><img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png" alt="Logo" /></li>
        </ul>
    </nav>
</header>
<div>
    <!-- Adding the logout button to all pages -->
    <a href="logout.php">
        <input type="submit" id="logout" name="logout" value="Log out" class="btn btn-primary float-end">
    </a>
</div><br><br>

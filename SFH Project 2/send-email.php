<?php require 'header.php'; ?>
<!-- Importing Bootstrap and CSS files -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/main.css" />
<div class="container">
    <?php
    // Checking for different Email types and redirecting accordingly
        if($_SESSION["lostPassData"]){
            echo "<div class='alert alert-info'>Lost Password</div>";
        }
        elseif($_SESSION["newAccData"]){
            echo "<div class='alert alert-info'>New Account</div>";
        }
    ?>
</div>
<?php require 'footer.php';?>

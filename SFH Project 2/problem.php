<?php include 'header.php'; ?>
<!-- Importing Bootstrap and CSS files -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/main.css" />
<div class="container">
    <?php
    // Checking if Session has the Posted data
    if(isset($_SESSION["formPostedData"])){
        $formData = $_SESSION["formPostedData"];
    }
    // Redirecting if Session is empty
    else {
        header("Location: index.php");
    }
    $role = $formData["role"];
    // Checking for different roles and redirecting accordingly
    if($role=="Admin"){
        echo "<div>
                <h1>Hello $role</h1><hr>
                <h2>Here are your options:</h2><br>
                <a href='new-account.php'>Create New Account</a><br><br>
                <a href='isnt-working.php'>My Computer isn't working</a>
             </div>";
    }
    if($role=="Manager"){
        echo "<div>
                <h1>Hello $role</h1><hr>
                <h2>Here are your options:</h2><br>
                <a href='lost-password.php'>Lost Password</a><br><br>
                <a href='isnt-working.php'>My Computer isn't working</a>
             </div>";
    }
    if($role=="Ceo"){
        echo "<div>
                <h1>Hello $role</h1><hr>
                <h2>Here are your options:</h2><br>
                <a href='need-help.php'>Need Help</a><br><br>
                <a href='isnt-working.php'>My Computer isn't working</a>
             </div>";
    }
    ?>
</div>

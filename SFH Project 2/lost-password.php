<?php require 'header.php';?>
<!-- Importing Bootstrap and CSS files -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/main.css" />
<div class="container">
    <h1>So You Lost Your Password</h1><hr>
    <?php
    // Validating the form to check if it's not empty and redirecting it accordingly
    if (count($_POST) > 0){
        if($_POST["lostPassword"] != ""){
            $_SESSION["lostPassData"] = $_POST;
            header("Location: send-email.php");
        }
        else {
            header("Location: lost-password.php");
        }
    }
    ?>
    <!-- Sending form post data to the same page for validation -->
    <form method="post" action="">
        <div class="mb-3 col-4">
            <label for="lostPassword" class="form-label">Enter Email</label>
            <input type="email" name="lostPassword" id="lostPassword" placeholder="Please enter your email" class="form-control" />
        </div>
        <input type="submit" name="sendEmail" id="sendEmail" value="Submit" class="btn btn-primary">
    </form>
</div>
<?php require 'footer.php';?>

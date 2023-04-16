<?php require 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IT Support Form</title>
    <!-- Importing Bootstrap and CSS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/main.css" />
</head>
<body>
<div class="d-flex flex-column align-items-center bg-light bg-gradient">
    <h1>Welcome To Your IT Support System</h1>
    <?php
    // Validating the form to check if it's not empty and redirecting it accordingly
    if(count($_POST) > 0){
        if($_POST["title"] and $_POST["fname"] and $_POST["lname"] and $_POST["role"] != ""){
            $_SESSION["formPostedData"] = $_POST;
            header("Location: problem.php");
        }
        else {
            header("Location: index.php");
        }
    }
    ?>
    <!-- Sending form post data to the same page for validation -->
    <form method="post" action="" class="row row-cols-lg-auto g-1 align-items-center">
        <div class="col-12">
            <label for="title" class="visually-hidden">Title</label>
            <select name="title" id="title" class="form-select">
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
            </select>
        </div>
        <div class="col-12">
            <label for="fname" class="visually-hidden">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="First Name" class="form-control">
        </div>
        <div class="col-12">
            <label for="lname" class="visually-hidden">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Last Name" class="form-control">
        </div>
        <div class="col-12">
            <label for="role" class="visually-hidden">Role</label>
            <select name="role" id="role" class="form-select">
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
                <option value="Ceo">CEO</option>
            </select>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
</body>
<?php require 'footer.php';?>
</html>


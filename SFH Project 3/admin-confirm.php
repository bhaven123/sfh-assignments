<!-- Importing Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php include 'header.php';?>
<!-- Designing the success page -->
<div class="container mt-5 pt-3">
    <h1 class="display-3">Admin - Confirm</h1><hr>
    <p class="text-justify">Data has been added successfully to the DataBase.</p><br><br>
    <!-- Redirecting to index.php to view all adventures -->
    <a href="index.php" class="d-flex flex-column align-items center text-center display-6"><u>View All Adventures</u></a>
</div>
<?php include 'footer.php';?>

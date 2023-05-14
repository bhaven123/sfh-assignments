<?php
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halifax Canoe and Kayak</title>
</head>
<body>
<?php require 'header.php';?>
<!-- Image over text for Canoe image -->
<div class="container">
    <div class="row">
        <div class="col-md-12 position-relative mt-3">
            <img src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg" class="img-thumbnail" alt="Canoe" />
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white"><h1>Come Experience Canada</h1></div>
        </div>
    </div>
    <h1 class="text-center">Upcoming Adventures</h1><hr>
    <div class="row">
        <!-- Fetching data from the database -->
        <?php
        $conn = openConn();
        $sql = "SELECT * from adventures";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<h2 class='text-success'><u>" . $row["heading"] . "</u></h2>" . " <ul class='list-unstyled'><li>Date: " . $row["tripDate"] .
                    "</li><li>Duration: " . $row["duration"] . " days</li></ul>" .
                    " <h3> Summary </h3><p class='text-justify'>" . $row["summary"]. "</p><br>";
            }
        } else {
            echo "0 results";
        }
        closeConn($conn);
        ?>
    </div>
    <!-- Redirecting to admin-add.php -->
    <div class="mb-4 pb-5">
        <a href="admin-add.php" class="btn btn-primary">Add Adventure</a>
    </div>
</div>
    <?php require 'footer.php';?>
</body>
</html>



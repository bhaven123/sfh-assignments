<?php
include 'header.php';
include 'db_connection.php';
// Adding form data to the database
$conn = openConn();
$headingData = $_POST["heading"];
$tripDateData = $_POST["date"];
$durationData = $_POST["duration"];
$summaryData = $_POST["summary"];
$sql = "INSERT INTO adventures(id, heading, tripDate, duration, summary) values (NULL, '$headingData', '$tripDateData', '$durationData', '$summaryData')";
if(count($_POST) > 0){
    if($conn->query($sql) === TRUE){
        header("Location: admin-confirm.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
closeConn($conn);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Creating the form for adding data -->
<div class="d-flex flex-column m-auto align-items-center bg-light bg-gradient">
    <h1 class="display-3">Admin - Add Adventure</h1>
    <hr>
    <form method="post" action="">
        <div class="row mb-3">
            <label for="heading" class="col-sm-2 col-form-label">Heading</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" id="heading" name="heading" class="form-control">
                    <span class="input-group-text">Name of the place</span>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="date" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="date" id="date" name="date" class="form-control">
                    <span class="input-group-text">Trip Date</span>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="duration" class="col-sm-2 col-form-label">Duration</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="number" id="duration" name="duration" class="form-control">
                    <span class="input-group-text">days</span>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="summary" class="col-sm-2 col-form-label">Summary</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <textarea id="summary" name="summary" class="form-control" rows="3"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include 'footer.php';?>
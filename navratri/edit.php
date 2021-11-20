<?php
error_reporting(0);
include "dbConn.php"; // Using database connection file here
$id = $_GET['id']; // get id through query string
$qry = mysqli_query($dbConn,"select * from navratri where id='$id'"); // select query
while ($data = mysqli_fetch_array($qry)){
    ?>
    <h2 style="text-align: center;">Update Data</h2>
    <form method="post" style="margin-top:10px; margin-left: 100px; margin-right: 100px;">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label" value="<?php echo $data['Day']; ?>">Day</label>
                <select name="day" class="form-select" required >
                    <option value="">Select Day...</option>
                    <option value="1">Day 1</option>
                    <option value="2">Day 2</option>
                    <option value="3">Day 3</option>
                    <option value="4">Day 4</option>
                    <option value="5">Day 5</option>
                    <option value="6">Day 6</option>
                    <option value="7">Day 7</option>
                    <option value="8">Day 8</option>
                    <option value="9">Day 9</option>
                    <option value="10">Dussehra</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Description</label>
                <input type="text" class="form-control" value="<?php echo $data['Description']; ?>" name="description" id="description" placeholder="About...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Amount</label>
                <input type="text" class="form-control" value="<?php echo $data['Amount']; ?>" name="amount" id="amount" placeholder="Amount...">
            </div>
            <div class="col-12">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </div>
        </form>
<?php 
} // fetch data
if(isset($_POST['update'])) // when click on Update button
{
$day = $_POST['day'];
$description = $_POST['description'];
$amount = $_POST['amount'];
if(!preg_match('/^[0-9]*$/', $day)) {
echo '<script>alert("Only enter numeric value in amount!"); window.location.href = "navratri.php";</script>';
}
else{
$edit = mysqli_query($dbConn,"update navratri set Day = '$day', Description = '$description', Amount = '$amount' where id='$id'");
if($edit)
{
mysqli_close($dbConn); // Close connection
echo '<script>alert("Updated Successfully!"); window.location.href = "navratri.php";</script>';
exit;
}
else
{
echo '<script>alert("Error in Updating record!"); window.location.href = "navratri.php";</script>';
}
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body style="margin-top: 80px;">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../images/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    Apartment
                </a>
                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="navratri.php">Exit</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--<h2 style="text-align: center;">Update Data</h2>
        <form method="post" style="margin-top:10px; margin-left: 100px; margin-right: 100px;">
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Day</label>
                <select name="day" class="form-select" required value="<?php //echo $data['Day']; ?>">
                    <option value="">Select Day...</option>
                    <option value="1">Day 1</option>
                    <option value="2">Day 2</option>
                    <option value="3">Day 3</option>
                    <option value="4">Day 4</option>
                    <option value="5">Day 5</option>
                    <option value="6">Day 6</option>
                    <option value="7">Day 7</option>
                    <option value="8">Day 8</option>
                    <option value="9">Day 9</option>
                    <option value="10">Dussehra</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Description</label>
                <input type="text" class="form-control" value="<?php //echo $data['Description']; ?>" name="description" id="description" placeholder="About...">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Amount</label>
                <input type="text" class="form-control" value="<?php //echo $data['Amount']; ?>" name="amount" id="amount" placeholder="Amount...">
            </div>
            <div class="col-12">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
            </div>
        </form>-->
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
<div class="row justify-content-center">
<div class="col-md-7">

<div class="card mt-5">
<div class="card-header text-center">
<h4>Hotel SkyCityWorld - Payment Details...</h4>
</div>
<div class="card-body">

<form action="" method="GET">
<div class="row"></div>
<div class="col-md-8">
<input type="text" name="booking_id" value="<?php if(isset($_GET['booking_id'])){echo $_GET['booking_id'];} ?>" class="form-control">
</div>
<div class="col-md-4">
<button type="submit" class="btn btn-primary">Search</button>
</div>
</div>
</form>

<div class="row">
<div class="col-md-12">
<hr>
<?php 
$con = mysqli_connect("localhost","root","","dragonhousedb",3306);


if(isset($_GET['booking_id']))
{
$booking_id = $_GET['booking-id'];
$query = "SELECT * FROM booking WHERE id='$booking_id' ";
$query_run = mysqli_query($con, $query);

if(mysqli_num_rows($query_run) > 0)
{
foreach($query_run as $row)
{
?>


<div class="form-group mb-3">
<label for="">check_in</label>
<input type="text" value="<?= $row['check_in']; ?>" class="form-control">
</div>

<div class="form-group mb-3">
<label for="">check_out</label>
<input type="text" value="<?= $row['check_out']; ?>" class="form-control">
</div>

<div class="form-group mb-3">
<label for="">person</label>
<input type="text" value="<?= $row['person']; ?>" class="form-control">
</div>

<div class="form-group mb-3">
<label for="">email</label>
<input type="text" value="<?= $row['email']; ?>" class="form-control">
</div>

<div class="form-group mb-3">
<label for="">room</label>
<input type="text" value="<?= $row['room']; ?>" class="form-control">
</div>

<div class="form-group mb-3">
<label for="">total_days</label>
<input type="text" value="<?= $row['total_days']; ?>" class="form-control">
</div>

<div class="form-group mb-3">
<label for="">total_bill</label>
<input type="text" value="<?= $row['total_bill']; ?>" class="form-control">
</div>

<?php
}
                                        
}
else
{
echo "No Record Found";
}
}
                                   
?>

</div>
</div>

</div>
</div>

</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
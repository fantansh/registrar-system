<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>College Register</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="../../content/bootstrap/css/bootstrap.min.css">
</head>
<body>
 <script src="../../content/js/jquery-3.5.1.min.js"></script>
 <script src="../../content/bootstrap/js/bootstrap.min.js"></script>
 <div class="container">
 <div class="row col-md-6 col-md-offset-3">
 <div class="panel panel-primary">
 <div class="panel-heading txtt-center">
 <h3>College Registration Form</h3>
 </div>
 <div class="panel-body">
 <form action="register.php" method="POST">
 <div class="form-group">
 <label for="txtName">College</label>
 <input class="form-control" type="text" id="txtName" name="txtName" placeholder="College">
 </div>
<div class="form-group">
 <label for="txtPhone">Phone</label>
 <input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Phone">
 </div>
 <div class="form-group">
 <input type="submit" value="Save" name="submit" class="btn
btn-primary" />
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</body>
</html>
<?php
require '../../core/College.php';
$txtName = $_POST['txtName'];
$txtPhone = $_POST['txtPhone'];
$college = new College();
$college->setName($txtName);
$college->setPhone($txtPhone);
$is_success = $college->register($college);
if ($is_success == true) {
 echo "Record saved successfully.";
} else {
 echo "Sorry, Something went wrong. Try again.";
}
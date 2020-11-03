<?php
// Include database connection file
require_once "conn.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set  name='" . $_POST['name'] . "', mobile='" . $_POST['mobile'] . "' ,email='" . $_POST['email'] . "' ,birthdate='" . $_POST['birthdate'] . "' WHERE id='" . $_POST['id'] . "'");
header("location: index.php");
exit();
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<?php include "head.php"; ?>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="page-header">
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>" maxlength="50" required="">
</div>
<div class="form-group ">
<label>Email</label>
<input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>" maxlength="30" required="">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="mobile" name="mobile" class="form-control" value="<?php echo $row["mobile"]; ?>" maxlength="12"required="">
</div>
<div class="form-group">
<label>Birthdate</label>
<input type="birthdate" name="birthdate" class="form-control" value="<?php echo $row["birthdate"]; ?>" maxlength="12"required="">
</div>
<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="index.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div>  
</div>
</body>
</html>
<?php
include ("conn.php");
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
	 $birthdate = $_POST['birthdate'];
 
     $sql = "INSERT INTO student (name,email,mobile,birthdate)
     VALUES ('$name','$email','$mobile',$birthdate)";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<?php
include_once 'conn.php';
$sql = "DELETE FROM student WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
header("location: index.php");
exit();
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
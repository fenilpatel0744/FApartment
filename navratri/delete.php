<?php
include "dbConn.php";
$id = $_GET['id'];
$del = mysqli_query($dbConn,"delete from navratri where id = '$id'");
if($del)
{
mysqli_close($dbConn);
echo '<script>alert("Deleted Successfully!"); window.location.href = "navratri.php";</script>';
exit;
}
else
{
echo '<script>alert("Error in Deleting record!"); window.location.href = "navratri.php";</script>';
}
?>
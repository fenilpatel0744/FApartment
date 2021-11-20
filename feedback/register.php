<?php
// Turn off all error reporting
//error_reporting(0);
?>
<?php
include("../dbConn.php")
?>

<?php
$sname= "localhost";
		$uname= "root";
		$password = "";
		$db_name = "appt_website";
		$conn = mysqli_connect($sname, $uname, $password, $db_name);
		if (!$conn) {
			echo "<br>"."Starting Connection failed!";
		}
$rating = $_POST['rating'];
$name = $_POST['name'];
$email = $_POST['email'];
$feedback_txt = $_POST['suggestion'];

/*
function checkEmail($email) {
    //$email = mysqli_real_escape_string($email);
    $sql = mysqli_query("SELECT * FROM feedback_form WHERE email='$email'");
    if (mysqli_num_rows($sql) == 0) {
        return true;
    }
    return false;
}
if (checkEmail($_POST['email'])) {
    echo "hello";
} else {
    echo "Oops";
}*/


if(isset($_POST['submit']))
{
		if (empty($_POST['rating'])) 
		{
			echo '<script>alert("Please select a rating"); window.location.href = "index.php";</script>';
		}
		else if (empty($_POST['name'])) 
		{
			echo '<script>alert("Please enter a name"); window.location.href = "index.php";</script>';
		}
		else if (!preg_match ("/^[a-zA-Z-' ]*$/", $name) ) 
		{
	  		echo '<script>alert("Please enter a valid name"); window.location.href = "index.php";</script>';
		}
		else if (empty($_POST['email'])) 
		{
			echo '<script>alert("Please enter an email"); window.location.href = "index.php";</script>';
		}
		else if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
		{ 
			echo '<script>alert("Please enter a valid email"); window.location.href = "index.php";</script>';
		}
		/*else if (!checkEmail($_POST['email'])) 
		{
    		echo '<script>alert("Email is already exists"); window.location.href = "index.php";</script>';
		}*/
		else if (empty($_POST['suggestion'])) 
		{
			echo '<script>alert("Please enter a comment"); window.location.href = "index.php";</script>';
		}
		else
		{	
			$query ="insert into `feedback_form` (`Name`, `Email Id`, `Rating`, `Feedback`)values('$name', '$email', '$rating', '$feedback_txt')";
			$result = mysqli_query($conn, $query);
			if (!$result) 
			{
				echo '<script>alert("Email id is already exists or connection failed"); window.location.href = "index.php";</script>';
			}
			else
			{
				echo '<script>alert("Thank you for your feedback!"); window.location.href = "../index.php";</script>';
			}
		}
}
?>
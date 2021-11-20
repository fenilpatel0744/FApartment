<?php
$sname= "localhost";
$uname= "root";
$password = "";
$db_name = "appt_website";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
/*if (!$conn) {
echo "<br>"."Starting Connection failed!";
}
else{
echo "<br>"."Success";
}*/
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Display</title>
    <style>
    body{
    margin-top: 50px;
    background-color: #d1d1d1;
    }
    h3{
    text-align:center;
    }
    table {
    margin-left: auto;
    margin-right: auto;
    background-color: #f5eca2;
    }
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
    }
    td{
    padding: 5px 10px 5px 10px;
    }
    img{
    width: 100px;
    height: 100px;
    }
    </style>
    
  </head>
  <body>
    <h3>Display information from database</h3>
    <table>
      <tr>
        <td><b>Id</b></td>
        <td><b>Name</b></td>
        <td><b>Email Id</b></td>
        <td><b>Rating</b></td>
        <td><b>Feedback</b></td>
      </tr>
      <?php
      $records = "select * from feedback_form"; // fetch data from database
      $res = mysqli_query($conn, $records);
      
      while($data = mysqli_fetch_array($res))
      {
      ?>
      <tr>
        <td><?php echo $data['Id']; ?></td>
        <td><?php echo $data['Name']; ?></td>
        <td><?php echo $data['Email Id']; ?></td>
        <td><?php echo $data['Rating']; ?></td>
        <td><?php echo $data['Feedback']; ?></td>
      </tr>
      <?php
      }
      ?>
    </table>
  </body>
</html>
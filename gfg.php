<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);


$con = mysqli_connect('localhost', 'root', '', 'sm_system');

if (!$con) {
  die('Could not connect: ');
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM userdata WHERE user_id= '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo'
    First Name: <input type="text" value=' . $row['first_name'] . '>
    Last Name: <input type="text" value=' . $row['last_name'] . '>';

}
echo "</table>";
mysqli_close($con);
?>


</body>
</html>












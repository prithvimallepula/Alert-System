<html>
<body>
<?php
$host='localhost';
$user='root';
$pass='';
$db='alert';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
echo 'connected successfully';
	$sql="insert into members(number,carrier) VALUES
('$_POST[fname]','$_POST[lname]')";";
    $query=mysqli_query($con, $sql);
if($query)
echo 'data successfully entered';

?>
</html>
</body>

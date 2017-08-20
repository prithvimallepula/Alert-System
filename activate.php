<html>
<body>
 
 
<?php

$con = mysql_connect("localhost", "root","");

 
mysql_select_db("test1", $con);
$selected_val = $_POST['status'];
$check = "select count(*) from nametable WHERE number1=$_POST[num1] AND number2=$_POST[num2] AND number3=$_POST[num3]";
$check2=mysql_query($check);
$check_dupes= mysql_fetch_array($check2);
$tot = $check_dupes[0];


if(($tot>=1) && ($selected_val!='unsubscribe')){
echo "You have already subscribed";
}

else{
 

if($selected_val == 'unsubscribe')
{
$unsub="DELETE FROM nametable
WHERE number1=$_POST[num1] AND number2=$_POST[num2] AND number3=$_POST[num3]";
mysql_query($unsub, $con);

echo "You have successfully unsubsribed";

}	


else{
$sql="INSERT INTO nametable (number1, number2, number3, carrier)
VALUES
('$_POST[num1]','$_POST[num2]', '$_POST[num3]', '$_POST[name]')";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "Thank you!</br>You have successfully enrolled in NJIT's Text-Message Emergency Alert Service.</br></br>Have a nice day";}
mysql_close($con);
}
?>
</br>
</br>

<a href="signup.html"> Go Back
</body>
</html>

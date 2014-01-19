<?php
$con=mysqli_connect("localhost","user","","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO question (SNO, question, answer)
VALUES
('$_POST[SNO]','$_POST[question]','$_POST[answer]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
else
{
print "<script type=\"text/javascript\">";
print "alert('successfully added')";


print "</script>"; 

}
mysqli_close($con);
?> 

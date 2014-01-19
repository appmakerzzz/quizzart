<?php
$con=mysqli_connect("localhost","user","","test");
//echo $con;
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//echo $_POST['answer'];


$answer=$_POST['answer'];
$count = "SELECT count(*) from question";
$result=$con->query($count) ;
$temp = $result->fetch_row();
$re=$temp[0];



//$row=$temp[0];
//$row=mysqli_fetch_row($count);
//$sql="INSERT INTO question values ('NULL','','','$student_answer') where SNO = $count ";

$sql="update question set student_answer='$answer' "; 
//where SNO=$row;
$re=$con->query($sql);

//if (!mysqli_query($con,$sql))
  //{
 // die('Error: ' . mysqli_error($con));
 // }
//else
//{
print "<script type=\"text/javascript\">";
print "alert('successfully submmited your answer')";
print "</script>";

//}
mysqli_close($con);
?>


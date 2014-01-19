<?php

$con=mysqli_connect("localhost","user","","test");
$sql = 'SELECT * FROM question';
if (!$sql){
echo 'could not connect' . mysqli_error();
exit;
}

$result = mysqli_query($con,$sql);
if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
 //   exit;
}

$rows = mysqli_num_rows(mysqli_query($con, "SELECT * from question"));
while($row=mysqli_fetch_assoc($result)) {
echo "  $row[SNO] - $row[question] <br>";
}
?>

<form  action="insert2.php" method="post">
Your Answer: <input type="text" name="answer" id="answer"><br>
<input type="submit" value="Submit">
</form>


<?php
/*
$ans=$_GET['answer'];

$query = mysqli_query($con,"SELECT answer FROM question");
$result = mysqli_fetch_row($query);
echo $result;

$score=0;
if(strcmp($result['answer'],"ans")==0)
{
        $score=$score+1;
}
echo $score;
*/
?>


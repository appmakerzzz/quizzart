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

echo "<table border='1'>
<tr>
<th>sno</th>
<th>question</th>
<th>correct answer</th>
<th>student answer</th>
</tr>";

while($row=mysqli_fetch_assoc($result)) {

 echo "<tr>";
 echo "<td>" . $row['SNO'] . "</td>";
 echo "<td>" . $row['question'] . "</td>";
 echo "<td>" . $row['answer'] . "</td>";
 echo "<td>" . $row['student_answer'] . "</td>";
 echo "</tr>";

}
?>


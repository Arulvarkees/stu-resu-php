<?php
$link=mysqli_connect("localhost","root","","SRMS");
if($link===false)
{
die("ERROR:Could not connect.".mysqli_connect_error());
}
$rn=$_POST['T1'];
$exam=$_POST['MyMenu'];
$sql="SELECT* FROM $exam where Rollno=$rn";
if($result=mysqli_query($link,$sql))
{
if(mysqli_num_rows($result)>0)
{
echo "<table border=2>";
echo "<tr>";
echo "<th>Roll_no</th>";
echo "<th>C</th>";
echo "<th>JAVA</th>";
echo "<th>HTML</th>";
echo "<th>Python</th>";
echo "</tr">
while($row=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['Rollno']."</td>";
echo "<td>".$row['C']."</td>";
echo "<td>".$row['Java']."</td>";
echo "<td>".$row['HTML']."</td>";
echo "<td>".$row['Python']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($result);
}
else
{
echo "Ni records matching your query were found";
}
}
else
{echo "ERROR:Could not able to execute $sql.".mysqli_error($link);
}
mysqli_close($link);
?>
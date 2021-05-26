<html>
<body bgcolor="cyan">
<center>
<?php
$un=$_POST['UN'];
$exam=$_POST['PW'];
if($un=="admin" && $pw=="1234admin")
{
echo "<h1>Welcome Admin</h1>";
echo "<hr>";
echo "<a href="http://localhost/project/addstud.php">Add Student</a>";
echo "<a href="http://localhost/project/update.php">Update</a>";
echo "<a href="http://localhost/project/views.php">View Result</a>";
echo "<button onclick="http://localhost/project/login.php">Back</button>"
}
else
{
echo "Invalid";
}
?>
</center>
</body>
</html>
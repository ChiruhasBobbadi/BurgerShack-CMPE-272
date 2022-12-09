<?php require "dbconnect.php"?>

<?php
$sql = "SELECT * FROM products order by count desc limit 5";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$users = $row["name"]." ".$row["count"]." Views";
while($row = $result->fetch_assoc()){
    $users = $users.",".$row["name"]." ".$row["count"]." Views";
}
echo $users;
?>
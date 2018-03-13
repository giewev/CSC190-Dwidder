<?php
$user = $_POST['user'];
$comment = $_POST['comment'];
$timestamp = date("Y-m-d H:i:s");
$img = rand(1, 10);

$conn = mysql_connect("localhost", "root", "goodyear123!@#");
if (!$conn)
{
	echo "Failed";
	die("Failed");
}

mysql_select_db("dwidder", $conn);
$q = "insert into posts(user, comment, timestamp, img_id)
values('".$user."', '".$comment."', '".$timestamp."', ".$img.")";
$response = mysql_query($q, $conn);

mysql_close($conn);

?>

<?php
$conn = mysql_connect("localhost", "root", "goodyear123!@#");
if (!$conn)
{
	echo "Failed";
}

mysql_select_db("dwidder", $conn);
$q = "select * from posts";
$response = mysql_query($q, $conn);

while ($row = mysql_fetch_assoc($response))
{
	echo "user: ".$row["user"]." comment: ".$row["comment"]." time: ".$row["timestamp"]." pic: ".$row["img_id"]."<br>";
}

mysql_close($conn);

?>

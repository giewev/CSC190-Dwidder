<?php
$conn = mysql_connect("localhost", "root", "goodyear123!@#");
if (!$conn)
{
	echo "Failed";
}

mysql_select_db("dwidder", $conn);
$q = "insert into posts(user, comment, timestamp, img_id)
values('Ian', 'looks good', '2018-03-10 2:13:00', 1)";
$response = mysql_query($q, $conn);

mysql_close($conn);
echo "Success";

?>

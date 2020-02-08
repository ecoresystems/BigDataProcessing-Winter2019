<?php
$con =
mysqli_connect('localhost','www-data','www-data','big_data_processing_2019w');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"big_data_processing_2019w");
$sql="SELECT * FROM `course_material_links` ORDER BY `course_material_links`.`lecture_serial` DESC";
$result = mysqli_query($con,$sql);
$jsonData = json_encode($result->fetch_all(MYSQLI_ASSOC));
echo $jsonData;
mysqli_close($con);
?>

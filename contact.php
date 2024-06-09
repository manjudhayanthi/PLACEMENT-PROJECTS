<?php
$link = mysqli_connect("localhost", "root", "", "contact");
if($link == false){
die ("ERROR: Could not connect.". mysqli_connect_error());
}
$sql = "INSERT INTO details (name,email,subject,message)
VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
if (mysqli_query($link, $sql)){
 echo "record added successfully";
}
else {
echo "Error". mysqli_error($link);
}
mysqli_close($link);
?>


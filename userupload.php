
<?php
$db = mysqli_connect("localhost", "root", "", "medical");
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$imagename = $_POST['imagename'];
$image =$_POST['image64'];
$UserId = $_POST['UserId'];
$sql = ("UPDATE users SET image='$image'  WHERE UserId=$UserId");
mysqli_query($db, $sql);

//shell_exec(" $UserId")

?>
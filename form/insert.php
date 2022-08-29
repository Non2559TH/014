<?php
$name = $_POST["txt_name"];
echo $name,"<br>";

$Fname = $_POST["txt_Fname"];
echo $Fname,"<br>";

$Lname = $_POST["txt_Lname"];
echo $Lname,"<br>";

$sex = $_POST["sex"];
echo $sex,"<br>";

$birthdate = $_POST["txt_birthdate"];
echo $birthdate,"<br>";

$address = $_POST["txt_address"];
echo $address,"<br>";

$tel = $_POST["tel"];
echo $tel,"<br>";

$email = $_POST["email"];
echo $email,"<br>";

include("config.inc.php");
echo "<br>";

$sql = "INSERT INTO tbl_member (id, Name , Fname , Lname , Sex , Birthdate , Address , Tel , Email ) VALUES (' ', '$name','$Fname','$Lname','$sex','$birthdate','$address','$tel' ,'$email')";

if(mysqli_query($conn, $sql)) {
    echo "เพิ่มข้อมูลสำเร็จ";
}else{
    echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn -> close();
?>
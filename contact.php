<?php
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$massage = $_POST['experience'];

$conn = mysqli_connect("localhost","root","","test");
if (!$conn) {
    die("Couldn't connect to MySQL database");
}
$sql = "INSERT INTO `contact` (`Fname`, `Lname`, `email`, `phone`, `massage`) VALUES ('$fname', '$lname', '$email', '$phone', '$massage');";
$res = mysqli_query($conn,$sql);
if ($res) {
    
    header("location:contact.html");
}
?>
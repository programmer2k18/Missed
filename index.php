<?php
include("classes/verficationControler.php"); 

$firstname = $_POST['Fname'];
$lasttname = $_POST['Lname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirmpass = $_POST['confirmPassword'];
$age = $_POST['age'];
$bdate = $_POST['bdate'];
$gender = $_POST['gender'];

$mycontrol = new verficationControler();
$mycontrol->setUserData($firstname,$lasttname,$email,$pass,$confirmpass,$age,$gender,$bdate);

if($mycontrol->validateData()){
    $mycontrol->InsertUser();
    
}
else
{
    echo "<h1>Error in saving this acount</h1>";
}
?>
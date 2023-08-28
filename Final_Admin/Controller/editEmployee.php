<?php
require("../Model/db.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$mid= $_POST['id'];
	$name = $_POST["name"];
    $salary = $_POST["salary"];
    $type = $_POST["type"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    editEmployee($mid, $name,$salary,$type,$phone,$address);
	
    header("location: ../View/dashboard.php");
}

?>

<?php
require("../Model/db.php");

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST["name"];
    $salary = $_POST["salary"];
    $type = $_POST["type"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    if($name==""|| $phone=="" || $address=="" || $salary=="" || $type=="")
    {
        
        header("Location: ../View/adEmployee.php");
    }
    else
    {
        employeeAdd($name,$salary, $type, $phone, $address);
    header("location: ../View/dashboard.php");
    } 
       

}
?>
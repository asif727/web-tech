<?php
require("../Model/connection.php");
session_start();
function auth($username, $password) {
    $ezl = getConnection();
    $sql = "SELECT * FROM users";
    $row = $ezl->query($sql);

    if ($row->num_rows > 0) {
        while ($registrations = $row->fetch_assoc()) {
            if ($registrations['username'] == $username and $registrations['password'] == $password) {
                $_SESSION['username']=$registrations['username'];
                return true;
            }
            else
                return false;
        }
    }
    return false;
}
function dashboardView() {
    $conn = getConnection();
$sql = "SELECT * FROM `employee` ";
$result = $conn->query($sql);
return $result;
    
}
function employeeAdd($name,$salary,$type, $phone, $address) {
    $conn = getConnection();
    $sql = "INSERT INTO `employee` (name,salary,type,phone,address) VALUES ('$name','$salary','$type','$phone','$address')";
    $conn->query($sql);
}

function editEmployee($mid, $name,$salary, $type, $phone, $address) {
    $conn = getConnection();
    $sql="UPDATE `employee` set name='$name', salary='$salary', type='$type', phone='$phone', address='$address' WHERE m_id='$mid'";
    $conn->query($sql);
}
function getEditMember($id){
    $conn = getConnection();
    $sql = "SELECT * FROM `employee` WHERE m_id = $id";
    $result = $conn->query($sql)->fetch_assoc();
    return $result;
}


function deleteEmployee($id) {
    $conn = getConnection();
    $sql = "DELETE FROM `employee` WHERE m_id = $id";
    $conn->query($sql);
}


function confirmDeleteMember($id) {
    $conn = getConnection();
    $sql = "SELECT * FROM `employee` WHERE m_id = $id";
    $result = $conn->query($sql)->fetch_assoc();
    return $result;
}


?>
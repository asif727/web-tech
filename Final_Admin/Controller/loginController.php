<?php
require "../Model/db.php";
$username = $password = "";
$isEmpty = $isValid = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function test($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test($_POST["username"]);
    $password = test($_POST["password"]);

    if (empty($username))
        $isEmpty = true;

    if (empty($password))
        $isEmpty = true;

    if (!$isEmpty) {
        $isValid = auth($username, $password);

        if($isValid) {
            header("Location: ../View/dashboard.php");
        }

        if (!$isValid) {
            header("Location: ../View/login.php");
            setcookie('error', "*Username and Password Incorrect!<br><br>", time() + 1, "/");
        }
    } else {
        header("Location: ../View/login.php");
        setcookie('error', "*Please input  Username and Password<br><br>", time() + 1, "/");
    }
}
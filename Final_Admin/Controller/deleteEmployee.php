
<?php
require("../Model/db.php");

if(isset($_GET["id"])) {
    $id = $_GET["id"];
    deleteEmployee($id);
  
    
    header("location: ../View/dashboard.php");
}
?>
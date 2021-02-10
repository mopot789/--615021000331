<h5>Insert</h5>

<?php
    require_once("dbcon.php");
    $sql = "INSERT INTO cinema (cinema_id,cinema_name,cinema_time,cinema_username,cinema_pin)
    VALUES ('{$_POST['cinema_id'])','{$_POST['cinema_name']),'{$_POST['cinema_time'])','{$_POST['cinema_username'])','{$_POST['cinema_pin']}')";

?>
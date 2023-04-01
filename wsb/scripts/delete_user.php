<?php
//print_r($_GET);
//var_dump($_GET);


require_once "./connect.php";
 $sql ="DELETE FROM users WHERE `users`.`id` = $_GET[userIdDelete]";
//$sql ="DELETE FROM users WHERE `users`.`firstname` = 'Janusz'";
$conn->query($sql);

echo $conn->affected_rows;

if ($conn->query($sql) == 0){
    header("location: ../3_db/3_db_table_delete.php?userDelete=0");
    } else {
        header("location: ../3_db/3_db_table_delete.php?userDelete=$_GET[userIdDelete]");
    }


?>
<?php
include_once('../dbcon.php');

if(!isset($_POST['Name']))
    exit();

$link->query("INSERT INTO `Shelf`(`Name`) VALUES ('" . $_POST['Name'] . "')");

$id = mysqli_insert_id($link);

$result = $link->query("SELECT * FROM Shelf Where ID = " . $id);

while($row = $result->fetch_assoc()){
     echo "<li onclick='shelf.get(". $row["ID"] .")'>";
     echo $row["Name"];
     echo "</li>";
}

?>
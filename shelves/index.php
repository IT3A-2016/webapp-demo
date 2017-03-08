<?php
include_once('../dbcon.php');
$result = $link->query("SELECT * FROM Shelf");

while($row = $result->fetch_assoc()){
     echo "<li onclick='shelf.get(". $row["ID"] .")'>";
     echo $row["Name"];
     echo "</li>";
 }

?>
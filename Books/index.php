<?php
include_once('../dbcon.php');

$query = "SELECT * FROM Book";

if(isset($_GET['ShelfID']))
    $query .=  " WHERE ShelfID = " . $_GET["ShelfID"];

$result = $link->query($query);

while($row = $result->fetch_assoc()){
     echo "<li onclick='book.get(".$row["ID"].")'>";
     echo "<div class='title'>". $row["Name"] . '</div>';
     echo "<div class='sub-title'>". $row["Author"] . '</div>';
     echo "</li>";
 }

?>
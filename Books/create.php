<?php
include_once('../dbcon.php');

if(!isset($_POST['Name']) || !isset($_POST['Author']) || !isset($_POST['Content']) || !isset($_POST['ShelfID']))
    exit();

$query = "INSERT INTO `Book`(`Name`, `Author`, `Content`, `ShelfID`) VALUES ('" . $_POST['Name'] . "', '" . $_POST['Author'] . "','" . $_POST['Content'] . "'," . $_POST['ShelfID'] . ")";

$result = $link->query($query);
$id = mysqli_insert_id($link);

$result = $link->query("SELECT * FROM Book Where ID = " . $id);

while($row = $result->fetch_assoc()){
      echo "<li onclick='book.get(".$row["ID"].")'>";
      echo "<div class='title'>". $row["Name"] . '</div>';
      echo "<div class='sub-title'>". $row["Author"] . '</div>';
      echo "</li>";
}

?>
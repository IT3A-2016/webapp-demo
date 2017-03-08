<?php
include_once('../dbcon.php');

$query = "SELECT * FROM Book";

if(isset($_GET['ID']))
    $query .=  " WHERE ID = " . $_GET["ID"];

$result = $link->query($query);

$row = $result->fetch_assoc();


?>

<div id="book" flex>

    <div class="book-title">
        <div class="title"><?php echo $row["Name"] ?></div>
        <div class="sub-title"><?php echo $row["Author"] ?></div>
    </div>
    <div class="content-container scroll animated fadeInDown">
        <div class="book-content">
            <?php echo $row["Content"] ?>
        </div>
    </div>

</div>
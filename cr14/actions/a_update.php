<?php
require_once '../dbconnect.php';
if($_POST) {

    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_type = $_POST['event_type'];
    $event_description = $_POST['event_description'];
     $id = $_POST['event_id'];

    $sql = "UPDATE events SET event_name = '$event_name', event_date = '$event_date', event_type = '$event_type', event_description = '$event_description' WHERE event_id = {$id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $conn->error;
    }
    $conn->close();
}
?>
<?php
require_once '../dbconnect.php';
if($_POST) {
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_type = $_POST['event_type'];
    $event_description = $_POST['event_description'];
    $sql = "INSERT INTO events (event_name, event_date, event_type, event_description) VALUES ('$event_name', '$event_date', '$event_type', '$event_description')";
    if($conn->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
    $conn->close();
}
?>
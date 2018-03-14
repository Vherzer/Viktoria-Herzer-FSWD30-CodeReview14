<?php
require_once 'dbconnect.php';

if($_GET['event_id']) {
    $id = $_GET['event_id'];
    $sql = "SELECT * FROM events WHERE event_id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    $connect->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Event</title>
</head>
<body>
<h3>Do you really want to delete this event?</h3>
<form action="actions/a_delete.php" method="post">
    <input type="hidden" name="event_id" value="<?php echo $data['event_id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="index.php"><button type="button">No, go back!</button></a>

</form>
</body>
</html>
<?php
}
?>
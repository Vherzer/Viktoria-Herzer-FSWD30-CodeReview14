<?php
require_once 'dbconnect.php';
if($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM events WHERE event_id = {$id}";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    $conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
        table tr th {
            padding-top: 20px;
        }
    </style>
</head>
<body>
<fieldset>
    <legend>Update Event</legend>
    <form action="actions/a_update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Event Name</th>
                <td><input type="text" name="event_name" placeholder="Event Name" value="<?php echo $data['event_name'] ?>" /></td>
            </tr>     
            <tr>
                <th>Event Date</th>
                <td><input type="text" name="event_date" placeholder="Format:YYYY-DD-MM HH:MM:SS" value="<?php echo $data['event_date'] ?>" /></td>
            </tr>
            <tr>
                <th>Genre</th>
                <td><input type="text" name="event_type" placeholder="Genre" value="<?php echo $data['event_type'] ?>" /></td>
            </tr>
             <tr>
                <th>Event Description</th>
                <td><input type="text" name="description" placeholder="Description" value="<?php echo $data['description'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>
<?php
}
?>
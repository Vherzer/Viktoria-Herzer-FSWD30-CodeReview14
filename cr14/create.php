<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD  |  Add User</title>
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
    <legend>Add Event</legend>
    <form action="actions/a_create.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Event Name</th>
                <td><input type="text" name="event_name" placeholder="Event Name" /></td>
            </tr>     
            <tr>
                <th>Event Date</th>
                <td><input type="date" name="event_date" placeholder="Format:YYYY-DD-MM HH:MM:SS" /></td>
            </tr>
            <tr>
                <th>Genre</th>
                <td><input type="text" name="event_type" placeholder="Genre" /></td>
            </tr>
               <tr>
                <th>Event Description</th>
                <td><input type="text" name="description" placeholder="Event Description" /></td>
            </tr>  
            <tr>
                <td><button type="submit">Insert Event</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>
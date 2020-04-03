<html>
<body>

<form id="edit">

    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>

<?php
    $username = 'guest';
    if($username == 'admin') {
        print 'Delete: 
        <input type="checkbox" name="delete" value="Y"><br>';
    }
?>
    <input type="submit" value="Submit">

</form>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<?php

if (isset($_POST['form1'])) {

    echo $_REQUEST['name'];
    echo $_REQUEST['email'];

}


?>

<body>

    <!-- same page result -->
    <form action="" method="post">
        <div>Name:</div>
        <div>
            <input type="text" name="name">
        </div>


        <div>Email:</div>
        <div>
            <input type="email" name="email">
        </div>

        <div>
            <input type="submit" value="Submit" name="form1">
        </div>
    </form>

</body>

</html>
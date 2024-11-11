<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_REQUEST['message'])) {
    if ($_REQUEST['message'] == "success") {
        echo "Successfull";
    } else {
        echo "error";
    }
}
?>

<body>

    <!-- same page result -->
    <form action="result.php" method="post">
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
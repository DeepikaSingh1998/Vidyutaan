<!DOCTYPE html>
<html>

<head>
    <title>Meter Info</title>
    <link rel="stylesheet" href="meter_style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device width">

</head>

<body>
<div class="whole">
</div>
    <div class="form">
        <p> Please enter your meter information</p>
        <form action="meter_info_insert.php" method="POST">
            <p>UMI</p>
            <input type="text" name="meter_id">
            <p>Date of installation</p>
            <input type="date" name="installation" placeholder="yyyy-mm-dd">
            <input type="submit" name="submit" placeholder="Submit">
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Payment details</title>
    <link rel="stylesheet" href="paydet.css">
</head>

<body>
    <div class="whole">
        <div class="form">
            <form action="pay_insert.php" method="POST">
                <h2>Payment Details</h2>
                <!-- <div class="close-button">
                <div></div>
                <div></div>
            </div>-->
                <p>Bank</p>
                <input type="text" name="bank">
                <p>Branch</p>
                <input type="text" name="branch">
                <p>Account Number</p>
                <input type="text" name="account">
                <input type="submit" name="submit" placeholder="Submit">
            </form>
        </div>
    </div>
</body>

</html>
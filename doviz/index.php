<?php
// if ($_SERVER["REMOTE_ADDR"] !== "78.189.161.131") {
//     http_response_code(400);
//     exit();
// }
require_once("conn.php");

$sql = "SELECT * FROM doviz";
$result = $conn->query($sql);

$result->num_rows;
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizyonveri Kur</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

        body {
            font-family: 'Montserrat';
        }
    </style>
</head>

<body style="overflow: hidden !important; padding-top:18px; color:white; display:flex;align-items:center; font-size: 14px; height: 17px !important;">
    <p>$ <?= $row["dolar"] ?></p>
    <p style="margin-left: 5px;">€ <?= $row["euro"] ?></p>

</body>

</html>
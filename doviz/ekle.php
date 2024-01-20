<?php
// if ($_SERVER["REMOTE_ADDR"] !== "78.189.161.131") {
//     http_response_code(400);
//     exit();
// }
require_once("conn.php");

$sql = "SELECT *FROM doviz";
$result = $conn->query($sql);

$result->num_rows;
$row = $result->fetch_assoc();



if (isset($_POST['send'])) {
    $dolar = $_POST['dolar'];
    $euro = $_POST['euro'];

    echo $dolar . $euro;

    $sorgu = "UPDATE doviz SET dolar = '" . $dolar . "' , euro = '" . $euro . "' ";

    if ($conn->query($sorgu) === TRUE) {
        header("Location: ekle.php");
    }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kur Ekle</title>
</head>

<body>
    <form action="" method="POST">
        <label for="fname">Dolar:</label><br>
        <input type="text" id="fname" name="dolar" value="<?= $row["dolar"] ?>"><br>
        <label for="lname">Euro:</label><br>
        <input type="text" id="lname" name="euro" value="<?= $row["euro"] ?>"><br><br>
        <input type="submit" name="send" value="Gönder">
    </form>
</body>

</html>
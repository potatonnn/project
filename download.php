<!DOCTYPE html>
<html>
<head>
    <title>YOUR QR CODE</title>
</head>
<body>

<div class ="container"> 
<table class="table"> 
<thead>
    <tr>
        <th>QR CODE</th>
    </tr>
</thead> 
<tbody> 
<?php
$conn = new mysqli("localhost","root","","dbqrcode");
    $sql = $conn->query("SELECT*FROM db_table");
    while ($resl = $sql->fetch_array()) {
        ?>
        <tr>
            <td><img src="gqrcode/<?=$resl['qrcode']?>" alt="" width="100"></td>
        </tr>
        <?php
}
?>
</tbody>
</table>
</div>
</body>
</html>


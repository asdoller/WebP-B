<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Select Page</title>
    <link rel="stylesheet" href="select_page.css">
</head>

<?php
function h($str) { return htmlspecialchars($str, ENT_QUOTES, "UTF-8"); }

$pdo = new PDO("sqlite:wpb.sqlite");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$st = $pdo->query("select * from situation;");
$data = $st->fetchAll();
?>

<body>
  <h1>Select Page</h1>
    <form action="select_page.php" method="get">
    Temparature<br>
    <select name="temp">
    <option value="-5">BELOW 5℃</option>
    <option value="5-10">5℃~10℃</option>
    <option value="10-15">10℃~15℃</option>
    <option value="15-20">15℃~20℃</option>
    <option value="20-25">20℃~25℃</option>
    <option value="25-30">25℃~30℃</option>
    <option value="30-">OVER 30℃</option>
    </select> <br>
    Weather<br>
    <select name="weather">
    <option value="sunny">☀︎SUNNY</option>
    <option value="cloudy">☁︎CLOUDY</option>
    <option value="rainy">☔︎RAINY</option>
    </select><br><br>
    <input type="submit" value="SEND"><br>
    </form>
</body>

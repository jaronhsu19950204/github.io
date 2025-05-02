<meta charset="utf-8">
<?php
include("db.php");

$movie_id = $_POST['movie_id'];
$name = $_POST['name'];
$tickets = $_POST['tickets'];

$stmt = $conn->prepare("INSERT INTO bookings (movie_id, name, tickets) VALUES (?, ?, ?)");
$stmt->bind_param("isi", $movie_id, $name, $tickets);
$stmt->execute();

echo "<!DOCTYPE html><html lang='zh-Hant'><head>
<meta charset='UTF-8'><title>訂票成功</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
</head><body class='bg-success text-white text-center p-5'>
<h1>✅ 訂票成功！</h1>
<p>感謝您的訂票，$name，共 $tickets 張票。</p>
<a href='index.php' class='btn btn-light mt-3'>回首頁</a>
<br><br><footer>創站者：許哲榮</footer>
</body></html>";
?>

<meta charset="utf-8">
<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <title>電影票訂購系統</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
<div class="container mt-5">
    <h1 class="text-center mb-4">🎬 電影票線上訂購</h1>
    <div class="row">
        <?php
        $sql = "SELECT * FROM movies";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="col-md-6 mb-4">
                <div class="card text-dark">
                    <img src="'.$row['poster'].'" class="card-img-top" alt="海報">
                    <div class="card-body">
                        <h5 class="card-title">'.$row['title'].'</h5>
                        <p class="card-text">放映時間：'.$row['showtime'].'</p>
                        <form action="book.php" method="post">
                            <input type="hidden" name="movie_id" value="'.$row['id'].'">
                            姓名：<input type="text" name="name" class="form-control mb-2" required>
                            張數：<input type="number" name="tickets" class="form-control mb-2" required min="1">
                            <button class="btn btn-primary">訂票</button>
                        </form>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
    <footer class="text-center text-muted mt-4">
        創站者：許哲榮
    </footer>
</div>
</body>
</html>

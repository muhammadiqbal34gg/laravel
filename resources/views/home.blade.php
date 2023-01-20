<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="foto">
        <img src="images.jpg" alt="">
    </div>

    <div class="content">
        <h2><?= $nama ?></h2>
        <p><?= $job ?></p>
        <p><?= $deskripsi ?></p>
    </div>

    <div class="pencet">
        <div class="about">
            <a href="/about">About</a>
        </div>
        <div class="contact">
            <a href="/contact">contact</a>
        </div>
    </div>
</body>
</html>
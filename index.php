<?php
if (isset($_POST['download'])) {
    $imgUrl = $_POST['imgurl'];
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $download = curl_exec($ch);
    curl_close($ch);
    header('Content-type: image/jpg');
    header('Content-Disposition: attachment; filename="thumbnail.jpg');
    echo $download;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Youtube Video Thumbnial </title>
    <!-- Css Link-->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <header>Download Thumbnail</header>
        <div class="url-input">
            <span class="title">
                Paset video url:
            </span>
            <div class="field">
                <input type="text" placeholder="https://www.youtube.com/watch?v=FucPPCPDd2Y&list=PLpwngcHZlPaf1aw42OGyitm4jh2Dlmi9c&index=2" required>
                <input type="hidden" class="hidden-input" name="imgurl">
                <div class="botton-line"></div>
            </div>
        </div>
        <div class="preview-area">
            <img class="thumbnail" src="" alt="Thumbnail">
            <i class="icon fa fa-cloud-download"></i>
            <span>Past video url to see preview</span>
        </div>
        <button class="download-btn" type="submit" name="download"> Download Thumbnail</button>
    </form>
    <script src="script.js"></script>
</body>

</html>
<?php
$ch = curl_init();
$url = 'https://api.quotable.io/random?tags=technology';
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBlue</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iosoon-style.css">
    <link rel="stylesheet" type="text/css" href="css/iosoon-theme1.css">
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="#">
                <div class="logo">
                    <img class="logo-size" src="images/logo.png" alt="">
                </div>
            </a>
        </div>
        <!-- <div class="other-links other-links-up no-bg-icon">
            <a href="https://instagram.com/pejuangteam.id" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/message/LIRWFIJPYMHWP1" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="https://tokopedia.com/pejuang-team" target="_blank"><i><img src="images/tokopedia.png" style="margin-top: -5px;" height="18px"></i></a>
        </div> -->
        <div class="row">
            <div class="img-holder">
                <div class="info-holder">
                    <img src="images/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>iBlue Prepare for Something Big</h3>
                        <p>"<?php echo $result['content'] ?>" - <?php echo $result['author'] ?></p>
                        <!-- <form class="form-row">
                            <div class="col-md-8">
                                <input type="text" class="form-control" placeholder="E-mail Address">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Notify me</button>
                            </div>
                        </form> -->
                        <div class="spacer"></div>
                        <div class="time-counter form-row">
                            <div class="days count col">
                                <div class="num">38</div>
                                <div class="label">Days</div>
                            </div>
                            <div class="hours count col">
                                <div class="num">13</div>
                                <div class="label">Hrs</div>
                            </div>
                            <div class="minutes count col">
                                <div class="num">59</div>
                                <div class="label">Min</div>
                            </div>
                            <div class="seconds count col">
                                <div class="num">30</div>
                                <div class="label">Sec</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
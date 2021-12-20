<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Your IP</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="shortcut icon" href="https://cdn.xmhosts.net/branding/favicon.ico" />
</head>

<body><div class="d-block" style="height: 30px;">
    <div class="container" style="height: 30px;">
        <div class="row" style="height: 30px;">
            <div class="col-md-12" style="height: 30px;">
                <div></div>
            </div>
        </div>
    </div>
</div>
    <div class="container" style="background: #3561FF;border-radius: 64px;"><div class="d-block" style="height: 30px;">
    <div class="container" style="height: 30px;">
        <div class="row" style="height: 30px;">
            <div class="col-md-12" style="height: 30px;">
                <div></div>
            </div>
        </div>
    </div>
</div>
        <div class="col-md-12 text-center align-self-center"><a href="https://xmhosts.com"><img src="https://cdn.xmhosts.net/branding/SVG/Full_5.svg" width="300"></a></div><div class="d-block" style="height: 30px;">
    <div class="container" style="height: 30px;">
        <div class="row" style="height: 30px;">
            <div class="col-md-12" style="height: 30px;">
                <div></div>
            </div>
        </div>
    </div>
</div>
    </div><div class="d-block" style="height: 30px;">
    <div class="container" style="height: 30px;">
        <div class="row" style="height: 30px;">
            <div class="col-md-12" style="height: 30px;">
                <div></div>
            </div>
        </div>
    </div>
</div>
    <div class="container" style="text-align: center;background: #e8e8e8;border-radius: 93px;"><div class="d-block" style="height: 30px;">
    <div class="container" style="height: 30px;">
        <div class="row" style="height: 30px;">
            <div class="col-md-12" style="height: 30px;">
                <div></div>
            </div>
        </div>
    </div>
</div>
        
        <h1 style="font-size: 33px;"><i class="icon ion-ios-location" style="font-size: 30px;"></i> Your IP Address: 
        <?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

echo $ip    

        ?>
    </h1><div class="d-block" style="height: 30px;">
    <div class="container" style="height: 30px;">
        <div class="row" style="height: 30px;">
            <div class="col-md-12" style="height: 30px;">
                <div></div>
            </div>
        </div>
    </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
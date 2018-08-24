<!DOCTYPE html>
<html>
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Bootstrap Theme The Band</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $BASE_URL; ?>/css/style.css?<?php echo FILE_VERSION; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $BASE_URL; ?>/css/mobile_style.css?<?php echo FILE_VERSION; ?>" rel="stylesheet" type="text/css" media="only screen and (max-width:750px)">
    </head>

    <body id="body_<?php echo $controller . '_' . $action; ?>">
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
        <footer class="container-fluid text-center">
            <p>Online Store Copyright</p> 
        </footer>
        <?php echo $this->element('popup'); ?>
        <div id="loader-wrapper">
            <div class="loader">Loading...</div>
        </div>
        <script>
            var BASE_URL = '<?php echo $BASE_URL;?>';
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo $BASE_URL; ?>/js/custom.js?<?php echo FILE_VERSION; ?>"></script>
    </body>
</html>


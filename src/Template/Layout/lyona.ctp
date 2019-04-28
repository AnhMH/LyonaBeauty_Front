<?php
$_description = !empty($pageDescription) ? $pageDescription : $_settings['company']['seo_description'];
$_keyword = !empty($pageKeyword) ? $pageKeyword : $_settings['company']['seo_keyword'];
$_title = !empty($pageTitle) ? $pageTitle : $_settings['company']['name'];
$_image = !empty($pageImage) ? $pageImage : $_settings['company']['seo_image'];
$_time = time();
?>
<!DOCTYPE html>
<html lang="vi" itemscope itemtype="http://schema.org/Article" prefix="og: http://ogp.me/ns#">
    <head>
        <link rel="shortcut icon" href="<?php echo $BASE_URL;?>/favicon.ico" type="image/png">
        <meta charset="utf-8">
        <title>
            <?php echo $_title; ?>
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
        <link href="<?php echo $BASE_URL;?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
        <style>
            #new-menu .t-menu li.saving_day_css a {
                color: red!important;
                font-weight: bold!important;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/widgets-main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/productreviews.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/jquery.raty.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/fonts.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/flex.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/main.css" media="all">
        <link href="<?php echo $BASE_URL;?>/css/style_new.css" rel="stylesheet" type="text/css" media="all">
        
        <script src="<?php echo $BASE_URL;?>/js/jquery-1.11.3.min.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/owl.min.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/jquery.fancybox.js" type="text/javascript"></script>
        <script src="<?php echo $BASE_URL;?>/js/script_tfs.js?<?php echo $_time;?>" type="text/javascript"></script>
    </head>

    <body class="home option2 insCustomer">
        <?php echo $this->element('Layout/header'); ?>
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->element('Layout/footer'); ?>
        <?php echo $this->element('Layout/modal'); ?>
    </body>
</html>

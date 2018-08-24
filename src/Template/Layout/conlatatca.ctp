<?php
$_description = !empty($pageDescription) ? $pageDescription : $settings['web_description'];
$_keyword = !empty($pageKeyword) ? $pageKeyword : $settings['web_keyword'];
$_title = !empty($pageTitle) ? $pageTitle : $settings['web_title'];
$_image = !empty($pageImage) ? $pageImage : $settings['web_image'];
?>
<!DOCTYPE html>
<html lang="vi" itemscope itemtype="http://schema.org/Article" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title><?php echo $_title; ?></title>
        
        <meta name="description" itemprop="description" content="<?php echo $_description; ?>" />
        <meta name="keywords" content="<?php echo $_keyword; ?>">
        
        <meta property="og:title" content="<?php echo $_title; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $current_url;?>" />
        <meta property="og:image" content="<?php echo $_image; ?>" />
        <meta property="og:site_name" content="<?php echo $settings['web_title']; ?>" />
        <meta property="og:description" content="<?php echo $_description; ?>" />
       
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php echo $_title; ?>" />
        <meta name="twitter:description" content="<?php echo $_description; ?>" />
        <meta name="twitter:image" content="<?php echo $_image; ?>" />
        <meta itemprop="image" content="<?php echo $_image; ?>" />

        <meta name="generator" content="ConLaTatCa" />
        
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//s.w.org' />
        
        <link rel="canonical" href="<?php echo $current_url;?>" />

        <!--[if IE 7]>
        <link rel="stylesheet" href="css/style-ie7.css">
        <![endif]-->

        <link rel="icon" href="<?php echo $BASE_URL;?>/img/cropped-favicon_default-65x65.png" sizes="32x32" />
        <link rel="icon" href="<?php echo $BASE_URL;?>/img/cropped-favicon_default-300x300.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo $BASE_URL;?>/img/cropped-favicon_default-180x180.png" />
        <link rel='stylesheet'  href='<?php echo $BASE_URL; ?>/css/style.css?<?php echo FILE_VERSION; ?>' type='text/css' media='all' />
        <script type='text/javascript'>
            /* <![CDATA[ */
            var herald_js_settings = {"rtl_mode":"false", "header_sticky":"1", "header_sticky_offset":"600", "smooth_scroll":"1", "trending_columns":"6", "header_responsive_breakpoint":"1249"};
            /* ]]> */
        </script>
    </head>

    <body class="herald-boxed">
        <?= $this->element('Layout/header_facebook'); ?>
        <?= $this->element('Layout/header'); ?>

        <div id="content" class="herald-site-content herald-slide">
            <?= $this->fetch('content'); ?>
        </div>
        
        <?= $this->element('Banner/728x90_footer'); ?>
        
        <footer id="footer" class="herald-site-footer herald-slide">
            <?= $this->element('Layout/footer'); ?>
        </footer>

        <a href="javascript:void(0)" id="back-top" class="herald-goto-top"><i class="fa fa-angle-up"></i></a>
        <script type='text/javascript' src='<?php echo $BASE_URL; ?>/js/common.js?<?php echo FILE_VERSION; ?>'></script>
        <script type='text/javascript' src='<?php echo $BASE_URL; ?>/js/jquery.lazyloadxt.js?<?php echo FILE_VERSION; ?>'></script>
    </body>
</html>

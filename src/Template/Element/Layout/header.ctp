<header id="header" class="herald-site-header">
    <?php echo $this->element('Layout/header_top');?>
    <div class="header-middle herald-header-wraper hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 hel-el">
                    <div class="hel-l herald-go-hor">
                        <div class="site-branding">
                            <h1 class="site-title h1">
                                <a href="<?php echo $BASE_URL;?>" rel="home">
                                    <img class="herald-logo" src="<?php echo $BASE_URL;?>/img/logotest.png" alt="Conlatatca" >
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="hel-r herald-go-hor">
                        <?php echo $this->element('Banner/728x90_top');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom herald-header-wraper hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 hel-el">
                    <div class="hel-l">
                        <nav class="main-navigation herald-menu">	
                            <ul id="menu-herald-main" class="menu">
                                <?php echo $this->element('Layout/menu');?>
                            </ul>
                        </nav>
                        <div class="herald-menu-popup-search">
                            <span class="fa fa-search"></span>
                            <div class="herald-in-popup">
                                <form class="herald-search-form" action="<?php echo $BASE_URL;?>/search" method="get">
                                    <input name="s" class="herald-search-input" type="text" value="" placeholder="Type here to search..." />
                                    <button type="submit" class="herald-search-submit"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="hel-r">
                        <ul id="menu-herald-social" class="herald-soc-nav">
                            <?php echo $this->element('Layout/social'); ?>
                        </ul>											
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php if (!empty($latest_post)): ?>
    <?php echo $this->element('Layout/header_trending', $latest_post); ?>
    <?php endif; ?>

</header>

<div id="sticky-header" class="herald-header-sticky herald-header-wraper herald-slide hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 hel-el">
                <div class="hel-l herald-go-hor">
                    <div class="site-branding mini">
                        <span class="site-title h1">
                            <a href="<?php echo $BASE_URL;?>" rel="home">
                                <img class="herald-logo-mini" src="<?php echo $BASE_URL;?>/img/logotest_mini.png" alt="Conlatatca">
                            </a>
                        </span>
                    </div>
                </div>
                <div class="hel-r herald-go-hor">
                    <nav class="main-navigation herald-menu">	
                        <ul id="menu-herald-main" class="menu">
                            <?php echo $this->element('Layout/menu');?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="herald-responsive-header" class="herald-responsive-header herald-slide hidden-lg hidden-md">
    <div class="container">
        <div class="herald-nav-toggle"><i class="fa fa-bars"></i></div>
        <div class="site-branding mini">
            <span class="site-title h1">
                <a href="<?php echo $BASE_URL;?>" rel="home">
                    <img class="herald-logo-mini" src="<?php echo $BASE_URL;?>/img/logotest_mini.png" alt="Herald" >
                </a>
            </span>
        </div>
        <div class="herald-menu-popup-search">
            <span class="fa fa-search"></span>
            <div class="herald-in-popup">
                <form class="herald-search-form" action="<?php echo $BASE_URL;?>" method="get">
                    <input name="s" class="herald-search-input" type="text" value="" placeholder="Type here to search..." />
                    <button type="submit" class="herald-search-submit"></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="herald-mobile-nav herald-slide hidden-lg hidden-md">
    <ul id="menu-herald-main-2" class="herald-mob-nav">
        <?php echo $this->element('Layout/menu');?>
    </ul>

    <ul id="menu-herald-social-1" class="herald-soc-nav">
        <?php echo $this->element('Layout/social'); ?>
    </ul>		
</div>

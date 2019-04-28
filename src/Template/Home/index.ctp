<?php 
    if (!empty($data['sliders'])) {
        echo $this->element('Layout/home/slider', array('sliders' => $data['sliders'])); 
    }
    
    if (!empty($data['hot_products'])) {
        echo $this->element('Layout/home/saleoff', array('hot_products' => $data['hot_products']));
    }
?>
<?php echo $this->element('Layout/home/cate_product'); ?>
<div id="content-wrap">
    <div class="container">
<!--        <div class="row banner-bottom">
            <div class="col-sm-6 item-left">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="https://theme.hstatic.net/1000036599/1000401525/14/banner-botom1.jpg"></a>
                </div>
            </div>
            <div class="col-sm-6 item-right">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="https://theme.hstatic.net/1000036599/1000401525/14/banner-bottom2.jpg"></a>
                </div>
            </div>
        </div>-->
        <?php 
        if (!empty($data['posts'])) {
            echo $this->element('Layout/home/news', array('posts' => $data['posts'])); 
        }
        ?>
        <?php echo $this->element('Layout/home/services'); ?>
<!--        <div class="description-seo">
            <div class="content-seo close-m">
                <p style="text-align: justify;" data-mce-style="text-align: justify;">Trang web bán hàng trực tuyến của THE FACE SHOP&nbsp;chính thức ra mắt để đáp lại sự tin yêu của các tín đồ làm đẹp dành cho THE FACE SHOP. Việc ra mắt trang web giúp đáp ứng đầy đủ nhu cầu chăm sóc sắc đẹp của các nàng trên khắp đất nước Việt Nam. Ở mọi lúc, mọi nơi, bạn có thể tìm được cho mình các sản phẩm chăm sóc da và làm đẹp của THE FACE SHOP chỉ với vài bước đơn giản.</p>
            </div>
        </div>	-->
    </div>
</div>
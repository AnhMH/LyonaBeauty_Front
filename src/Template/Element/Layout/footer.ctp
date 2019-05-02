<!-- Footer -->
<footer id="footer">
    <div class="container">
        <!-- introduce-box -->
        <div id="introduce-box">
            <div class="col-md-4">
                <div id="address-box">
                    <a href="<?php echo $BASE_URL;?>">
                        <img class="lazy" src="<?php echo $_settings['company']['logo'];?>" alt="logo" />
                    </a>
                    <div id="address-list">
                        <div class="tit-name">Địa chỉ:</div>
                        <div class="tit-contain"><?php echo $_settings['company']['address'];?></div>
                        <div class="tit-name">Điện thoại:</div>
                        <div class="tit-contain"><?php echo $_settings['company']['tel'];?></div>
                        <div class="tit-name">Email:</div>
                        <div class="tit-contain"><?php echo $_settings['company']['email'];?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="introduce-title">Dòng sản phẩm</div>
                        <ul id="introduce-company"  class="introduce-list">
                            <?php if (!empty($productCates)): ?>
                            <?php foreach ($productCates as $pc): ?>
                            <li><a href="<?php echo $BASE_URL.'/danh-muc/'.$pc['data']['url'];?>"><?php echo $pc['data']['name']; ?></a></li>
                            <?php endforeach;?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="introduce-title">Blog làm đẹp</div>
                        <ul id = "introduce-Account" class="introduce-list">
                            <?php if (!empty($_settings['blog_cates'])): ?>
                                <?php foreach ($_settings['blog_cates'] as $bc): ?>
                                <li><a href="<?php echo $BASE_URL.'/tin-tuc/'.$bc['url'];?>"><?php echo $bc['name'];?></a></li>
                                <?php endforeach;?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div id="contact-box">
                    <div class="introduce-title">Liên kết</div>
                    <div class="clearfix">
                        <div class="social-link pull-left">
                            <?php if (!empty($_settings['company']['facebook'])): ?>
                            <a href="<?php echo $_settings['company']['facebook'];?>" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($_settings['company']['youtube'])): ?>
                            <a href="<?php echo $_settings['company']['youtube'];?>" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($_settings['company']['google_plus'])): ?>
                            <a href="<?php echo $_settings['company']['google_plus'];?>" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($_settings['company']['instagram'])): ?>
                            <a href="<?php echo $_settings['company']['instagram'];?>" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($_settings['company']['zalo'])): ?>
                            <a href="<?php echo $_settings['company']['zalo'];?>" target="_blank" rel="nofollow"><img class="image-icon-footer" src="https://file.hstatic.net/1000036599/file/zalo.png"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /#introduce-box -->
        <!-- #trademark-box -->
        <div id="trademark-box" class="row">
            <div class="col-sm-12">
                <ul id="trademark-list">
                    <li id="payment-methods">Phương thức thanh toán</li>
                    <li><a href="javascript:;"><img class="lazy" src="<?php echo $BASE_URL;?>/images/trademark_1.png"  alt="Phương thức thanh toán 1"></a></li>
                    <li><a href="javascript:;"><img class="lazy" src="<?php echo $BASE_URL;?>/images/trademark_2.png"  alt="Phương thức thanh toán 2"></a></li>
                    <li><a href="javascript:;"><img class="lazy" src="<?php echo $BASE_URL;?>/images/trademark_3.png"  alt="Phương thức thanh toán 3"></a></li>
                    <li><a href="javascript:;"><img class="lazy" src="<?php echo $BASE_URL;?>/images/trademark_4.png"  alt="Phương thức thanh toán 4"></a></li>
                    <li><a href="javascript:;"><img class="lazy" src="<?php echo $BASE_URL;?>/images/trademark_5.png"  alt="Phương thức thanh toán 5"></a></li>
                    <li id="shipping-methods">DỊCH VỤ GIAO HÀNG</li>
                    <li><a href="javascript:;"><img class="lazy" src="<?php echo $BASE_URL;?>/images/trademark_8.png" alt="Hình thức vận chuyển 3"></a></li>
                </ul>
            </div>
        </div> <!-- /#trademark-box -->
        <div class="footer-info-bottom">
            <p>&copy; 2019 <strong>LyonaBeauty.com</strong></p>
            <p>Địa chỉ: <?php echo $_settings['company']['address'];?></p>
            <p>Điện thoại: <?php echo $_settings['company']['tel'];?></p>
            <p>Email: <?php echo $_settings['company']['email'];?></p>
        </div>
    </div>
</footer>
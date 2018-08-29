<!-- Footer Area Start Here -->
<footer class="pb-35">
    <div class="container">
        <!-- Footer Middle Start -->
        <div class="footer-middle ptb-90">
            <div class="row">
                <!-- Single Footer Start -->
                <div class="col-lg-4 col-md-6 mb-all-30">
                    <div class="single-footer">
                        <div class="footer-logo mb-20">
                            <a href="<?php echo $BASE_URL; ?>"><img class="img" src="<?php echo $settings['company']['logo']; ?>" alt="logo-img"></a>
                        </div>
                        <div class="footer-content">
                            <ul class="footer-list first-content">
                                <?php if (!empty($settings['company']['address'])): ?>
                                <li><i class="pe-7s-map-marker"></i><?php echo $settings['company']['address']; ?></li>
                                <?php endif; ?>
                                <?php if (!empty($settings['company']['tel'])): ?>
                                <li><i class="pe-7s-call"></i><?php echo $settings['company']['tel']; ?></li>
                                <?php endif; ?>
                                <li><i class="pe-7s-clock"></i>Working time: 9.00 -21.00</li>
                                <?php if (!empty($settings['company']['facebook']) || !empty($settings['company']['instagram']) || !empty($settings['company']['twitter']) || !empty($settings['company']['youtube']) || !empty($settings['company']['google_plus'])): ?>
                                <li class="mt-20">
                                    <?php 
                                    $social = array(
                                        'facebook' => 'facebook',
                                        'twitter' => 'twitter',
                                        'youtube' => 'youtube',
                                        'google_plus' => 'google-plus',
                                        'instagram' => 'instagram'
                                    );
                                    ?>
                                    <ul class="social-icon">
                                        <?php foreach ($settings['company'] as $k => $v): ?>
                                            <?php if (array_key_exists($k, $social)): ?>
                                            <li>
                                                <a href="<?php echo $v; ?>">
                                                    <i class="fa fa-<?php echo $social[$k]; ?>" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-6 mb-all-30">
                    <div class="single-footer">
                        <div class="single-footer">
                            <h4 class="footer-title">products</h4>
                            <div class="footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="#">terms & conditions</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-2 col-md-6 mb-sm-30">
                    <div class="single-footer">
                        <div class="single-footer">
                            <h4 class="footer-title">our company</h4>
                            <div class="footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">delivery</a></li>
                                    <li><a href="#">about us</a></li>
                                    <li><a href="#">contact us</a></li>
                                    <li><a href="#">sitemap</a></li>
                                    <li><a href="#">stores</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
                <!-- Single Footer Start -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-footer">
                        <div class="single-footer">
                            <h4 class="footer-title">Join Our Newsletter Now </h4>
                            <div class="footer-content subscribe-form">
                                <div class="subscribe-box">
                                    <form action="#">
                                        <input type="text" id="subscribe_email" placeholder="Your email address">
                                        <button type="submit" class="pe-7s-mail-open"></button>
                                    </form>
                                </div>
                                <p class="mt-10">Get E-mail updates about our latest shop and special offers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Start -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Footer Middle End -->
        <!-- Footer Bottom Start -->
        <div class="footer-bottom pt-35">
            <div class="col-md-12">
                <div class="row align-items-center justify-content-md-between">
                    <div class="footer-copyright ">
                        <p>Copyright <a href="#">Makali</a> All Rights Reserved</p>
                    </div>
                    <div class="footer-payment">
                        <a href="#"><img src="img/payment/payment.png" alt="payment-img" class="img"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </div>
</footer>
<!-- Footer Area End Here -->
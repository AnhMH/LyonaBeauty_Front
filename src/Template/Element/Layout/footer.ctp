<div class="footer-widgets container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div id="text-3" class="widget widget_text">			
                <div class="textwidget">
                    <p><img src="<?php echo $BASE_URL;?>/img/logotest.png" alt="<?php echo $settings['web_title'];?>"></p>
                    <p><?php echo $settings['web_description'];?></p>
                    <p style="margin-top:25px">
                        <a class="mks_button mks_button_small squared" href="<?php echo $settings['facebook'];?>" target="_blank" style="color: #FFFFFF; background-color: #0288D1" >Find out more</a>
                    </p>
                </div>
            </div>			
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div id="herald_posts_widget-10" class="widget herald_posts_widget">
                <h4 class="widget-title h6"><span>Most Popular</span></h4>
                <div class="row ">
                    <?php foreach ($breaking_news as $p): ?>
                    <article class="herald-lay-g post type-post status-publish format-gallery has-post-thumbnail hentry">
                        <div class="row">
                            <div class="col-lg-4 col-xs-3">
                                <div class="herald-post-thumbnail">
                                    <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>" title="<?php echo $p['name'];?>">
                                        <img width="74" height="55" src="<?php echo $p['image'];?>" class="attachment-herald-lay-g1 size-herald-lay-g1 wp-post-image" alt="" sizes="(max-width: 74px) 100vw, 74px" />			
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xs-9 herald-no-pad">
                                <div class="entry-header">
                                    <h2 class="entry-title h7">
                                        <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>">
                                            <?php echo $p['name'];?>
                                        </a>
                                    </h2>
                                    <div class="entry-meta meta-small">
                                        <div class="meta-item herald-views">16,357 Views</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>			
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div id="tag_cloud-3" class="widget widget_tag_cloud">
                <h4 class="widget-title h6"><span>Tags</span></h4>
                <div class="tagcloud">
                    <a href="https://demo.mekshq.com/herald/?tag=awesome" class="tag-cloud-link tag-link-55 tag-link-position-1" style="font-size: 13.384615384615pt;" aria-label="awesome (3 items)">awesome</a>
                </div>
            </div>			
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <div id="herald_posts_widget-11" class="widget herald_posts_widget">
                <h4 class="widget-title h6"><span>Most Discussed</span></h4>
                <div class="row ">
                    <?php echo $this->element('Layout/footer_facebook'); ?>
                </div>
            </div>			
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hel-l herald-go-hor">
                    <div class="herald-copyright">Copyright &copy; <?php echo date('Y',time());?>. Created by <a href="https://hoanganhonline.com" target="_blank">HoangAnhOnline.Com</a>.</div>
                </div>
                <div class="hel-r herald-go-hor">
                    <ul id="menu-herald-social-2" class="herald-soc-nav">
                        <?php echo $this->element('Layout/social'); ?>
                    </ul>							
                </div>
            </div>
        </div>
    </div>
</div>


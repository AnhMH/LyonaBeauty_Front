
<div class="herald-section container herald-no-sid " id="herald-section-0">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="herald-module col-lg-12 col-md-12 col-sm-12" id="herald-module-0-0">
                    <div class="herald-fa-wrapper herald-fa-2 ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="herald-fa-list">
                                    <?php if (!empty($data['sliders'])): ?>
                                        <?php foreach ($data['sliders'] as $slide): ?>
                                            <?php echo $this->element('Post/slider', $slide); ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="herald-section container " id="herald-section-1">
    <div class="row">
        <div class="herald-main-content col-lg-9 col-md-9 col-mod-main">
            <div class="row">
                <?php if (!empty($breaking_news)): ?>
                    <div class="herald-module col-lg-12 col-md-12 col-sm-12" id="herald-module-1-0" data-col="12">
                        <div class="herald-mod-wrap">
                            <div class="herald-mod-head ">
                                <div class="herald-mod-title">
                                    <h2 class="h6 herald-mod-h herald-color">Breaking News</h2>
                                </div>
                            </div>
                        </div>			
                        <div class="row herald-posts row-eq-height ">
                            <?php foreach ($breaking_news as $p): ?>
                                <?php echo $this->element('Post/breaking_new', $p); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="herald-module col-lg-12 col-md-12 col-sm-12" id="herald-module-1-1" data-col="12">
                    <div class="herald-mod-wrap">
                        <div class="herald-mod-head herald-cat-6">
                            <div class="herald-mod-title">
                                <?php 
                                $topCate = array();
                                $topCateIds = array();
                                foreach ($cates as $tc) {
                                    if ($tc['id'] == $settings['homepage_top_cate']) {
                                        $topCate = $tc;
                                        $topCateIds[] = $tc['id'];
                                        break;
                                    }
                                }
                                ?>
                                <h2 class="h6 herald-mod-h herald-color">
                                    <?php echo $topCate['name']; ?>
                                    <i class="fa fa-angle-down herald-sub-cat-icon" aria-hidden="true"></i>
                                    <div class="herald-mod-subnav-mobile">
                                        <?php if (!empty($topCate['sub_cates'])): ?>
                                        <?php foreach ($topCate['sub_cates'] as $tsc): ?>
                                        <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $tsc['url'];?>"><?php echo $tsc['name'];?></a>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                </h2>
                            </div>
                            <div class="herald-mod-subnav">
                                <?php if (!empty($topCate['sub_cates'])): ?>
                                <?php foreach ($topCate['sub_cates'] as $tsc): ?>
                                <?php $topCateIds[] = $tsc['id']; ?>
                                <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $tsc['url'];?>"><?php echo $tsc['name'];?></a>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="herald-mod-actions">
                                <a class="herald-all-link" href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $topCate['url'];?>">View All</a>
                                <div class="herald-slider-controls" data-col="4" data-autoplay="0"></div>
                            </div>
                        </div>
                    </div>			
                    <div class="row herald-posts row-eq-height herald-slider">
                        <?php foreach ($data['posts'] as $k => $p): ?>
                        <?php if (in_array($p['cate_id'], $topCateIds)): ?>
                            <article class="herald-lay-f post type-post status-publish format-standard has-post-thumbnail hentry">
                                <div class="herald-post-thumbnail herald-format-icon-middle">
                                    <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>" title="<?php echo $p['name'];?>">
                                        <img width="300" height="168" src="<?php echo $p['image'];?>" class="attachment-herald-lay-f size-herald-lay-f wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px" />							
                                    </a>
                                </div>
                                <div class="entry-header">
                                    <span class="meta-category meta-small">
                                        <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $p['cate_url'];?>" class="herald-cat-<?php echo $p['cate_id'];?>"><?php echo $p['cate_name'];?></a>
                                    </span>
                                    <h2 class="entry-title h5">
                                        <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo $p['name'];?></a>
                                    </h2>
                                    <div class="entry-meta meta-small">
                                        <div class="meta-item herald-views">4,613 Views</div>
                                        <div class="meta-item herald-rtime">2 Min Read</div>
                                    </div>
                                </div>
                            </article>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php echo $this->element('Banner/728x90'); ?>
                
                <?php foreach ($settings['homepage_sub_cate'] as $sc): ?>
                <?php
                $_subCate = array();
                $_count = 0;
                foreach ($cates as $c) {
                    if ($c['id'] == $sc) {
                        $_subCate = $c;
                        break;
                    }
                }
                ?>
                <div class="herald-module col-lg-4 col-md-4 col-sm-4" id="herald-module-1-<?php echo $_subCate['id'];?>" data-col="4">
                    <div class="herald-mod-wrap">
                        <div class="herald-mod-head herald-cat-<?php echo $_subCate['id'];?>">
                            <div class="herald-mod-title">
                                <h2 class="h6 herald-mod-h herald-color"><?php echo $_subCate['name'];?></h2>
                            </div>
                        </div>
                    </div>			
                    <div class="row herald-posts row-eq-height ">
                        <?php foreach ($data['posts'] as $p): ?>
                        <?php if ($p['cate_id'] == $_subCate['id']): ?>
                        <?php if ($_count == 0): ?>
                        <article class="herald-lay-f herald-lay-f1 type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="herald-ovrld">		
                                <div class="herald-post-thumbnail">
                                    <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url']; ?>" title="<?php echo $p['name']; ?>">
                                        <img width="300" height="200" src="<?php echo $p['image']; ?>" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="<?php echo $p['name']; ?>" sizes="(max-width: 300px) 100vw, 300px" />
                                    </a>
                                </div>
                                <div class="entry-header herald-clear-blur">
                                    <span class="meta-category">
                                        <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $p['cate_url']; ?>" class="herald-cat-<?php echo $p['cate_id']; ?>"><?php echo $p['cate_name']; ?></a>
                                    </span>
                                    <h2 class="entry-title h6">
                                        <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url']; ?>"><?php echo $p['name']; ?></a>
                                    </h2>
                                    <div class="entry-meta">
                                        <div class="meta-item herald-date">
                                            <span class="updated"><?php echo date('Y-m-d', $p['created']); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php else: ?>
                        <article class="herald-lay-g post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="row">
                                <div class="col-lg-4 col-xs-3 col-sm-4">
                                    <div class="herald-post-thumbnail">
                                        <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url']; ?>" title="<?php echo $p['name']; ?>">
                                            <img width="74" height="55" src="<?php echo $p['image']; ?>" class="attachment-herald-lay-g1 size-herald-lay-g1 wp-post-image" alt="" sizes="(max-width: 74px) 100vw, 74px" />			
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xs-9 col-sm-8 herald-no-pad">
                                    <div class="entry-header">
                                        <span class="meta-category meta-small">
                                            <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $p['cate_url']; ?>" class="herald-cat-<?php echo $p['cate_id']; ?>"><?php echo $p['cate_name']; ?></a>
                                        </span>
                                        <h2 class="entry-title h7">
                                            <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url']; ?>"><?php echo $p['name']; ?></a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endif; ?>
                        <?php $_count++; endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">
            <div id="herald_posts_widget-8" class="widget herald_posts_widget">
                <h4 class="widget-title h6"><span>Media of the day</span></h4>
                <div class="row">
                    <?php foreach ($data['medias'] as $p): ?>
                    <article class="herald-lay-f post type-post status-publish format-video has-post-thumbnail hentry post_format-post-format-video">
                        <div class="herald-post-thumbnail herald-format-icon-middle">
                            <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>" title="<?php echo $p['name'];?>">
                                <img width="300" height="168" src="<?php echo $p['image'];?>" class="attachment-herald-lay-f size-herald-lay-f wp-post-image" alt="<?php echo $p['name'];?>" sizes="(max-width: 300px) 100vw, 300px" />				
                                <span class="herald-format-icon"><i class="fa fa-play"></i></span>			
                            </a>
                        </div>
                        <div class="entry-header">
                            <h2 class="entry-title h5">
                                <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo $p['name'];?></a>
                            </h2>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php echo $this->element('Banner/300x250'); ?>
        </div>
    </div>
</div>
<div class="herald-section container " id="herald-section-3">
    <div class="row">
        <div class="herald-main-content col-lg-9 col-md-9 col-mod-main">
            <div class="row">
                <div class="herald-module col-lg-12 col-md-12 col-sm-12" id="herald-module-3-0" data-col="12">
                    <div class="herald-mod-wrap">
                        <div class="herald-mod-head ">
                            <div class="herald-mod-title">
                                <h2 class="h6 herald-mod-h herald-color">Latest Articles</h2>
                            </div>
                        </div>
                    </div>			
                    <div class="row herald-posts row-eq-height ">
                        <?php foreach ($latest_post as $k => $p): ?>
                            <?php if ($k == 0): ?>
                                <?php echo $this->element('Post/latest_post1', $p); ?>
                            <?php else: ?>
                                <?php echo $this->element('Post/latest_post', $p); ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <nav class="herald-pagination herald-load-more">
                        <a href="<?php echo $BASE_URL;?>" >Load More</a>		
                        <div class="herald-loader">
                            <div class="spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>			
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">
            <?php echo $this->element('Layout/widget_categories'); ?>
            <?php echo $this->element('Banner/300x316'); ?>
        </div>
    </div>
</div>
<div class="herald-section container">
    <div class="row">
        <div class="herald-module col-mod-main herald-main-content col-lg-9 col-md-9">
            <div class="herald-mod-wrap">
                <div class="herald-mod-head herald-cat-<?php echo $param['cate_id']; ?>">
                    <div class="herald-mod-title">
                        <h1 class="h6 herald-mod-h herald-color herald-subcat-dropdown"><?php echo $param['cate_name']; ?></h1>
                    </div>
                </div>
            </div>

            <div class="row row-eq-height herald-posts">
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $k => $p): ?>
                        <?php if ($k == 0): ?>
                            <article class="herald-lay-a post type-post status-publish format-standard has-post-thumbnail hentry">
                                <div class="herald-post-thumbnail">
                                    <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $p['url']; ?>" title="<?php echo $p['name']; ?>">
                                        <img width="990" height="556" src="<?php echo $p['image']; ?>" class="attachment-herald-lay-a size-herald-lay-a wp-post-image" alt="" sizes="(max-width: 990px) 100vw, 990px">
                                    </a>
                                </div>
                                <div class="herald-lay-over transparent">
                                    <div class="entry-header herald-pf-invert">
                                        <span class="meta-category">
                                            <a href="<?php echo $BASE_URL; ?>/danh-muc/<?php echo $p['cate_url']; ?>" class="herald-cat-<?php echo $p['cate_id']; ?>"><?php echo $p['cate_name']; ?></a></span>

                                        <h2 class="entry-title h2">
                                            <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $p['url']; ?>"><?php echo $p['name']; ?></a>
                                        </h2>		
                                        <div class="entry-meta">
                                            <div class="meta-item herald-date">
                                                <span class="updated"><?php echo date('Y-m-d', $p['created']); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <p><?php echo $p['description']; ?></p>
                                    </div>
                                    <a class="herald-read-more" href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $p['url']; ?>" title="<?php echo $p['name']; ?>">Read More</a>
                                </div>
                            </article>
                        <?php else: ?>
                            <article class="herald-lay-b post type-post status-publish format-standard has-post-thumbnail hentry">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="herald-post-thumbnail herald-format-icon-middle">
                                            <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>" title="<?php echo $p['name'];?>">
                                                <img width="300" height="200" src="<?php echo $p['image'];?>" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px">									
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div class="entry-header">
                                            <span class="meta-category">
                                                <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $p['cate_url'];?>" class="herald-cat-<?php echo $p['cate_id'];?>"><?php echo $p['cate_name'];?></a>
                                            </span>
                                            <h2 class="entry-title h3">
                                                <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo $p['name'];?></a>
                                            </h2>
                                            <div class="entry-meta">
                                                <div class="meta-item herald-date">
                                                    <span class="updated"><?php echo date('Y-m-d', $p['created']);?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-content">
                                            <p><?php echo $p['description'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">
            <?php echo $this->element('Layout/widget_categories'); ?>
            <?php echo $this->element('Post/feature_post'); ?>		
            <?php echo $this->element('Banner/300x316'); ?>
        </div>
    </div>
</div>

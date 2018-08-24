<div id="herald_posts_widget-9" class="widget herald_posts_widget">
    <h4 class="widget-title h6"><span>Featured</span></h4>
    <div class="row ">
        <?php foreach ($latest_post as $p): ?>
        <article class="herald-lay-g post type-post status-publish format-gallery has-post-thumbnail hentry">
            <div class="row">
                <div class="col-lg-4 col-xs-3">
                    <div class="herald-post-thumbnail">
                        <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>" title="<?php echo $p['name'];?>">
                            <img width="74" height="55" src="<?php echo $p['image'];?>" class="attachment-herald-lay-g1 size-herald-lay-g1 wp-post-image" alt="<?php echo $p['name'];?>" sizes="(max-width: 74px) 100vw, 74px">			
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-xs-9 herald-no-pad">
                    <div class="entry-header">
                        <span class="meta-category meta-small">
                            <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $p['cate_url'];?>" class="herald-cat-<?php echo $p['cate_id'];?>"><?php echo $p['cate_name'];?></a>
                        </span>
                        <h2 class="entry-title h7">
                            <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>">
                                <?php echo $p['name'];?>
                            </a>
                        </h2>
                    </div>
                </div>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</div>

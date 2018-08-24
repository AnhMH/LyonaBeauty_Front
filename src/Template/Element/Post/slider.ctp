<article class="herald-fa-item herald-cat-<?php echo $cate_id; ?>">
    <header class="entry-header">
        <span class="meta-category">
            <a href="<?php echo $BASE_URL; ?>/danh-muc/<?php echo $cate_url; ?>" class="herald-cat-<?php echo $cate_id; ?>"><?php echo $cate_name; ?></a>
        </span>
        <h2 class="entry-title h6">
            <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $url; ?>">
                <!--<span class="herald-format-icon"><i class="fa fa-camera"></i></span>-->
                <?php echo $name; ?>
            </a>
        </h2>				      	
        <div class="entry-meta">
            <div class="meta-item herald-date">
                <span class="updated"><?php echo date('Y-m-d', $created); ?></span>
            </div>
        </div>
        <div class="entry-content">
            <p><?php echo $description; ?></p>
        </div>
        <a href="#" class="fa-post-bg"></a>
    </header>
    <a class="fa-post-thumbnail" href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $url; ?>" title="<?php echo $name; ?>">
        <img width="550" height="520" src="<?php echo $image; ?>" class="attachment-herald-lay-fa1-full size-herald-lay-fa1-full wp-post-image" alt="" />
    </a>
</article>

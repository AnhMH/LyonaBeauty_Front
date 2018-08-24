<article class="herald-lay-c post type-post status-publish format-standard has-post-thumbnail hentry category-food-and">
    <div class="herald-post-thumbnail herald-format-icon-middle">
        <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $url; ?>" title="<?php echo $name; ?>">
            <img width="470" height="264" src="<?php echo $image; ?>" class="attachment-herald-lay-b size-herald-lay-b wp-post-image" alt="" sizes="(max-width: 470px) 100vw, 470px" />							
        </a>
    </div>
    <div class="entry-header">
        <span class="meta-category"><a href="<?php echo $BASE_URL; ?>/danh-muc/<?php echo $cate_url; ?>" class="herald-cat-<?php echo $cate_id; ?>"><?php echo $cate_name; ?></a></span>
        <h2 class="entry-title h3"><a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $url; ?>"><?php echo $name; ?></a></h2>
        <div class="entry-meta">
            <div class="meta-item herald-date">
                <span class="updated"><?php echo date('Y-m-d', $created); ?></span>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <p><?php echo $description; ?></p>
    </div>
</article>

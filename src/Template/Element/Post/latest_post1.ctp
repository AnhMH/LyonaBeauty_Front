<article class="herald-lay-a post type-post status-publish format-standard has-post-thumbnail hentry">
    <div class="herald-ovrld">
        <div class="herald-post-thumbnail">
            <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $url; ?>" title="<?php echo $name; ?>">
                <img width="990" height="556" src="<?php echo $image; ?>" class="attachment-herald-lay-a size-herald-lay-a wp-post-image" alt="" sizes="(max-width: 990px) 100vw, 990px" />
            </a>
        </div>
        <div class="entry-header herald-pf herald-clear-blur">
            <span class="meta-category"><a href="<?php echo $BASE_URL; ?>/danh-muc/<?php echo $cate_url; ?>" class="herald-cat-<?php echo $cate_id; ?>"><?php echo $cate_name; ?></a></span>
            <h2 class="entry-title h2">
                <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $url; ?>"><?php echo $name; ?></a>
            </h2>		
            <div class="entry-meta">
                <div class="meta-item herald-date">
                    <span class="updated"><?php echo date('Y-m-d', $created); ?></span>
                </div>
            </div>
        </div>
    </div>
</article>

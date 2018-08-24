<div class="header-trending hidden-xs hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">		
                <div class="row  " data-col="6">
                    <?php foreach ($latest_post as $lp): ?>
                        <div class="col-lg-2 col-md-2">
                            <div class="herald-post-thumbnail">
                                <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $lp['url']; ?>" title="<?php echo $lp['name']; ?>">
                                    <img width="150" height="150" src="<?php echo $lp['image']; ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" sizes="(max-width: 150px) 100vw, 150px" />
                                </a>
                            </div>
                            <h4 class="h6">
                                <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $lp['url']; ?>"><?php echo $lp['name']; ?></a>
                            </h4>						
                        </div>
                    <?php endforeach; ?>
                </div>	
            </div>		
        </div>
    </div>
</div>

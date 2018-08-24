<div id="categories-3" class="widget widget_categories">
    <h4 class="widget-title h6"><span>All Topics</span></h4>		
    <ul>
        <?php if (!empty($cates)): ?>
        <?php foreach ($cates as $c): ?>
        <li class="cat-item cat-item-<?php echo $c['id'];?>">
            <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $c['url']; ?>" >
                <span class="category-text"><?php echo $c['name'];?></span>
                <span class="count"><?php echo $c['id'];?></span>
            </a>
        </li>
        <?php endforeach; ?>
        <?php endif;?>
    </ul>
</div>

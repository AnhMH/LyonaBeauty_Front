<?php 
$_url = !empty($_url) ? $_url : '';
$_urlActive = 'current-menu-item current_page_item current-menu-ancestor current_page_ancestor';
?>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item <?php echo ($controller == 'home' || empty($_url)) ? $_urlActive : '';?>">
    <a href="<?php echo $BASE_URL;?>">Trang chủ</a>
</li>
<?php if (!empty($cates)): ?>
<?php foreach ($cates as $cate): ?>
<?php if (empty($cate['root_id'])): ?>
<li class="menu-item <?php echo !empty($cate['sub_cates']) ? 'herald-mega-menu' : '';?> <?php echo $_url == $cate['url'] ? $_urlActive : ''; ?>">
    <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $cate['url'];?>"><?php echo $cate['name'];?></a>
    <?php if (!empty($cate['sub_cates'])): ?>
    <ul class="sub-menu">
        <li class="container herald-section ">
            <div class="row">
                <div class="col-lg-3 herald-mega-menu-sub-cats">
                    <ul>
                        <?php foreach ($cate['sub_cates'] as $subCate): ?>
                        <li><a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $subCate['url']; ?>"><?php echo $subCate['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="herald-module col-lg-9">
                    <div class="row row-eq-height">
                        <?php if (!empty($cate['default_articles'])): ?>
                        <?php foreach ($cate['default_articles'] as $da): ?>
                        <article class="herald-lay-i post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="herald-post-thumbnail herald-format-icon-small">
                                <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $da['url']; ?>" title="<?php echo $da['name']; ?>">
                                    <img width="215" height="120" src="<?php echo !empty($da['image']) ? $da['image'] : ''; ?>" class="attachment-herald-lay-d size-herald-lay-d wp-post-image" alt="<?php echo $da['name']; ?>" srcset="<?php echo !empty($da['image']) ? $da['image'] : ''; ?>" sizes="(max-width: 215px) 100vw, 215px" />
                                </a>
                            </div>
                            <div class="entry-header">
                                <span class="meta-category meta-small"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $da['url']; ?>" class="herald-cat-<?php echo $da['cate_id'];?>"><?php echo $da['cate_name'];?></a></span>

                                <h2 class="entry-title h6"><a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $da['url']; ?>"><?php echo $da['name']; ?></a></h2>
                                <div class="entry-meta meta-small"><div class="meta-item herald-date"><span class="updated"><?php echo date('Y-m-d', $da['updated']);?></span></div></div>
                            </div>
                        </article>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <?php endif; ?>
</li>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>
<!--<li class="menu-item menu-item-type-post_type menu-item-object-page">
    <a href="<?php echo $BASE_URL;?>">Liên hệ</a>
</li>-->

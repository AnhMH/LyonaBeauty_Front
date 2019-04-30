<div id="collection">
    <div class="columns-container">
        <div class="container" id="columns">
            <!--breadcrumb-->
            <div class="breadcrumb clearfix">
                <div class="tfsBreadcrumb ">
                    <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
                        <li><a href="<?php echo $BASE_URL;?>" target="_self">Trang chủ</a></li>
                        <li class="active"><span><?php echo $cateName; ?></span></li>
                    </ol>
                </div>
            </div>
            <!--/breadcrumb-->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <!--module danh muc-->
                    <div class="block left-module">
                        <p class="title_block">Danh mục bài viết</p>
                        <div class="block_content">
                            <!-- layered -->
                            <div class="layered layered-category">
                                <div class="layered-content show">
                                    <?php if (!empty($_settings['blog_cates'])): ?>
                
                                    <ul class="tree-menu">
                                        <?php foreach ($_settings['blog_cates'] as $bc): ?>
                                        <li class="<?php echo ($bc['name'] == $cateName) ? 'active' : '';?>">
                                            <span></span>
                                            <a class="<?php echo ($bc['name'] == $cateName) ? 'current' : '';?>" href="<?php echo $BASE_URL.'/tin-tuc/'.$bc['url'];?>" title="<?php echo $bc['name'];?>" target="_self">
                                                <?php echo $bc['name']; ?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!--/module danh muc-->
                    <!--module bai viet moi-->
                    <div class="block left-module">
                        <p class="title_block">Bài viết mới nhất</p>
                        <div class="block_content">
                            <!-- layered -->
                            <?php if (!empty($newPosts)): ?>
                            <div class="layered">
                                <div class="layered-content show">
                                    <ul class="blog-list-sidebar clearfix">
                                        <!--Begin: Bài viết mới nhất-->
                                        <?php foreach ($newPosts as $p): ?>
                                        <li>
                                            <div class="post-thumb">
                                                <a href="<?php echo $BASE_URL.'/bai-viet/'.$p['url'];?>">
                                                    <img src="<?php echo $p['image'];?>" alt="<?php echo $p['name'];?>">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <h5 class="entry_title">
                                                    <a href="<?php echo $BASE_URL.'/bai-viet/'.$p['url'];?>"><?php echo $p['name'];?></a>
                                                </h5>
                                                <div class="post-meta">
                                                    <span class="date"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', $p['created']);?></span>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endforeach; ?>
                                        <!--End: Bài viết mới nhất-->
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>
                            
                            <!-- ./layered -->
                        </div>
                    </div>
                    <!--/module bai viet moi-->
                </div>
                <!--/left_column-->
                <!--right_column-->
                <div class="center_column col-xs-12 col-sm-9 product-col" id="center_column">
                    <h2 class="page-heading">
                        <span class="page-heading-title2"><?php echo $cateName;?></span>
                    </h2>
                    <!--blog-posts-->
                    <ul class="blog-posts">
                        <?php if (!empty($data)): ?>
                        <?php foreach ($data as $v): ?>
                        <li class="post-item">
                            <article class="entry">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="entry-thumb image-hover2 text-center" data-gtm-vis-has-fired-2408055_54="1">
                                            <a href="<?php echo $BASE_URL.'/bai-viet/'.$v['url'];?>">
                                                <img src="<?php echo $v['image'];?>" alt="<?php echo $v['name'];?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="entry-ci">
                                            <h3 class="entry-title"><a href="#"><?php echo $v['name'];?></a></h3>
                                            <div class="entry-meta-data">
                                                <span class="cat">
                                                    <i class="fa fa-folder-o"></i>
                                                    <a href="<?php echo $BASE_URL.'/tin-tuc'.$v['cate_url'];?>"><?php echo $v['cate_name'];?></a>
                                                </span>
                                                <span class="date"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', $v['created']);?></span>
                                            </div>
                                            <div class="entry-excerpt">
                                                <?php echo $v['description'];?>
                                            </div>
                                            <div class="entry-more">
                                                <a href="<?php echo $BASE_URL.'/bai-viet/'.$v['url'];?>">Xem thêm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                    <!--/blog-posts-->
                    <div class="sortPagiBar clearfix">
                        <?php echo $this->Paginate->render($total, $limit); ?>
                    </div>
                </div>
                <!--/right_column-->
            </div>
        </div>
    </div>
</div>
<div class="left-block">
    <a href="<?php echo $BASE_URL.'/san-pham/'.$product['url'];?>"  title="">
        <img class="img-responsive" alt="product" src="<?php echo $product['image'];?>"/>
    </a>
<!--    <div class="quick-view">
        <a title="Xem chi tiết" class="compare" href="<?php echo $BASE_URL.'/san-pham/'.$product['url'];?>"></a>
        <a href="javascript:;" class="qv-e-button btn-quickview-1 search" title="Xem nhanh" data-handle="https://bookeeng.xyz/faceshop/ajaxproductdetail.php"></a>
    </div>-->
    <div class="add-to-cart">
        <a class="add-to-car" title="Add to Cart" href="javascript:;" data-image="https://product.hstatic.net/1000036599/product/0001279_natural-sun-eco-ice-air-puff-sun-spf50-pa_540_large.jpeg" data-sku="31500179" data-url="#" data-title="Sữa Chống Nắng Hạ Nhiệt Làn Da NATURAL SUN ECO ICE AIR PUFF SUN SPF50+PA+++" data-price="67900000" data-variantid="1026323701">Thêm vào giỏ</a>
    </div>
</div>
<div class="right-block">
    <h5 class="product-name">
        <a href="<?php echo $BASE_URL.'/san-pham/'.$product['url'];?>"><?php echo $product['name'];?></a>
    </h5>
    <div class="content_price">
        <?php if (!empty($product['discount_price'])): ?>
        <span class="price product-price"><?php echo number_format($product['price']-$product['discount_price']);?>₫</span>
        <span class="price old-price"><?php echo number_format($product['price']);?>₫</span>
        <?php else: ?>
        <span class="price product-price"><?php echo number_format($product['price']);?>₫</span>
        <?php endif; ?>
    </div>
</div>


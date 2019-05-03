<?php

use App\Lib\Api;
use Cake\Core\Configure;

$session = $session = $this->request->session();;
$cart = array();
$data = $this->request->getData();

$sessionKey = Configure::read('Config.cartSessionKey');
if ($session->check($sessionKey)) {
    $cart = $session->read($sessionKey);
}
$id = $data['product_id'];
$qty = !empty($cart[$id]['qty']) ? $cart[$id]['qty'] + $data['qty'] : $data['qty'];
if (!empty($cart[$id])) {
    $cart[$data['product_id']]['qty'] = $qty;
} else {
    $product = Api::call(Configure::read('API.url_products_detail'), array('id' => $id));
    $cart[$id] = array(
        'id' => $id,
        'url' => !empty($product['url']) ? $product['url'] : '',
        'image' => !empty($product['image']) ? $product['image'] : '',
        'name' => !empty($product['name']) ? $product['name'] : '',
        'price' => !empty($product['discount_price']) ? $product['price'] - $product['discount_price'] : $product['price'],
        'qty' => $qty
    );
}

$total = 0;
$totalPrice = 0;
$productHtml = "";
foreach ($cart as $k => $v) {
    if ($k == 'html') {
        continue;
    }
    $total += $v['qty'];
    $totalPrice += $v['price'];
    if (!empty($v['name'])) {
        $_price = number_format($v['price']);
        $_link = $this->BASE_URL.'/san-pham/'.$v['url'];
        $productHtml .= "<li class='product-info' data-id='{$v['id']}'>
                    <div class='p-left'>
                        <a href='{$_link}'>
                            <img class='img-responsive' src='{$v['image']}' alt='{$v['name']}'>
                        </a>
                    </div>
                    <div class='p-right'>
                        <p class='p-name'>{$v['name']}</p>
                        <p class='p-rice'>{$_price}đ</p>
                        <p>Số lượng: {$v['qty']}</p>
                    </div>
                </li>";
    }
    
}
$cart['total'] = $total;
$html = "<div class='cart-block-content'>
    <h5 class='cart-title'>Bạn hiện có {$total} sản phẩm</h5>
    <div class='cart-block-list'>
        <ul>
            {$productHtml}
        </ul>
    </div>
    <div class='toal-cart'>
        <span>Tổng tiền</span>
        <span class='toal-price pull-right'>".number_format($totalPrice)."₫</span>
    </div>
    <div class='cart-buttons'>
        <a href='".$this->BASE_URL.'/thanh-toan'."' class='btn-check-out'>Thanh toán</a>
    </div>
</div>";
$cart['html'] = $html;
$session->write($sessionKey, $cart);
$cart[$id]['qty'] = $data['qty'];
$result = array(
    'total' => $total,
    'data' => $cart[$id],
    'html' => $html
);
echo json_encode($result);
exit();

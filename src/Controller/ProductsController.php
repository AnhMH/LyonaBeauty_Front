<?php

/* 
 * Products page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class ProductsController extends AppController {
    /**
     * List products
     */
    public function index($url = '') {
        $ids = array();
        $rootId = '';
        $cateName = '';
        $limit = 1;
        $cates = !empty($this->_settings['product_cates']) ? $this->_settings['product_cates'] : '';
        foreach ($cates as $c) {
            if ($c['url'] == $url) {
                $ids[] = $c['id'];
                $rootId = $c['id'];
                $cateName = $c['name'];
            }
            if (!empty($rootId) && $c['parent_id'] == $rootId) {
                $ids[] = $c['id'];
            }
        }
        $param = $this->getParams(array(
            'cate_id' => implode(',', $ids),
            'limit' => $limit,
            'disable' => 0
        ));
        $pageTitle = $cateName;
        $result = Api::call(Configure::read('API.url_products_list'), $param);
        $total = !empty($result['total']) ? $result['total'] : 0;
        $data = !empty($result['data']) ? $result['data'] : array();
        $this->set(compact(
            'data',
            'limit',
            'total',
            'param',
            'cateName',
            'pageTitle'
        ));
    }
}
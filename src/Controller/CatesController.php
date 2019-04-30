<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class CatesController extends AppController {
    /**
     * People top page
     */
    public function index($url = '') {
        // Init
        $ids = array();
        $rootId = '';
        $cateName = '';
        $limit = 1;
        $cates = !empty($this->_settings['blog_cates']) ? $this->_settings['blog_cates'] : array();
        
        // Get cate id
        foreach ($cates as $c) {
            if ($c['url'] == $url) {
                $cateName = $c['name'];
                $ids[] = $c['id'];
                $rootId = $c['id'];
            }
            if (!empty($rootId) && $c['parent_id'] == $rootId) {
                $ids[] = $c['id'];
            }
        }
        $param = array(
            'cate_id' => implode(',', $ids),
            'limit' => $limit,
            'get_new_posts' => 1
        );
        $pageTitle = $cateName;
        
        // Call API
        $result = Api::call(Configure::read('API.url_posts_list'), $param);
        $data = !empty($result['data']) ? $result['data'] : array();
        $total = !empty($result['total']) ? $result['total'] : 0;
        $newPosts = !empty($result['new_posts']) ? $result['new_posts'] : array();
        
        // Set data
        $this->set(compact(
            'data',
            'limit',
            'total',
            'param',
            'cateName',
            'pageTitle',
            'newPosts'
        ));
    }
}
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
        $ids = array();
        $rootId = '';
        $cateName = '';
        foreach ($this->_settings['cates'] as $c) {
            if ($c['url'] == $url) {
                $cateName = $c['name'];
                $ids[] = $c['id'];
                $rootId = $c['id'];
            }
            if (!empty($rootId) && $c['root_id'] == $rootId) {
                $ids[] = $c['id'];
            }
        }
        $param = array(
            'cate_id' => implode(',', $ids),
            'page' => 1,
            'limit' => 7
        );
        $data = Api::call(Configure::read('API.url_posts_all'), $param);
        $param['cate_name'] = $cateName;
        $this->set('_url', $url);
        $this->set('data', $data);
        $this->set('param', $param);
    }
}
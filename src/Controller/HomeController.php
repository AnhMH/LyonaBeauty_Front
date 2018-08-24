<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class HomeController extends AppController {
    /**
     * People top page
     */
    public function index() {
        $data = Api::call(Configure::read('API.url_posts_gethomedata'), array());
        $this->set('data', $data);
    }
}
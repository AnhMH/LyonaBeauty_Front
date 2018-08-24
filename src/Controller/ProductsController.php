<?php

/* 
 * Products page
 */

namespace App\Controller;

class ProductsController extends AppController {
    /**
     * List products
     */
    public function index() {
        $data = array(
            array(
                'image_path' => $this->BASE_URL . '/img/slider1.jpg',
                'title' => 'Ban trang diem',
                'description' => 'The atmosphere in New York is lorem ipsum.'
            ),
            array(
                'image_path' => $this->BASE_URL . '/img/slider1.jpg',
                'title' => 'Tu trang diem',
                'description' => 'The atmosphere in New York is lorem ipsum.'
            ),
            array(
                'image_path' => $this->BASE_URL . '/img/slider1.jpg',
                'title' => 'Guong trang diem',
                'description' => 'The atmosphere in New York is lorem ipsum.'
            ),
        );
        $this->set('data', $data);
    }
}
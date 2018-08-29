<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'lyonabeauty');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_cates_all', 'cates/all');

Configure::write('API.url_settings_general', 'settings/general');

Configure::write('API.url_posts_gethomedata', 'posts/gethomedata');
Configure::write('API.url_posts_detail', 'posts/detail');
Configure::write('API.url_posts_all', 'posts/all');
<?php
/* 
 * Production's Config
 */

use Cake\Core\Configure;

define('USE_SUB_DIRECTORY', '');
Configure::write('API.Host', 'http://api.conlatatca.info/public/');
Configure::write('Config.HTTPS', true);

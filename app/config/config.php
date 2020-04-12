<?php
declare(strict_types = 1);

/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and
 * command line.
 * NOTE: please remove this comment.
 */

use Phalcon\Config;

defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: dirname(__FILE__, 3) . '');
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new Config(
    [
        'database'    => [
            'adapter'  => 'Mysql',
            'host'     => 'localhost',
            'username' => 'phalcon',
            'password' => 'Test123',
            'dbname'   => 'phalcon',
            'charset'  => 'utf8',
        ],
        'application' => [
            'appDir'         => APP_PATH . '/',
            'controllersDir' => APP_PATH . '/controllers/',
            'modelsDir'      => APP_PATH . '/models/',
            'migrationsDir'  => APP_PATH . '/migrations/',
            'viewsDir'       => APP_PATH . '/views/',
            'pluginsDir'     => APP_PATH . '/plugins/',
            'libraryDir'     => APP_PATH . '/library/',
            'cacheDir'       => BASE_PATH . '/cache/',
            'baseUri'        => '/',
        ],
    ]
);

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb09dd98423a6c6d5fff2ee79154a961f
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '1e05f57d4fb3c51b02535c3a83cc5282' => __DIR__ . '/..' . '/jasny/php-functions/src/array_functions.php',
        '8244e43da34768445753736fdda30c9a' => __DIR__ . '/..' . '/jasny/php-functions/src/case_functions.php',
        '74ee1fa27e88cd661487c81bcbfc9150' => __DIR__ . '/..' . '/jasny/php-functions/src/string_functions.php',
        '1c21e58ab75c6f4e8836a13ca7816280' => __DIR__ . '/..' . '/jasny/php-functions/src/server_functions.php',
        '225020b76533c492a8badd5f69101dea' => __DIR__ . '/..' . '/jasny/php-functions/src/type_functions.php',
        'd881243bde3bd147ad8578d0f414ece6' => __DIR__ . '/..' . '/jasny/php-functions/src/file_functions.php',
        'c87c4d040b5485a5ae70605ac83932ef' => __DIR__ . '/..' . '/jasny/php-functions/src/func_functions.php',
        '89253d84c39bfbebb72887ce9acbc747' => __DIR__ . '/..' . '/jasny/php-functions/src/object_functions.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Swoole\\IDEHelper\\' => 17,
        ),
        'P' => 
        array (
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
        ),
        'J' => 
        array (
            'Jasny\\HttpMessage\\' => 18,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'CloudsDotEarth\\Code\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Swoole\\IDEHelper\\' => 
        array (
            0 => __DIR__ . '/..' . '/swoole/ide-helper/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Jasny\\HttpMessage\\' => 
        array (
            0 => __DIR__ . '/..' . '/jasny/http-message/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'CloudsDotEarth\\Code\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/server',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb09dd98423a6c6d5fff2ee79154a961f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb09dd98423a6c6d5fff2ee79154a961f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

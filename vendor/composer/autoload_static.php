<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0f7e1dba682b8816619c7c3c38c5805
{
    public static $files = array (
        '85f9290491d7963bdacb4ee23146bda7' => __DIR__ . '/../..' . '/app/Helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/controllers/AdminController.php',
        'App\\Controllers\\ArticlesController' => __DIR__ . '/../..' . '/app/controllers/ArticlesController.php',
        'App\\Controllers\\Auth\\LoginController' => __DIR__ . '/../..' . '/app/controllers/LoginController.php',
        'App\\Controllers\\Auth\\RegisterController' => __DIR__ . '/../..' . '/app/controllers/RegisterController.php',
        'App\\Controllers\\Auth\\ResetController' => __DIR__ . '/../..' . '/app/controllers/ResetController.php',
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/controllers/auth/LoginController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\RegisterController' => __DIR__ . '/../..' . '/app/controllers/auth/RegisterController.php',
        'App\\Controllers\\ResetController' => __DIR__ . '/../..' . '/app/controllers/auth/ResetController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Models\\Admin\\Users' => __DIR__ . '/../..' . '/app/models/admin/Users.php',
        'App\\Models\\Article' => __DIR__ . '/../..' . '/app/models/Article.php',
        'App\\Models\\Project' => __DIR__ . '/../..' . '/app/models/Project.php',
        'ComposerAutoloaderInite0f7e1dba682b8816619c7c3c38c5805' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInite0f7e1dba682b8816619c7c3c38c5805' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite0f7e1dba682b8816619c7c3c38c5805::$classMap;

        }, null, ClassLoader::class);
    }
}

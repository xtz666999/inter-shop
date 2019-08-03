<?php



function __autoload($className)
{
    // массив всех директорий где лежат классы
    $directories = [
        'controllers/',
        'library/'
    ];

    foreach ($directories as $directory) {
        $path = '../' . $directory . $className . '.php';
        if (file_exists($path)) {
            include_once $path;
        }
    }
}

$test = new Router();
$test2 = new IndexController();
$test2->testAction();
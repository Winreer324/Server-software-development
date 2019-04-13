<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// require __DIR__ . '/../vendor/autoload.php';
//  подключаем всё YII 2 окружение 
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// создаётся дерево конфиг приложения (массив который описывает 
// начальные значения всего приложение и его отдельные компоненты)
$config = require __DIR__ . '/../config/web.php';
// создаёт экзеипляр web-приложения
(new yii\web\Application($config))->run();

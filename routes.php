<?php
use Hyperf\HttpServer\Router\Router;
Router::get('/admins', 'Twitf\Administration\Controller\IndexController@index');

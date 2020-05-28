 <?php
//Laravel Apache除‘/’外所有路由 404（设置index.php的.htaccess）
//https://laravel.com/docs/5.0/installation#pretty-urls
//https://segmentfault.com/q/1010000002422408

$router->get('laracast', 'PagesController@home');
$router->get('laracast/about', 'PagesController@about');
$router->get('laracast/contact', 'PagesController@contact');

$router->get('laracast/users', 'UsersController@index');
$router->post('laracast/users', 'UsersController@store');
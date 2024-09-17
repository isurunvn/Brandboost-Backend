<?php

// Define your routes here (this can be expanded to map more complex routes to controllers)
$routes = [
    '/' => 'HomeController@index',
    '/login' => 'UserController@login',
    '/register' => 'UserController@register'
];

?>

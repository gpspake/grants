<?php

get('/', function () {
    return redirect('/grants');
});

get('grants', 'GrantController@index');
get('grants/{slug}', 'GrantController@showGrant');

// Admin area
get('admin', function () {
    return redirect('/admin/grant');
});
$router->group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {
    resource('admin/grant', 'GrantController');
    resource('admin/tag', 'TagController');
    get('admin/upload', 'UploadController@index');
});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');
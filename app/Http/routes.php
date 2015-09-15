<?php

get('/', function () {
    return redirect('/grants');
});

get('grants', 'GrantController@index');
get('grants/{slug}', 'GrantController@showGrant');

$router->group([
    'namespace' => 'Admin',
    'middleware' => 'casauth',
    'prefix' => 'admin'
], function () {
    get('/', function () {
        return redirect('/admin/grant');
    });
    resource('grant', 'GrantController', ['except' => 'show']);
    resource('tag', 'TagController');
    get('upload', 'UploadController@index');
});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');

get('phpinfo', function () {
    phpinfo();
});

$router->group([
    'prefix' => 'api/v1',
    'namespace' => 'Api',
], function () {
    resource('grants', 'GrantController');
});

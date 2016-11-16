<?php

get('/', function () {
    return redirect('/grants');
});

get('grants', 'GrantController@index');
get('grants/{slug}', 'GrantController@showGrant');

// Logging in and out
get('login', function () {
    return redirect('admin');
});
get('logout', function () {
    return redirect('admin/logout');
});

$router->group([
    'namespace' => 'Admin',
    'middleware' => 'casauth',
    'prefix' => 'admin'
], function () {
    get('/', function () {
        return redirect('/admin/grant');
    });
    resource('user', 'UserController', ['except' => 'show']);
    resource('grant', 'GrantController', ['except' => 'show']);
    resource('tag', 'TagController');
    get('upload', 'UploadController@index');
    get('logout', 'UserController@logout');
});

get('phpinfo', function () {
    phpinfo();
});

$router->group([
    'prefix' => 'api/v1',
    'namespace' => 'Api',
], function () {
    resource('grants', 'GrantController');
});

get('foundation', function () {
    return view('foundation.layouts.index');
});

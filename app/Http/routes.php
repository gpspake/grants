<?php

get('/', function () {
    return redirect('/grants');
});

get('grants', 'GrantController@index');
get('grants/{slug}', 'GrantController@showGrant');
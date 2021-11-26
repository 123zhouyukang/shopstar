<?php
$api = app('Dingo\Api\Routing\Router');

$api->version('v1',[
    'middleware' => ['bindings'],
    'namespace' => 'App\Http\Controllers\Api\V1'
],function ($api){

});
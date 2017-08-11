<?php

event('team.routing', app('router'));
$namespacePrefix = '\\'.'Tyondo\\Team\\Http\\Controllers'.'\\';
//-----Back-end ----------//

Route::resource('career', $namespacePrefix.'CareerController', [
    'names'=> [
        'index' => 'tyondo.careers.list',
        'create' => 'tyondo.careers.create',
        'store' => 'tyondo.careers.store',
        'update' => 'tyondo.careers.update',
        'destroy' => 'tyondo.careers.destroy',
        'show' => 'tyondo.careers.show',
        'edit' => 'tyondo.careers.edit',
    ]
]);
<?php

//its shouldn't  be here, but only for next developers inner peace....  ,

$container['Auth'] = function ($container) {

    return new src\app\Controllers\Auth($container);

};



$app->get('/test', 'Auth:test');
$app->get('/testb', '');




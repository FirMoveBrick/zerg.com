<?php

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

//Route::rule（‘路由表达式”，‘路由地址‘，‘请求类，‘路由参数（数组），‘变量规则（数组）‘）；

Route::get('hello/:name', 'index/hello');

Route::get('banner/:id', 'api/v1.Banner/getBanner');
return [

];

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// 1日目 2/28 
Route::get('helloy',function(){
    return '<html><body><h1>hello</h1><p>This is sample page.</p></body><html>';
});


Route::get('helloC/{id?}/{pass?}','HelloController@index');

// 2日目 3/01 実習問題2_1
Route::get('jissyu2','JissyuController@index');

// 2日目 46P

/* Route::get('hello','HelloController@index'); */
/* 
Route::get('hello','HelloController@index');
Route::get('hello/other','helloController@other');

Route::get('hello/{msg?}',function($msg= 'no message.'){

    $jk = <<<EOF

</head>
<body>
    <h1>Hello</h1>
    <p>{$msg}</p>
    <p>これは、サンプルで作ったページです。</p>
</body>
</html>

EOF;

return $html;


});
 */

Route::get('hello','HelloController@index');

Route::post('hello','HelloController@post');

Route::get('Jissyu3','Jissyu3_1controller@index');

Route::post('Jissyu3','Jissyu3_1controller@post');

Route::get('Jissyu4','Jissyu3_2controller@index');

Route::post('Jissyu4','Jissyu3_2controller@post');
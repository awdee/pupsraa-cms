<?php

Route::pattern('id', '\d+');
Route::pattern('hash', '[a-z0-9]+');
Route::pattern('hex', '[a-f0-9]+');
Route::pattern('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
Route::pattern('base', '[a-zA-Z0-9]+');
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('username', '[a-z0-9_-]{3,16}');

Route::get('index', [ 'as' => 'browse.underconstruct', 'uses' => 'HomeController@showUnderconstruct' ]);
Route::get('/', [ 'as' => 'browse.home', 'uses' => 'HomeController@showHome' ]);
Route::get('connect', [ 'as' => 'browse.connect', 'uses' => 'HomeController@showHome' ]);
Route::get('give', [ 'as' => 'browse.give', 'uses' => 'HomeController@showHome' ]);
Route::get('news', [ 'as' => 'browse.news', 'uses' => 'HomeController@showHome' ]);
Route::get('membership', [ 'as' => 'browse.membership', 'uses' => 'HomeController@showHome' ]);
Route::get('organization', [ 'as' => 'browse.organization', 'uses' => 'HomeController@showHome' ]);
Route::get('contact', [ 'as' => 'browse.contact', 'uses' => 'HomeController@showHome' ]);

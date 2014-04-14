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
Route::get('whats-up', [ 'as' => 'browse.whats-up', 'uses' => 'WhatsUpController@showWhatsUp' ]);
Route::get('donate', [ 'as' => 'browse.donate', 'uses' => 'DonateController@showDonate' ]);
Route::post('donate/submit', [ 'as' => 'browse.donate', 'uses' => 'DonateController@storeDonate' ]);
Route::get('register', [ 'as' => 'browse.register', 'uses' => 'RegisterController@showRegister' ]);
Route::get('contact-us', [ 'as' => 'browse.contact-us', 'uses' => 'ContactUsController@showContactUs' ]);

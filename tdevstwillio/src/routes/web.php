<?php

// use Bitfumes\Contact\Http\Controllers\ContactController;

use Bitfumes\Contact\Http\Controllers\ContactController;
use Illuminate\Http\Request;

Route::group(['namespace'=>'Testing\TestContact\Http\Controllers'],function()
{
    Route::get('contact','ContactController@index')->name('contact');
    Route::post('contact','ContactController@send');
});

?>

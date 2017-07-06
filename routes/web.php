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





Route::get('/','Admin\heritagecontroller@index');

Route::get('/heritage/{heritage}','Admin\heritagecontroller@show')->name('heritage.show');

Route::post('/','Admin\heritagecontroller@store');


Route::get('/place','Admin\placecontroller@index');

Route::post('/place','Admin\placecontroller@store');

Route::get('/place/{place}','Admin\placecontroller@show')->name('place.show');

Route::get('/culture','Admin\culturecontroller@index');

Route::get('/culture/{culture}','Admin\culturecontroller@show')->name('culture.show');

Route::post('/culture','Admin\culturecontroller@store');

Route::get('/myth','Admin\mythcontroller@index');

Route::get('/myth/{myth}','Admin\mythcontroller@show')->name('myth.show');

Route::post('/myth','Admin\mythcontroller@store');

Route::get('/event','Admin\specialeventcontroller@index');

Route::get('/event/{event}','Admin\specialeventcontroller@show')->name('event.show');

Route::post('/event','Admin\specialeventcontroller@store');




Route::get('/resort', function () {
    return view('display.resort');
});


Route::get('/about', function () {
    return view('display.about');
});


Route::get('/contact', function () {
    return view('display.contact');
});


Route::get('/admin', function () {
    return view('admin.show.admin');
});
Route::get('/admin/culture','Admin\culturecontroller@admin_index');

Route::get('/admin/guide', function () {
    return view('admin.show.adminGuide');
});
Route::get('/admin/myth','Admin\mythcontroller@admin_index');


Route::get('/admin/place','Admin\placecontroller@admin_index');
Route::get('/admin/resort', function () {
    return view('admin.show.adminResort');
});
Route::get('/admin/event', function () {
    return view('admin.show.adminSpecialevent');
});
Route::get('/admin/event','Admin\specialeventcontroller@admin_index');

Route::get('/admin/heritage','Admin\heritagecontroller@admin_index');





Route::get('/admin/culture/edit', function () {
    return view('admin.edit.adminCulture');
});

Route::delete('/admin/culture/{culture}','Admin\culturecontroller@destroy' );

Route::put('/admin/culture/{culture}','Admin\culturecontroller@update' )->name('culture.update');

Route::get('/admin/culture/{culture}','Admin\culturecontroller@edit' )->name('culture.edit');






Route::get('/admin/guide/edit', function () {
    return view('admin.edit.adminGuide');
});






Route::get('/admin/myth/edit', function () {
    return view('admin.edit.adminMyth');
});

Route::delete('/admin/myth/{myth}','Admin\mythcontroller@destroy' );

Route::put('/admin/myth/{myth}','Admin\mythcontroller@update' )->name('myth.update');

Route::get('/admin/myth/{myth}','Admin\mythcontroller@edit' )->name('myth.edit');







Route::get('/admin/place/edit', function () {
    return view('admin.edit.adminPlace');
});

Route::delete('/admin/place/{place}','Admin\placecontroller@destroy' );

Route::put('/admin/place/{place}','Admin\placecontroller@update' )->name('place.update');

Route::get('/admin/place/{place}','Admin\placecontroller@edit' )->name('place.edit');






Route::get('/admin/resort/edit', function () {
    return view('admin.edit.adminResort');
});






Route::get('/admin/event/edit', function () {
    return view('admin.edit.adminSpecialevent');
});

Route::delete('/admin/event/{event}','Admin\specialeventcontroller@destroy' );

Route::put('/admin/event/{event}','Admin\specialeventcontroller@update' )->name('event.update');

Route::get('/admin/event/{event}','Admin\specialeventcontroller@edit' )->name('event.edit');







Route::get('/admin/heritage/edit', function () {
    return view('admin.edit.adminHeritage');
});

Route::delete('/admin/heritage/{heritage}','Admin\heritagecontroller@destroy' );

Route::put('/admin/heritage/{heritage}','Admin\heritagecontroller@update' )->name('heritage.update');

Route::get('/admin/heritage/{heritage}','Admin\heritagecontroller@edit' )->name('heritage.edit');
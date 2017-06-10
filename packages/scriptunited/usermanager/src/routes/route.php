<?php 


Route::delete('users/{id}','\Scriptunited\Usermanager\Controllers\UsersController@destroy')->where('id','.*');
Route::put('users/','\Scriptunited\Usermanager\Controllers\UsersController@update');
Route::get('users/{any}', '\Scriptunited\Usermanager\Controllers\UsersController@implicitRoute')->where('any','.*');
Route::post('users/{any}', '\Scriptunited\Usermanager\Controllers\UsersController@implicitRoute')->where('any','.*');
Route::resource('users','\Scriptunited\Usermanager\Controllers\UsersController', ['only'=>['index','store','update','delete']]);



Route::delete('groups/{id}','\Scriptunited\Usermanager\Controllers\GroupsController@destroy')->where('id','.*');
Route::put('groups/','\Scriptunited\Usermanager\Controllers\GroupsController@update');
Route::get('groups/{any}', '\Scriptunited\Usermanager\Controllers\GroupsController@implicitRoute')->where('any','.*');
Route::post('groups/{any}', '\Scriptunited\Usermanager\Controllers\GroupsController@implicitRoute')->where('any','.*');
Route::resource('groups','\Scriptunited\Usermanager\Controllers\GroupsController', ['only'=>['index','store','update','delete']]);



Route::delete('modules/{id}','\Scriptunited\Usermanager\Controllers\ModulesController@destroy')->where('id','.*');
Route::put('modules/','\Scriptunited\Usermanager\Controllers\ModulesController@update');
Route::get('modules/{any}', '\Scriptunited\Usermanager\Controllers\ModulesController@implicitRoute')->where('any','.*');
Route::post('modules/{any}', '\Scriptunited\Usermanager\Controllers\ModulesController@implicitRoute')->where('any','.*');
Route::resource('modules','\Scriptunited\Usermanager\Controllers\ModulesController');






 ?>
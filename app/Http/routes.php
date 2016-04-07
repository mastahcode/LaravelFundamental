<?php

Route::get('parsing','BelajarParsingData@ParsingData');

Route::get('blade','BelajarBladeTemplate@belajarBlade');

Route::get('layout','BelajarBladeTemplate@panggilLayout');

Route::get('custemer','isiCustomer@index');



Route::get('middleware','MiddlewareController@index');

Route::get('rahasia','MiddlewareController@rahasia');
Route::get('tolak','MiddlewareController@tolak');
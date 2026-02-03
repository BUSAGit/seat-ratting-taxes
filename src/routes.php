<?php

Route::group([

    'namespace' => 'Helious\SeatRattingTaxes\Http\Controllers',
    'prefix' => 'ratting-taxes',
    'middleware' => [
        'web',
        'auth',
        'can:seat-ratting-taxes.access',
    ],
], function()
{

    Route::get('/', [
        'uses' => 'RattingTaxController@index',
        'as' => 'ratting-taxes::index',
    ]);
    Route::get('/journal-data', [
        'uses' => 'RattingTaxController@getJournalData',
        'as' => 'ratting-taxes::journal-data',
    ]);
    Route::get('/get-monthly-data', [
        'uses' => 'RattingTaxController@getMonthlyData',
        'as' => 'ratting-taxes::get-monthly-data',
    ]);

});

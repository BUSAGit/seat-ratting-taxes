<?php

Route::group([

    'namespace' => 'Helious\SeatRattingTaxes\Http\Controllers',
    'prefix' => 'ratting-moons',
    'middleware' => [
        'web',
        'auth',
        'can:ratting-moons.access',
    ],
], function()
{

    Route::get('/', [
        'uses' => 'RattingTaxController@index',
        'as' => 'ratting-moons::index',
    ]);
    Route::get('/journal-data', [
        'uses' => 'RattingTaxController@getJournalData',
        'as' => 'ratting-moons::journal-data',
    ]);
    Route::get('/get-monthly-data', [
        'uses' => 'RattingTaxController@getMonthlyData',
        'as' => 'ratting-moons::get-monthly-data',
    ]);

});

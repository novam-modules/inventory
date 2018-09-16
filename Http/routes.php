<?php

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'namespace' => 'Admin\Inventory\Http\Controllers'], function()
{
    Route::resource('inventory', InventoryController::class);
});

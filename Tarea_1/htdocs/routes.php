<?php
    
    Route::get('/', 'Books_Controller@index');
    Route::get('/author', 'Author_Controller@index');
    Route::get('/publisher', 'Publisher_Controller@index');
    
    Route::dispatch();
?>

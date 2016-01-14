<?php

Route::group([
    'as'         => 'dev-utils:',
    'prefix'     => 'dev-utils',
    'namespace'  => 'Axn\LaravelDevUtils'
], function()
{

    Route::group([
        'as'         => 'packages.',
        'prefix'     => 'packages',
    ], function()
    {
        Route::get('/', [
            'as'   => 'index',
            'uses' => 'Controller@packages'
        ]);

            Route::get('/composer', [
                'as'   => 'composer',
                'uses' => 'Controller@packagesComposer'
            ]);

            Route::get('/bower', [
                'as'   => 'bower',
                'uses' => 'Controller@packagesBower'
            ]);
    });

});


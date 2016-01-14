<?php

Route::group([
    'as'         => 'dev-utils.',
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
            'as'   => 'packages.index',
            'uses' => 'Controller@packages'
        ]);

            Route::get('/composer', [
                'as'   => 'packages.composer',
                'uses' => 'Controller@packagesComposer'
            ]);

            Route::get('/bower', [
                'as'   => 'packages.bower',
                'uses' => 'Controller@packagesBower'
            ]);
    });

});


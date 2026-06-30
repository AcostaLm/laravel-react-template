<?php

arch('models extend Eloquent Model')
    ->expect('App\Models')
    ->toExtend('Illuminate\Database\Eloquent\Model');

arch('controllers extend base Controller')
    ->expect('App\Http\Controllers')
    ->toExtend('App\Http\Controllers\Controller');

arch('no global helpers')
    ->expect(['dd', 'dump', 'var_dump', 'print_r'])
    ->not->toBeUsed();

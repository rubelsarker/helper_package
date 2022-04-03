<?php

use Illuminate\Support\Facades\Route;

use Rsarker\Helper\Traits\Test;
Route::get('/helper',function (){

    dd(abc());

//    $this->Test();

});

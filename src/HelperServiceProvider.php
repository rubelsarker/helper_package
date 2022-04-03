<?php

namespace Rsarker\Helper;
use Illuminate\Support\ServiceProvider;
use Rsarker\Helper\Traits\Test;

class HelperServiceProvider extends ServiceProvider
{
    use Test;
    public function boot()
    {
//        if (file_exists($file = __DIR__.'/Functions/Function.php')) {
//            require $file;
//        }
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {

    }

}


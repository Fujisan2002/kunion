<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
        Paginator::useBootstrap();    //動画
        \URL::forceScheme('https'); //追加   

       // Paginator::useBootstrapFive();    公式ドキュメント
       //または Paginator::useBootstrapFour();    公式ドキュメント
    }
}

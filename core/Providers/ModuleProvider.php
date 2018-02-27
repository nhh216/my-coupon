<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 2/27/2018
 * Time: 9:52 AM
 */

namespace Core\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleProvider extends ServiceProvider
{
    public function boot()
    {
        $string = 'C:\xampp\htdocs\mycoupon\cccode/Frontend/route.php';
        $Viewpath = 'C:\xampp\htdocs\mycoupon\cccode/';
//        dd($string);
        $this->loadRoutesFrom($string);
        $this->loadViewsFrom($Viewpath .'Frontend/Views', 'front_end');
//        dd  ($urlView .'/Frontend/Views');
    }
    public function register()
    {

    }
}
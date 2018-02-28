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
        if(defined('LARAVEL_ADMIN'))
        {

        }
//        $string = 'C:\xampp\htdocs\mycoupon\cccode/Frontend/route.php';
//        $Viewpath = 'C:\xampp\htdocs\mycoupon\cccode/';
//        dd(FRONTEND_PATH);
        $this->loadRoutesFrom(FRONTEND_PATH . 'Frontend/route.php');
        $this->loadViewsFrom(FRONTEND_PATH .'Frontend/Views', 'front_end');
//        dd  ($urlView .'/Frontend/Views');
    }
    public function register()
    {

    }
}
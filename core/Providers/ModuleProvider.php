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
//        dd($string);
        $this->loadRoutesFrom($string);
    }
    public function register()
    {

    }
}
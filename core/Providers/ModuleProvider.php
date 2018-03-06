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
            if(LARAVEL_ADMIN)
            {
                require_once CORE_PATH . 'Admin/helper.php';
                $this->loadRoutesFrom(CORE_PATH.'Admin/route.php');
                $this->loadViewsFrom(CORE_PATH. 'Admin/Views','backend');
                $this->loadViewsFrom(CORE_PATH.'Admin/Auth','auth');
            }
            else
            {
                require_once FRONTEND_PATH .'Frontend/helper.php';
                $this->loadRoutesFrom(FRONTEND_PATH . 'Frontend/route.php');
                $this->loadViewsFrom(FRONTEND_PATH .'Frontend/Views', 'front_end');
            }

        }



    }
    public function register()
    {

    }
}
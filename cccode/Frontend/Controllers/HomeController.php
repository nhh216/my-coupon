<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 2/27/2018
 * Time: 9:58 AM
 */

namespace Frontend\Controllers;
use App\Http\Controllers\Controller;
use Frontend\Models\Category;
use Frontend\Models\Site;
use Frontend\Models\Coupon;

class HomeController extends  Controller
{

    protected $categories;
    public function __construct()
    {
        $this->categories = Category::all();
    }


    public function home()
    {
        $data['catList'] = $this->categories;
        $data['siteList'] = Site::getAllStores();
        $coupons['listcoupons'] = Coupon::getCouponLimit();
        return view('front_end.pages.home.home', $data, $coupons);
    }
}
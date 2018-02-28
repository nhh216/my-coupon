<?php
/**
 * Created by PhpStorm.
 * User: nhh21
 * Date: 2/27/2018
 * Time: 9:58 AM
 */

namespace Frontend\Controllers;
use App\Http\Controllers\Controller;
use Core\Models\Category;
use Core\Models\Site;
use Core\Models\Coupon;

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
        return view('front_end::pages.home.home', $data, $coupons);
    }


    public function single_coupon()
    {
        return view('front_end::pages.coupons.coupon-single');
    }

    public function showCouponsByStore($name, $id)
    {
        $data['catList'] = $this->categories;
        $data['siteList'] = Site::getAllStores();
        $data['listcoupons'] = Coupon::getStoreNameByID($id);
        $data['storeInfo'] = Site::getInfoStoreByID($id);
        return view('front_end::pages.stores.store_single', $data);
    }


    public function autocomplete(\Illuminate\Http\Request $request)
    {
        $term = $request->term;
        $data = Site::getStoreByKeySearch($term);
        $result = array();
        foreach ($data as $key => $v) {
            $result[] = [
                'id' => $v->id,
                'name' => $v->name,
                'logo' => $v->logo,
                'slug' => $v->slug
            ];
        }
        return response()->json($result);
    }

}
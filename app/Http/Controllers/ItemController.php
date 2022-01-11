<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Item;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function marketplace()
    {
        $items = Item::whereCheck('1')->wherePublished('1')->paginate(8);
        return view('item.marketplace', compact('items'));
    }

    public function category($slug) {

        $category_id = Category::whereSlug($slug)->value('id');
        $items = Item::whereCategory_id($category_id)->whereCheck('1')->wherePublished('1')->paginate(8);

        if (count($items) > 0) {
            return view('item.category', compact('items', 'slug'));
        }else {
            return redirect()->route('marketplace');
        }
    }

    public function country($slug) {

        $country_id = Country::whereSlug($slug)->value('id');
        $items = Item::whereCountry_id($country_id)->whereCheck('1')->wherePublished('1')->paginate(8);

        if (count($items) > 0) {
            return view('item.country', compact('items', 'slug'));
        }else {
            return redirect()->route('marketplace');
        }
    }

    public function region($slug) {

        $region_id = Region::whereSlug($slug)->value('id');
        $items = Item::whereRegion_id($region_id)->whereCheck('1')->wherePublished('1')->paginate(8);

        if (count($items) > 0) {
            return view('item.country', compact('items', 'slug'));
        }else {
            return redirect()->route('marketplace');
        }
    }

    public function city($slug) {

        $city_id = City::whereSlug($slug)->value('id');
        $items = Item::whereCity_id($city_id)->whereCheck('1')->wherePublished('1')->paginate(8);

        if (count($items) > 0) {
            return view('item.city', compact('items', 'slug'));
        }else {
            return redirect()->route('marketplace');
        }
    }

    public function store($slug) {

        $store = User::whereSlug($slug)->select('id', 'name')->firstOrFail();
        $items = Item::whereUser_id($store->id)->whereCheck('1')->wherePublished('1')->paginate(8);

        if (count($items) > 0) {
            return view('item.store', compact('items', 'store'));
        }else {
            return redirect()->route('marketplace');
        }
    }

    public function show($slug)
    {
        $item = Item::whereSlug($slug)->first();

        if (isset($item)) {
            Item::whereSlug($slug)->increment('views');
            return view('item.show', compact('item'));
        }else {
            return redirect()->route('marketplace');
        }

    }
}

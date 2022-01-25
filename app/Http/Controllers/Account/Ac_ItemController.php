<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\ItemImage;
use App\Models\Item;
use App\Models\Region;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Ac_ItemController extends Controller
{
    public function index () {
        $items = Item::whereUser_id(Auth::user()->id)->paginate(15);
        return view('marketplace.account.item.index', compact('items'));
    }

    public function sort ($sort) {

        if ($sort === "news") {
            $items = Item::whereUser_id(Auth::user()->id)->orderBy('created_at', 'asc')->get();
        }elseif ($sort === "old") {
            $items = Item::whereUser_id(Auth::user()->id)->orderBy('created_at', 'desc')->get();
        }elseif ($sort === "active") {
            $items = Item::whereUser_id(Auth::user()->id)->whereStatus('active')->get();
        }elseif ($sort === "pending") {
            $items = Item::whereUser_id(Auth::user()->id)->whereStatus('pending')->get();
        }elseif ($sort === "disable") {
            $items = Item::whereUser_id(Auth::user()->id)->whereStatus('disable')->get();
        }

        return view('marketplace.account.item.index', compact('items'));
    }

    public function create () {
        $countries = Country::all();
        $regions = Region::all();
        $cities = City::all();
        $categories = Category::wherePublished('1')->get();

        return view('marketplace.account.item.create', compact('categories', 'countries', 'regions', 'cities'));
    }

    public function store (Request $request) {

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|image',
        ]);

        $item = new Item();

        $item->title = $request->title;
        $item->user_id = Auth::user()->id;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->currency = $request->currency;
        $item->country_id = $request->country_id;
        $item->region_id = $request->region_id;
        $item->city_id = $request->city_id;
        $item->type = $request->type;
        $item->published = '1';
        $item->status = 'Pending';
        $item->category_id = $request->category_id;
        $item->sort_at = Carbon::now();
        $item->ends_at = Carbon::now()->addMonth(1);

        $item->prepayment = $request->prepayment;
        $item->cash_on_delivery = $request->cash_on_delivery;
        $item->self_pickup = $request->self_pickup;
        $item->city_delivery = $request->city_delivery;
        $item->country_delivery = $request->country_delivery;
        $item->int_delivery = $request->int_delivery;

        if (isset($item->prepayment)) { $item->prepayment = 1; }else{ $item->prepayment = 0; }
        if (isset($item->cash_on_delivery)) { $item->cash_on_delivery = 1; }else{ $item->cash_on_delivery = 0; }
        if (isset($item->self_pickup)) { $item->self_pickup = 1; }else{ $item->self_pickup = 0; }
        if (isset($item->city_delivery)) { $item->city_delivery = 1; }else{ $item->city_delivery = 0; }
        if (isset($item->country_delivery)) { $item->country_delivery = 1; }else{ $item->country_delivery = 0; }
        if (isset($item->int_delivery)) { $item->int_delivery = 1; }else{ $item->int_delivery = 0; }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
            Image::make($image)->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save();
            $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
            $image->move($destinationPath, $filename);

            $item->image = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
        }

        if ($item->save()) {

            $item_image = new ItemImage();
            $item_image->user_id = Auth::user()->id;
            $item_image->item_id = $item->id;

            if ($request->hasFile('image_2')) {
                $image = $request->file('image_2');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_2 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_3')) {
                $image = $request->file('image_3');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_3 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_4')) {
                $image = $request->file('image_4');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_4 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }


            if ($request->hasFile('image_5')) {
                $image = $request->file('image_5');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_5 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_6')) {
                $image = $request->file('image_6');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_6 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_7')) {
                $image = $request->file('image_7');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_7 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_8')) {
                $image = $request->file('image_8');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_8 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_9')) {
                $image = $request->file('image_9');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_9 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_10')) {
                $image = $request->file('image_10');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_10 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }


            $item_image->save();


        };

        return redirect()->route('item.index');
    }

    public function edit($id) {

        if($item = Item::whereUser_id(Auth::user()->id)->find($id)) {

            $countries = Country::all();
            $regions = Region::all();
            $cities = City::all();
            $categories = Category::wherePublished('1')->get();

            return view('marketplace.account.item.edit', compact('item', 'categories', 'countries', 'regions', 'cities'));
        }else{
            return redirect()->route('item.index');
        }
    }

    public function update(Request $request, Item $item)
    {
        if ($request->description == null) {
            $request->description = Item::whereId($item->id)->value('description');
        }

        $item = Item::find($item->id);

        $item->title = $request->title;
        $item->user_id = Auth::user()->id;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->currency = $request->currency;
        $item->country_id = $request->country_id;
        $item->region_id = $request->region_id;
        $item->city_id = $request->city_id;
        $item->type = $request->type;
        $item->category_id = $request->category_id;

        $item->prepayment = $request->prepayment;
        $item->cash_on_delivery = $request->cash_on_delivery;
        $item->self_pickup = $request->self_pickup;
        $item->city_delivery = $request->city_delivery;
        $item->country_delivery = $request->country_delivery;
        $item->int_delivery = $request->int_delivery;

        if (isset($item->prepayment)) { $item->prepayment = 1; }else{ $item->prepayment = 0; }
        if (isset($item->cash_on_delivery)) { $item->cash_on_delivery = 1; }else{ $item->cash_on_delivery = 0; }
        if (isset($item->self_pickup)) { $item->self_pickup = 1; }else{ $item->self_pickup = 0; }
        if (isset($item->city_delivery)) { $item->city_delivery = 1; }else{ $item->city_delivery = 0; }
        if (isset($item->country_delivery)) { $item->country_delivery = 1; }else{ $item->country_delivery = 0; }
        if (isset($item->int_delivery)) { $item->int_delivery = 1; }else{ $item->int_delivery = 0; }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
            Image::make($image)->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save();
            $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
            $image->move($destinationPath, $filename);

            $item->image = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
        }

        if ($item->save()) {

            $item_image = ItemImage::whereItem_id($item->id)->first();

            if ($request->hasFile('image_2')) {
                $image = $request->file('image_2');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_2 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_3')) {
                $image = $request->file('image_3');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_3 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_4')) {
                $image = $request->file('image_4');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_4 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }


            if ($request->hasFile('image_5')) {
                $image = $request->file('image_5');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_5 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_6')) {
                $image = $request->file('image_6');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_6 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_7')) {
                $image = $request->file('image_7');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_7 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_8')) {
                $image = $request->file('image_8');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_8 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_9')) {
                $image = $request->file('image_9');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_9 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            if ($request->hasFile('image_10')) {
                $image = $request->file('image_10');
                $filename = $item->user_id . '-' . time() . '-' . $image->getClientOriginalName();
                Image::make($image)->resize(1080, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save();
                $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items');
                $image->move($destinationPath, $filename);

                $item_image->image_10 = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . 'items' . '/' . $filename;
            }

            $item_image->save();


        };

        return redirect()->route('item.index');


    }

    public function destroy($id)
    {

        Item::whereId($id)->delete();
        return redirect()->route('item.index');
    }

    public function imagedestroy(Request $request, $id)
    {
        $image = ItemImage::whereUser_id(Auth::user()->id)->whereItem_id($id)->value($request->image_field);

        ItemImage::whereUser_id(Auth::user()->id)->whereItem_id($id)->update([$request->image_field => null]);

        $filename = public_path($image);

        if(File::exists($filename)) {
            File::delete($filename);
        }

        return redirect()->route('item.edit', $id);
    }

}

<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class Ac_ProfileController extends Controller
{
    public function edit() {

        return view('marketplace.account.settings.edit');
    }

    public function profileImage (Request $request) {

        $request->validate([
            'image' => 'required|image',
        ]);

        $image = User::find(Auth::user()->id);

        if ($request->hasFile('image')) {
            $filename = public_path($image->image);
            if(File::exists($filename)) {
                File::delete($filename);
            }
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = Auth::user()->id . '-' . time() . '-' . $image->getClientOriginalName();
            Image::make($image)->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save();
            $destinationPath = public_path('/storage' . '/' . 'account' . '/' . Auth::user()->id );
            $image->move($destinationPath, $filename);

            $image = '/storage' . '/' . 'account' . '/' . Auth::user()->id . '/' . $filename;

            User::whereId(Auth::user()->id)->update(['image' => $image ]);

            return redirect()->route('settings')->with('msg', 'image-updated');
        }
    }

    public function socialMedia (Request $request) {

        $media = User::find(Auth::user()->id);

        $media->site = $request->site;
        $media->instagram = $request->instagram;
        $media->facebook = $request->facebook;
        $media->telegram = $request->telegram;
        $media->twitter = $request->twitter;

        $media->save();

        return redirect()->route('settings')->with('msg', 'data-updated');;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DocController extends Controller
{
    public function projectOverview () {
        return view('doc.'. App::getLocale() .'.project_overview');
    }

    public function roadMap () {
        return view('doc.'. App::getLocale() .'.roadmap');
    }
}

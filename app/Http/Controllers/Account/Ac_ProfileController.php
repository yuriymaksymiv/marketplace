<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ac_ProfileController extends Controller
{
    public function index() {

        return view('account.profile.index');
    }
}

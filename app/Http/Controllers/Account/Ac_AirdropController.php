<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Airdrop;
use App\Models\DailyReward;
use App\Models\Token;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class Ac_AirdropController extends Controller
{
    public function index() {

        if (Airdrop::whereUser_id(Auth::user()->id)->value('bep_20') == null ) {
            return redirect()->route('airdrop.start');
        }

        elseif ( Auth::user()->ref_id != null &&
            Token::whereUser_id(Auth::user()->id)->whereType('invite')->first() == null ) {

            $register = new Token();
            $register->user_id = Auth::user()->id;
            $register->status = 'pending';
            $register->amount = 20;
            $register->type = 'invite';
            $register->order_date = Carbon::now();
            $register->payment_date = Carbon::now()->addYear(1);

            if( $register->save() ) {

                $ref_register = new Token();
                $ref_register->user_id = Auth::user()->ref_id;
                $ref_register->status = 'pending';
                $ref_register->amount = 20;
                $ref_register->type = 'register_ref';
                $ref_register->order_date = Carbon::now();
                $ref_register->payment_date = Carbon::now()->addYear(1);
                $ref_register->ref_id = Auth::user()->id;
                $ref_register->note = Auth::user()->name;
                $ref_register->save();
            }

        }

        $yesterday = Carbon::yesterday()->toDateString();
        $today = Carbon::now()->toDateString();
        $y = Token::whereUser_id(Auth::user()->id)->whereType('daily_reward')->whereOrder_date($yesterday)->orderBy('created_at', 'desc')->first();
        $t = Token::whereUser_id(Auth::user()->id)->whereType('daily_reward')->whereOrder_date($today)->first();

        if($y == null || $y->day < 3) {
            $slot1 = DailyReward::where('day', '1')->first();
            $slot2 = DailyReward::where('day', '2')->first();
            $slot3 = DailyReward::where('day', '3')->first();
            $slot4 = DailyReward::where('day', '4')->first();
            $slot5 = DailyReward::where('day', '5')->first();
            $slot6 = DailyReward::where('day', '6')->first();
            $slot7 = DailyReward::where('day', '7')->first();
        }
        elseif ($y->day >= 3) {
            $slot1 = DailyReward::where('day', $y->day - 2)->first();
            $slot2 = DailyReward::where('day', $y->day - 1)->first();
            $slot3 = DailyReward::where('day', $y->day - 0)->first();
            $slot4 = DailyReward::where('day', $y->day + 1)->first();
            $slot5 = DailyReward::where('day', $y->day + 2)->first();
            $slot6 = DailyReward::where('day', $y->day + 3)->first();
            $slot7 = DailyReward::where('day', $y->day + 4)->first();
        }


        $pending_sum = Token::whereUser_id(Auth::user()->id)->whereStatus('pending')->sum('amount');
        $total_sum = Token::whereUser_id(Auth::user()->id)->whereStatus('success')->sum('amount');

        $account = Auth::user();
        $airdrop_data = Airdrop::whereUser_id(Auth::user()->id)->first();
        $tokens = Token::whereUser_id(Auth::user()->id)->get();
        $date_now = Carbon::now()->format('Y-m-d');

        return view('marketplace.account.airdrop.index', compact('account', 'airdrop_data',
            'tokens', 'pending_sum', 'total_sum', 'date_now', 'y', 't', 'slot1', 'slot2', 'slot3', 'slot4', 'slot5', 'slot6', 'slot7'));
    }

    public function start() {
        if (Airdrop::whereUser_id(Auth::user()->id)->value('bep_20') != null ) {
            return redirect()->route('airdrop');
        }else {
            return view('marketplace.account.airdrop.start');
        }
    }
    public function startUpdate(Request $request)
    {

        $register = new Token();

        $register->user_id = Auth::user()->id;
        $register->status = 'pending';
        $register->amount = 50;
        $register->type = 'register';
        $register->order_date = Carbon::now();
        $register->payment_date = Carbon::now()->addYear(1);

        if ($register->save()) {
            $airdrop = new Airdrop();

            $airdrop->user_id = Auth::user()->id;
            $airdrop->ref_id = Auth::user()->ref_id;
            $airdrop->status = ('Active');
            $airdrop->bep_20 = $request->bep_20;
            $airdrop->telegram = $request->telegram;
            $airdrop->twitter = $request->twitter;

            $airdrop->save();

        }

        return redirect()->route('airdrop.start');
    }

    public function dailyReward(Request $request) {

        $request->validate([
            'g-recaptcha-response' => 'recaptcha',
        ]);

        $yesterday = Carbon::yesterday()->toDateString();
        $today = Carbon::now()->toDateString();
        $y = Token::whereUser_id(Auth::user()->id)->whereType('daily_reward')->whereOrder_date($yesterday)->orderBy('created_at', 'desc')->first();
        $t = Token::whereUser_id(Auth::user()->id)->whereType('daily_reward')->whereOrder_date($today)->first();

        if ($t) {
            return redirect()->route('airdrop');
        }

        if ($y == null) {
            $day1 = DailyReward::where('day', '1')->first();

            $dr = new Token();
            $dr->user_id = Auth::user()->id;
            $dr->status = 'pending';
            $dr->amount = $day1->token;
            $dr->type = 'daily_reward';
            $dr->order_date = Carbon::now();
            $dr->payment_date = Carbon::now()->addYear(1);
            $dr->day = 1;
            $dr->save();

            return redirect()->route('airdrop');
        }

        if ($y) {
            $i = DailyReward::where('day', $y->day + 1)->first();

            $dr = new Token();
            $dr->user_id = Auth::user()->id;
            $dr->status = 'pending';
            $dr->amount = $i->token;
            $dr->type = 'daily_reward';
            $dr->order_date = Carbon::now();
            $dr->payment_date = Carbon::now()->addYear(1);
            $dr->day = $i->day;
            $dr->save();

            return redirect()->route('airdrop');
        }
    }

}

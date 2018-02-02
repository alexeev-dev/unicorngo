<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WalletRequest;
use Session;
use Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing()
    {
        return view('landing');
    }

    public function ref($code)
    {
        session(['ref' => $code]);
        return redirect()->route('landing');
    }

    public function dashboard()
    {
        $user = Auth::user();
        //$refs = $user->referrals->take(5)->get();
        $user->load(['referrals' => function($query){ return $query->take(10); }]);
        $refs = $user->referrals;
        return view('dashboard',['user' => $user,'refs'=>$refs]);
    }

    public function referral()
    {
        $user = Auth::user();
        $refs = $user->referrals;
        return view('referral',['user' => $user,'refs'=>$refs]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile',['user' => $user]);
    }

    public function setwallet(WalletRequest $request)
    {
        $user = Auth::user();
        $user->eth_address = $request->wallet;
        $user->save();

        return redirect()->route('buytokens');
    }

    public function buytokens()
    {
        $user = Auth::user();

        return view('buytokens',['user' => $user]);
    }










}

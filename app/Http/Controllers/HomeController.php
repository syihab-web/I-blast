<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\EmailBlast;
use App\Email;
use App\User;
use App\Saran;
use App\Artikel;
use App\DaftarEmail;
use App\Pengumuman;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $saran = Saran::count();
        $users = User::count();
        $count = Email::where('user', 'like', Auth::user()->id)->count();
        $account = DaftarEmail::count();
        $artikel = Artikel::count();
        $pengumuman = Pengumuman::orderBy('updated_at','desc')->paginate(3);

        if(Auth::user()->roles != '1'){
            return view('home', compact('count', 'users', 'saran', 'account', 'artikel', 'pengumuman'));
        }
        else if(Auth::user()->roles == '1'){
            return view('home', compact('count', 'users', 'saran', 'account', 'artikel', 'pengumuman'));
        }
    }
}

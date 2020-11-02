<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\EmailBlast;
use App\Email;
use App\User;
use App\DaftarEmail;
use App\Saran;
use DB;
use function GuzzleHttp\Promise\all;

class EmailController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = Email::where('user', 'like', Auth::user()->id)->paginate(20);
            return view('email.index', compact('value'));

    }

     public function dashboard(){
        $saran = Saran::count();
        $users = User::count();
        $count = Email::count();
        $daftar = DaftarEmail::count();

        if(Auth::user()->roles == '1'){
            return view('email.dashboard', compact('count', 'users', 'saran', 'daftar'));
        }
        else{
            return view('email.dashboard', compact('count', 'users', 'saran', 'daftar'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('email.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    public function sendMail(Request $request){
        $receivers = explode(" ",$request->email);
        foreach($receivers as $receiver){
                $data = [
                    'from' => $request->from,
                    'to' => $request->email,
                    'subject' => $request->subject,
                    'pesan' => $request->pesan,
                    'user' => $request->user
                ];


                Email::create($data);
        }

            return back()->with('status', 'Email Berhasil Terkirim');

    }

    public function sendAgain(Request $request){
        $receivers = explode(" ",$request->email);
        foreach($receivers as $receiver){
                $data = [
                    'from' => $request->from,
                    'to' => $request->email,
                    'subject' => $request->subject,
                    'pesan' => $request->pesan,
                    'file' => $request->file,
                    'user' => $request->user

                ];

               $status = Mail::to($receiver)->send(new EmailBlast($data));

        }

            return back()->with('status', 'Email Berhasil Terkirim');
    }

    public function search(Request $request){
        if(Auth::user()->roles == '1'){
            $value = Email::where('user', 'like', Auth::user()->id)->when($request->search, function ($query) use ($request) {
                $query->where('to', 'like', "%{$request->search}%")
                    ->orWhere('from', 'like', "%{$request->search}%")
                    ->orWhere('subject', 'like', "%{$request->search}%");
            })->paginate(10);
            return view('email.index', compact('value'));

        }
        else{
            return redirect('/email')->with('danger','sssssss');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Email $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        return view('email.show', compact('email'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Email::destroy($id);
        return redirect('/email')->with('delete', "Data berhasil dihapus!");
    }


}

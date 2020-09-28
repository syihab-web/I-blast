<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailBlast;
use App\Email;

use function GuzzleHttp\Promise\all;

class EmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = Email::all();
        return view('email.index', compact('value'));
    }

     public function dashboard(){
        return view('email.dashboard');
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
                    'link' => $request->link
                ];

                Email::create($data);
                Mail::to($receiver)->send(new EmailBlast($data));

        }

        return back();

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

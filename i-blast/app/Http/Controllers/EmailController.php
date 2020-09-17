<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use App\Http\Mail\EmailBlast;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('email.index');
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
        $this->validate($request,[
                'email' => 'required',
                'subjek' => 'required',
                'pesan' =>'required',
                'opsi_template' => 'required'
            ]);
        if($request->opsi_template==1){
            $sendMail = Mail::raw($request->pesan, function ($message)use($request) {
                $message->from('bijiagus@gmail.com','Agus Wiji Suhariono');
                $message->subject($request->subjek);
                $message->to($request->email);
            });
        }else{
            $sendMail = Mail::send('template.template', ['request'=>$request], function($message)use($request){
                $message->from('bijiagus@gmail.com','Agus Wiji Suhariono');
                $message->subject($request->subjek);
                $message->to($request->email);
            });
        }
        if($sendMail){
             \Session::flash('flash_message','Email berhasil dikirim');

            return redirect('/email');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}

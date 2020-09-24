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
                if($request->hasFile('image') || $request->hasFile('file')){
                    $file = $request->file('image');
                    $file2 = $request->file('file');
                    $extention = $file->getClientOriginalExtension();
                    $extention2 = $file2->getClientOriginalExtension();
                    $filename = time() . '.' . $extention;
                    $file->move('assets/image/', $filename);
                    $filename2 = time() . '.' . $extention2;
                    $file2->move('assets/file/', $filename2);

                $data = [
                    'from' => $request->from,
                    'to' => $request->email,
                    'subject' => $request->subject,
                    'pesan' => $request->pesan,
                    'image' => $filename,
                    'file' => $filename2,
                    'link' => $request->link
                ];

                Email::create($data);
                Mail::to($receiver)->send(new EmailBlast($data));
            }
        }

        return back();

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

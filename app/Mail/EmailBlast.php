<?php

namespace App\Mail;

use App\EmailAccount;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailBlast extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        if($request->file == null){
            if($request->template == 2){
                return $this->subject($request->subject)->view('template.template2')->with('data',$this->data);
            }
            else{
                return $this->subject($request->subject)->view('template.template')->with('data',$this->data);
            }
        }
        else{
            if($request->template == 2){
                return $this->subject($request->subject)->attach($request->file('file')->getRealPath(), [
                    'as' => $request->file('file')->getClientOriginalName(),
                    'mime' => $request->file('file')->getMimeType()
                ])->view('template.template2')->with('data',$this->data);
            }
            else{
                return $this->subject($request->subject)->attach($request->file('file')->getRealPath(), [
                    'as' => $request->file('file')->getClientOriginalName(),
                    'mime' => $request->file('file')->getMimeType()
                ])->view('template.template')->with('data',$this->data);
            }
        }
    }
}

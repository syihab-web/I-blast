<?php

namespace App\Http\Controllers;

use App\Saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saran = Saran::paginate(10);
        if(Auth::user()->roles == '1'){
            return view('saran.index', compact('saran'));
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = Saran::create($request->all());
        return redirect('/home')->with('status', 'Saran berhasil dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function show(Saran $saran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function edit(Saran $saran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Saran  $saran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saran $saran)
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
        Saran::destroy($id);
        return redirect('/saran')->with('delete', "Data berhasil dihapus!");
    }


}

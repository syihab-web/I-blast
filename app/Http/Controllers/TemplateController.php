<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TemplateController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $template = Template::paginate(10);
        if(Auth::user()->roles == '1'){
            return view('crud_template.index', compact('template'));
        }
        else{
            return redirect()->back();
        }
    }

    public function seeTemplate(){
        $template = Template::paginate(1);
        return view('seeTemplate', compact('template'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->roles == '1'){
            return view('crud_template.create');
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi!',
            'min' => ':attribute harus diisi minimal :min karakter',
            'image.max' => ' maksimal ukuran :attribute adalah 10 MB',
            'mimes'=> 'Tipe file :attribute hanya boleh jpeg, png, dan jpg',
            'image'=> 'Tipe file :attribute hanya boleh jpeg, png, dan jpg',

        ];

        $this->validate($request,[
              'title'   => 'required',
              'image'    => 'required|file|max:10240|image|mimes:jpeg,png,jpg',
              'code'  => 'required'
        ],$messages);


        $image    = $request->image;
        $newImage= time().$image->getClientOriginalName();

        $template = Template::create([
            'title'   => $request->title,
            'image'    => 'templates/'.$newImage,
            'code'  => $request->code
        ]);

        $image = $request->file('image');
        $tujuan_upload = 'templates';
        $image->move($tujuan_upload,$newImage);
        // $foto->move('public/uploads/',$newFoto);

        if ($template->save()) {
            return redirect('/template')->with('success', 'Data Berhasil ditambahkan');
        }else{
            return redirect('/template/create')->with(['erorr' => ' Data Gagal ditambahkan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        if(Auth::user()->roles == '1'){
            return view('crud_template.show', compact('template'));
        }
        else{
            return redirect()->back();
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
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
        Template::destroy($id);
        return redirect('/template')->with('delete', "Data berhasil dihapus!");
    }
}

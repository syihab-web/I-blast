<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Artikel;
use App\User;

class ArtikelController extends Controller
{

    public function index(){
        $artikel    = Artikel::orderBy('updated_at','desc')->paginate(6);
        return view('artikel.lihatArtikel',['artikel' => $artikel]);
        // ['artikel' => $artikel]
    }

    public function detail($slug){

        $show   = Artikel::where('slug', '=' , $slug)->get();
        return view('artikel.detailArtikel', ['show' => $show]);

        // $tampil     = Artikel::where('slug',$slug)->first();
        // return view('artikel.detailArtikel')->with('tampil',$tampil);
    }

    public function buat(){
        if(Auth::user()->roles == '1'){
            return view('artikel.buatArtikel');}
        else{
            return redirect()->back();
        }

    }

    public function proses_buat(Request $request){
        $messages = [
            'required' => ':attribute wajib diisi!',
            'min' => ':attribute harus diisi minimal :min karakter',
            'foto.max' => ' maksimal ukuran :attribute adalah 10 MB',
            'mimes'=> 'Tipe file :attribute hanya boleh jpeg, png, dan jpg',
            'image'=> 'Tipe file :attribute hanya boleh jpeg, png, dan jpg',

        ];

        $this->validate($request,[
              'judul'   => 'required',
              'foto'    => 'required|file|max:10240|image|mimes:jpeg,png,jpg',
              'konten'  => 'required'
        ],$messages);


        $foto    = $request->foto;
        $newFoto= time().$foto->getClientOriginalName();

        $artikel =Artikel::create([
            'judul'   => $request->judul,
            'foto'    => 'uploads/'.$newFoto,
            'konten'  => $request->konten,
            'user_id' => $request->user_id,
            'slug'    => Str::slug($request->judul)
        ]);

        $foto = $request->file('foto');
        $tujuan_upload = 'uploads';
        $foto->move($tujuan_upload,$newFoto);
        // $foto->move('public/uploads/',$newFoto);

        if ($artikel  ->save()) {
            return redirect('/lihatArtikel')->with(['success' => ' Data Berhasil ditambahkan']);
        }else{
            return redirect('/lihatArtikel')->with(['erorr' => ' Data Gagal ditambahkan']);
        }

    }

    public function edit($id){

        $edit   = Artikel::find($id);

        if(Auth::user()->roles == '1'){
            return view('artikel.editArtikel', ['edit' => $edit]);
        }
        else{
            return redirect()->back();
        }
    }

    public function proses_edit($id, Request $request){
        $this->validate($request,[
            'judul'   => 'required',
            'konten'  => 'required'
        ]);


        $artikel    = Artikel::findorfail($id);

        if ($request->has('foto')){
            $foto    = $request->foto;
            $newFoto= time().$foto->getClientOriginalName();

            $foto = $request->file('foto');
            $tujuan_upload = 'uploads';
            $foto->move($tujuan_upload,$newFoto);

            $artikel_data =[
                'judul'   => $request->judul,
                'foto'    => 'uploads/'.$newFoto,
                'konten'  => $request->konten,
                'user_id' => $request->user_id,
                'slug'    => Str::slug($request->judul)
            ];
        }
        else{

            $artikel_data =[
                'judul'   => $request->judul,
                'konten'  => $request->konten,
                'user_id' => $request->user_id,
                'slug'    => Str::slug($request->judul)
            ];

        }

        $artikel->update($artikel_data);


        if ($artikel) {
            return redirect('/lihatArtikel'.$request->id_user)->with(['edit' => ' Data Berhasil diedit']);
        }else{
            return redirect('editArtikel/'.$request->id_user)->with(['erorr' => ' Data Gagal diedit']);
        }
    }

    public function hapus($id){
        $artikel = Artikel::findorfail($id);

        if(Auth::user()->roles == '1'){
            $artikel->delete();
            return redirect('/lihatArtikel')->with(['hapus' => ' Data Berhasil dihapus (Silahkan lihat di Sampah)']);

        }
        else{
            return redirect()->back();
        }

    }

    public function lihat_sampah(){
        $artikel    = Artikel::onlyTrashed()->paginate(10);

        return view('artikel.lihatSampah',['artikel' => $artikel]);
    }

    public function pulih_sampah($id){
        $artikel    = Artikel::withTrashed()->where('id', $id)->first();
        $artikel->restore();

        return redirect('/lihatSampah')->with(['pulih' => ' Data Berhasil dipulihkan (Silahkan lihat di menu Lihat Artikel)']);
    }

    public function hapus_sampah($id){
        $artikel    = Artikel::withTrashed()->where('id', $id)->first();
        $artikel->forceDelete();

        return redirect()->back()->with(['hapusperman' => ' Data Berhasil dihapus PERMANEN']);
    }
}

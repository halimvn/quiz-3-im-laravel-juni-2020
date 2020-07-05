<?php

namespace App\Http\Controllers;
use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    public function index(){
        $artikel = Artikel::get_artikel();
        return view('artikel',compact('artikel'));
    }

    public function create(){
        return view('form');
    }
    public function create_url_slug($string){
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
        return $slug;
     }

    public function savedata(Request $request){
        $data = $request->all();
        
        // $id = $data->judul;
        $judul = $data["judul"];
        $isi = $data["isi"];
        $tag= $data["tag"];
        $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $judul);
        //dd($id);
         unset($data["_token"]);
         $nilai = array("judul"=>"$judul","isi"=>"$isi","slug"=>"$slug","tag"=>"$tag");
         $answers = Artikel::save_data($nilai);
         $artikel = Artikel::get_artikel();
         if($answers){
             return view('artikel',compact('artikel'));
         }

    }

    public function detail($id){
        $artikel = Artikel::find_by_id($id);
        return view('detailartikel',compact('artikel','id'));
    }

    public function editform($id){
        $data = Artikel::edit_by_id($id);
        return view('formedit',compact('data'));
    }

    public function updatedata(Request $request,$id){
        $item = Artikel::update_data($id,$request->all());
        $artikel = Artikel::get_artikel();
        return view('artikel',compact('artikel'));

    }

    public function deletedata($id){
        $item = Artikel::destory_data($id);
        $artikel = Artikel::get_artikel();
        return view('artikel',compact('artikel'));
        

    }

}

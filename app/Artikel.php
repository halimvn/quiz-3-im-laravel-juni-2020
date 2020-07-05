<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Artikel extends Model
{
    //

    public static function get_artikel(){
        $data = DB::table('table_artikel')->get();
        return $data;
    }

    public static function save_data($data){
        $data = DB::table('table_artikel')->insert($data);
        return $data;
    }

    public static function find_by_id($id){
        $data = DB::table('table_artikel')->where('id',$id)->get();
        return $data;
    }
    public static function edit_by_id($id){
        $data = DB::table('table_artikel')->where('id',$id)->first();
        return $data;
    }

    public static function update_data($id, $request){
        $data = DB::table('table_artikel')
        ->where('id',$id)
        ->update([
            'judul'=>$request["judul"],
            'isi'=>$request["isi"],
            'tag'=>$request["tag"],
            'slug'=>$request["slug"],
            'updated_at'=>now(),
            
        ]);
        return $data;
    }

    public static function destory_data($id){
        $data = DB::table('table_artikel')->where('id',$id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//panggil model unews
use App\Unews;
class UnewsController extends Controller
{

	public function index(){

    //mengambil data pada database unews
    $unews = Unews::all();

    // mengirim data unews ke view unews
    //return Unews::all();
    return view('unews',['unews' => $unews]);
    
    } 

    public  function read (){
    	return Unews::all();
    }

    public function insert(request $req){
    	$u = new Unews;
    	$u->judul = $req->judul;
    	$u->gambar = $req->gambar;
    	$u->isi = $req->isi;
    	$u->save();
    	return "Data Berhasil Ditambahkan";
    } 

    public function update (request $req , $id){
    	$u = Unews::find($id);
    	$u->judul = $req->judul;
    	$u->gambar = $req->gambar;
    	$u->isi = $req->isi;
    	$u->save();
    	return "Update Success";
    }

    public function delete($id){
    	$u = Unews::find($id);
    	$u->delete();
    	return("delete Success id = $id ");
    }
}

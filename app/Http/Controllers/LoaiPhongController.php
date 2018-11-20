<?php

namespace App\Http\Controllers;

use App\LoaiPhong;
use Illuminate\Http\Request;

class LoaiPhongController extends Controller
{
    public function index(){
        $loaiphongList = \App\LoaiPhong::all()->toArray();
        return view('loaiphong/index', ['loaiphongList' => $loaiphongList]);
    }

    public function add(){
        return view('loaiphong/add');
    }

    public function addsave(){
        $ten = $_POST['txt_ten'];
        $gia = $_POST['txt_gia'];
        $mota = $_POST['txt_mota'];

        $loaiphong = new LoaiPhong();
        $loaiphong->ten = $ten;
        $loaiphong->gia = $gia;
        $loaiphong->mota = $mota;

        $loaiphong->save();

        return redirect(route('loaiphong-list'));
    }

    public function update($id){
        $loaiphong = new LoaiPhong();
        $getLoaiPhongById = $loaiphong->find($id)->toArray();
        return view('loaiphong/update')->with('getLoaiPhongById', $getLoaiPhongById);
    }

    public function updatesave(){
        $id = $_POST['txt_id'];
        $ten = $_POST['txt_ten'];
        $gia = $_POST['txt_gia'];
        $mota = $_POST['txt_mota'];

        $loaiphong = new LoaiPhong();
        $getLoaiPhongById = $loaiphong->find($id);
        $getLoaiPhongById->ten = $ten;
        $getLoaiPhongById->gia = $gia;
        $getLoaiPhongById->mota = $mota;

        $getLoaiPhongById->save();

        return redirect(route('loaiphong-list'));
    }

    public function delete($id){
        LoaiPhong::find($id)->delete();
        return redirect()->action('LoaiPhongController@index');
    }
}

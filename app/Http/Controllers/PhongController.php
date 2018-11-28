<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhongController extends Controller
{
    public function index(){
        $phongList = \App\Phong::all()->toArray();
        return view('phong/index', ['phongList' => $phongList]);
    }

    public function add(){
        return view('phong/add');
    }

    public function addsave(){
        $ten = $_POST['txt_ten'];
        $gia = $_POST['txt_gia'];
        $mota = $_POST['txt_mota'];

        $dichvu = new DichVu();
        $dichvu->ten = $ten;
        $dichvu->gia = $gia;
        $dichvu->mota = $mota;

        $dichvu->save();

        return redirect(route('dichvu-list'));
    }

    public function update($id){
        $phong = new Phong();
        $getPhongById = $phong->find($id)->toArray();
        return view('phong/update')->with('getPhongById', $getPhongById);
    }

    public function updatesave(){
        $id = $_POST['txt_id'];
        $ten = $_POST['txt_ten'];
        $gia = $_POST['txt_gia'];
        $mota = $_POST['txt_mota'];

        $dichvu = new DichVu();
        $getDichVuById = $dichvu->find($id);
        $getDichVuById->ten = $ten;
        $getDichVuById->gia = $gia;
        $getDichVuById->mota = $mota;

        $getDichVuById->save();

        return redirect(route('dichvu-list'));
    }
}

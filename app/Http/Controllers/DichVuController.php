<?php

namespace App\Http\Controllers;

use App\DichVu;
use Illuminate\Http\Request;

class DichVuController extends Controller
{
    public function index(){
        $dichvuList = \App\DichVu::all()->toArray();
        return view('dichvu/index', ['dichvuList' => $dichvuList]);
    }

    public function add(){
        return view('dichvu/add');
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
        $dichvu = new DichVu();
        $getDichVuById = $dichvu->find($id)->toArray();
        return view('dichvu/update')->with('getDichVuById', $getDichVuById);
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

    public function delete($id){
        DichVu::find($id)->delete();
        return redirect()->action('DichVuController@index');
    }
}

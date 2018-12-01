<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\DichVu;
use Illuminate\Http\Request;

class DichVuController extends Controller
{
    public function index(){
//        $dichvuList = \App\DichVu::all()->toArray();
        $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
        $dichvuList = DB::table('tbl_dichvu')->where('ten', 'like', "%$keyword%")->orWhere('gia', '=', "$keyword")->orWhere('mota', 'like', "%$keyword%")->paginate(4);
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
        $_SESSION['nhanvien_success_message'] = 'Thêm mới thành công';

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
        $_SESSION['nhanvien_success_message'] = 'Sửa thành công';

        return redirect(route('dichvu-list'));
    }

    public function delete($id){
        DichVu::find($id)->delete();
        $_SESSION['nhanvien_success_message'] = 'Xóa thành công';

        return redirect()->action('DichVuController@index');
    }
}

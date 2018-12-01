<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Phong;
use Illuminate\Http\Request;

class PhongController extends Controller
{
    public function index(){
//        $phongList = DB::table('tbl_loaiphong')->join('tbl_phong', 'tbl_loaiphong.id', '=', 'tbl_phong.loaiphong_id')->get()->toArray();
        $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
        $phongList = DB::table('tbl_loaiphong')
            ->join('tbl_phong', 'tbl_loaiphong.id_loaiphong', '=', 'tbl_phong.loaiphong_id')
            ->where('tenphong', 'like', "%$keyword%")
            ->orWhere('tenloaiphong', 'like', "%$keyword%")
            ->paginate(6);
//        dd($phongList);
        return view('phong/index', ['phongList' => $phongList]);
    }

    public function add(){
        $loaiphongList = \App\LoaiPhong::all()->toArray();
        return view('phong/add', ['loaiphongList' => $loaiphongList]);
    }

    public function addsave(){
        $tenphong = $_POST['txt_tenphong'];
        $trangthai = $_POST['rd_trangthai'];
        $loaiphong_id = $_POST['sl_loaiphong_id'];

        $phong = new Phong();
        $phong->tenphong = $tenphong;
        $phong->trangthai = $trangthai;
        $phong->loaiphong_id = $loaiphong_id;

        $phong->save();
        $_SESSION['suc_message'] = 'Thêm mới thành công';

        return redirect(route('phong-list'));
    }

    public function update($id){
        $phong = new Phong();
        $getPhongById = $phong->find($id)->toArray();
        $loaiphongList = \App\LoaiPhong::all()->toArray();
        return view('phong/update')->with('getPhongById', $getPhongById)->with('loaiphongList', $loaiphongList);
    }

    public function updatesave(){
        $id = $_POST['txt_id'];
        $tenphong = $_POST['txt_tenphong'];
        $trangthai = $_POST['rd_trangthai'];
        $loaiphong_id = $_POST['sl_loaiphong'];

        $phong = new Phong();
        $getPhongById = $phong->find($id);
        $getPhongById->tenphong = $tenphong;
        $getPhongById->trangthai = $trangthai;
        $getPhongById->loaiphong_id = $loaiphong_id;

        $getPhongById->save();
        $_SESSION['nhanvien_success_message'] = 'Sửa thành công';

        return redirect(route('phong-list'));
    }

    public function delete($id){
        Phong::find($id)->delete();
        $_SESSION['nhanvien_success_message'] = 'Xóa thành công';

        return redirect()->action('PhongController@index');
    }

}

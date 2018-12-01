<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\DatPhong;
use Illuminate\Http\Request;

class DatPhongController extends Controller
{
    public function index(){
//        $datphongList = \App\DatPhong::all()->toArray();
        //->orWhere('gia', '=', "$keyword")->orWhere('mota', 'like', "%$keyword%")
        $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
        $datphongList = DB::table('tbl_datphong')->where('tenkh', 'like', "%$keyword%")->orWhere('socmnd', 'like', "$keyword")->orWhere('sdt', 'like', "$keyword")->orWhere('ngaynhanphong', 'like', "$keyword")->orWhere('ngaytraphong', 'like', "$keyword")->orWhere('ghichu', 'like', "%$keyword%")->paginate(6);
        return view('datphong/index', ['datphongList' => $datphongList]);
    }

    public function add(){
        return view('datphong/add');
    }

    public function addsave(){
//        dd($_POST);
        $tenkh = $_POST['txt_tenkh'];
        $socmnd = $_POST['txt_socmnd'];
        $sdt = $_POST['txt_sdt'];
        $ngaynhanphong = $_POST['txt_ngaynhanphong'];
        $ngaytraphong = $_POST['txt_ngaytraphong'];
        $ghichu = $_POST['txt_ghichu'];

        if ($ngaytraphong >= $ngaynhanphong){
            $datphong = new DatPhong();
            $datphong->tenkh = $tenkh;
            $datphong->socmnd = $socmnd;
            $datphong->sdt = $sdt;
            $datphong->ngaynhanphong = $ngaynhanphong;
            $datphong->ngaytraphong = $ngaytraphong;
            $datphong->ghichu = $ghichu;

            $datphong->save();
            $_SESSION['nhanvien_success_message'] = 'Thêm mới thành công';

            return redirect(route('datphong-list'));
        }else{
            $_SESSION['err_message'] = 'Ngày trả phòng không hợp lệ, vui lòng nhập lại ngày trả phòng lớn hơn ngày nhận phòng!';
            return view('datphong/add');
        }

    }

    public function update($id){
        $datphong = new DatPhong();
        $getDatPhongById = $datphong->find($id)->toArray();
        return view('datphong/update')->with('getDatPhongById', $getDatPhongById);
    }

    public function updatesave(){
        $id = $_POST['txt_id'];
        $tenkh = $_POST['txt_tenkh'];
        $socmnd = $_POST['txt_socmnd'];
        $sdt = $_POST['txt_sdt'];
        $ngaynhanphong = $_POST['txt_ngaynhanphong'];
        $ngaytraphong = $_POST['txt_ngaytraphong'];
        $ghichu = $_POST['txt_ghichu'];

        if ($ngaytraphong >= $ngaynhanphong){
        $datphong = new DatPhong();
        $getDatPhongById = $datphong->find($id);
        $getDatPhongById->tenkh = $tenkh;
        $getDatPhongById->socmnd = $socmnd;
        $getDatPhongById->sdt = $sdt;
        $getDatPhongById->ngaynhanphong = $ngaynhanphong;
        $getDatPhongById->ngaytraphong = $ngaytraphong;
        $getDatPhongById->ghichu = $ghichu;

        $getDatPhongById->save();
        $_SESSION['nhanvien_success_message'] = 'Sửa thành công';

        return redirect(route('datphong-list'));
        }else{
            $datphong = new DatPhong();
            $getDatPhongById = $datphong->find($id)->toArray();
            $_SESSION['err_message'] = 'Ngày trả phòng không hợp lệ, vui lòng nhập lại ngày trả phòng lớn hơn ngày nhận phòng!';
            return view('datphong/update')->with('getDatPhongById', $getDatPhongById);
        }
    }

    public function delete($id){
        DatPhong::find($id)->delete();
        $_SESSION['nhanvien_success_message'] = 'Xóa thành công';

        return redirect()->action('DatPhongController@index');
    }
}

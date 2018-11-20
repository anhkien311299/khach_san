<?php

namespace App\Http\Controllers;

use App\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function index(){
        $nhanvienList = \App\NhanVien::all()->toArray();
        return view('nhanvien/index', ['nhanvienList' => $nhanvienList]);
    }

    public function delete($id){
//        $id = $_POST['txt_id'];
//        $nhanvien = NhanVien::find($id);
//        $nhanvien->delete();
//        return redirect(route('nhanvien-list'));
        NhanVien::find($id)->delete();
        return redirect()->action('NhanVienController@index');
    }

    public function add(){
        return view('nhanvien/add');
    }

    public function addsave(){
        $hoten = $_POST['txt_hoten'];
        $gioitinh = $_POST['rd_gioitinh'];
        $diachi = $_POST['txt_diachi'];
        $email = $_POST['txt_email'];
        $sdt = $_POST['txt_sdt'];
        $socmnd = $_POST['txt_socmnd'];
        $tendangnhap = $_POST['txt_tendangnhap'];
        $matkhau = $_POST['txt_matkhau'];

        $nhanvien = new NhanVien();
        $nhanvien->hoten = $hoten;
        $nhanvien->gioitinh = $gioitinh;
        $nhanvien->diachi = $diachi;
        $nhanvien->email = $email;
        $nhanvien->sdt = $sdt;
        $nhanvien->socmnd = $socmnd;
        $nhanvien->tendangnhap = $tendangnhap;
        $nhanvien->matkhau = $matkhau;

        $nhanvien->save();

        return redirect(route('nhanvien-list'));
    }

    public function update($id){
//        $id = $_POST['txt_id'];
//        $nhanvien = NhanVien::find($id);

        $nhanvien = new NhanVien();
        $getNhanVienById = $nhanvien->find($id)->toArray();
        return view('nhanvien/update')->with('getNhanVienById', $getNhanVienById);
    }

    public function updatesave(){
        $id = $_POST['txt_id'];
        $hoten = $_POST['txt_hoten'];
        $gioitinh = $_POST['rd_gioitinh'];
        $diachi = $_POST['txt_diachi'];
        $email = $_POST['txt_email'];
        $sdt = $_POST['txt_sdt'];
        $socmnd = $_POST['txt_socmnd'];
        $tendangnhap = $_POST['txt_tendangnhap'];
        $matkhau = $_POST['txt_matkhau'];

        $nhanvien = new NhanVien();
        $getNhanVienById = $nhanvien->find($id);
        $getNhanVienById->hoten = $hoten;
        $getNhanVienById->gioitinh = $gioitinh;
        $getNhanVienById->diachi = $diachi;
        $getNhanVienById->email = $email;
        $getNhanVienById->sdt = $sdt;
        $getNhanVienById->socmnd = $socmnd;
        $getNhanVienById->tendangnhap = $tendangnhap;
        $getNhanVienById->matkhau = $matkhau;

        $getNhanVienById->save();

        return redirect(route('nhanvien-list'));
    }

}

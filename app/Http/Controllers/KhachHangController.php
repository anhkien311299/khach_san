<?php

namespace App\Http\Controllers;

use App\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function index(){
        $khachhangList = \App\KhachHang::all()->toArray();
        return view('khachhang/index', ['khachhangList' => $khachhangList]);
    }

    public function add(){
        return view('khachhang/add');
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

        $khachhang = new KhachHang();
        $khachhang->hoten = $hoten;
        $khachhang->gioitinh = $gioitinh;
        $khachhang->diachi = $diachi;
        $khachhang->email = $email;
        $khachhang->sdt = $sdt;
        $khachhang->socmnd = $socmnd;
        $khachhang->tendangnhap = $tendangnhap;
        $khachhang->matkhau = $matkhau;

        $khachhang->save();

        return redirect(route('khachhang-list'));
    }

    public function update($id){
        $khachhang = new KhachHang();
        $getKhachHangById = $khachhang->find($id)->toArray();
        return view('khachhang/update')->with('getKhachHangById', $getKhachHangById);
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

        $khachhang = new KhachHang();
        $getKhachHangById = $khachhang->find($id);
        $getKhachHangById->hoten = $hoten;
        $getKhachHangById->gioitinh = $gioitinh;
        $getKhachHangById->diachi = $diachi;
        $getKhachHangById->email = $email;
        $getKhachHangById->sdt = $sdt;
        $getKhachHangById->socmnd = $socmnd;
        $getKhachHangById->tendangnhap = $tendangnhap;
        $getKhachHangById->matkhau = $matkhau;

        $getKhachHangById->save();

        return redirect(route('khachhang-list'));
    }

    public function delete($id){
        KhachHang::find($id)->delete();
        return redirect()->action('KhachHangController@index');
    }
}

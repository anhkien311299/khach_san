<?php

namespace App\Http\Controllers;

use App\DatPhong;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DatPhong_PhongController extends Controller
{
    public function index(){
        $keyword = isset($_GET['txt_keyword']) ? $_GET['txt_keyword'] : '';
        $datphong_phongList = DB::table('tbl_datphong_phong')
            ->join('tbl_phong', 'tbl_datphong_phong.phong_id', '=', 'tbl_phong.id_phong')
            ->join('tbl_loaiphong', 'tbl_phong.loaiphong_id', '=', 'tbl_loaiphong.id_loaiphong')
            ->join('tbl_datphong', 'tbl_datphong_phong.datphong_id', '=', 'tbl_datphong.id_datphong')
            ->where('tenphong', 'like', "%$keyword%")
            ->orWhere('tenloaiphong', 'like', "%$keyword%")
            ->orWhere('ngaynhanphong', 'like', "%$keyword%")
            ->orWhere('ngaytraphong', 'like', "%$keyword%")
            ->paginate(6);

//        dd($datphong_phongList);
        return view('datphong_phong/index', ['datphong_phongList' => $datphong_phongList]);
    }

    public function add($id){
        $datphong = new DatPhong();
        $getDatPhongById = $datphong->find($id)->toArray();
        $datphong_phongList = DB::table('tbl_datphong_phong')
            ->join('tbl_phong', 'tbl_datphong_phong.phong_id', '=', 'tbl_phong.id_phong')
            ->join('tbl_loaiphong', 'tbl_phong.loaiphong_id', '=', 'tbl_loaiphong.id_loaiphong')
            ->join('tbl_datphong', 'tbl_datphong_phong.datphong_id', '=', 'tbl_datphong.id_datphong')
            ->where('ngaytraphong', '<', $getDatPhongById['ngaynhanphong'])
            ->where('ngaynhanphong', '>', $getDatPhongById['ngaytraphong'])
            ->get()->toArray();
//            ->orWhere('tenloaiphong', 'like', "%$keyword%")
//            ->orWhere('', 'like', "%$keyword%")
//            ->orWhere('ngaytraphong', 'like', "%$keyword%");
//        dd($getDatPhongById);
        dd($datphong_phongList);

        return view('datphong_phong/add')->with('getDatPhongById', $getDatPhongById);
    }
}

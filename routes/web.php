<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('nhanvien', 'NhanVienController@index')->name('nhanvien-list');
Route::get('nhanvien/add', 'NhanVienController@add')->name('nhanvien-add');
Route::post('nhanvien/add', 'NhanVienController@addsave')->name('nhanvien-addsave');
Route::get('nhanvien/{id}/update', 'NhanVienController@update')->name('nhanvien-update');
Route::post('nhanvien/update', 'NhanVienController@updatesave')->name('nhanvien-updatesave');
//Route::post('nhanvien/delete', 'NhanVienController@delete')->name('nhanvien-delete');
Route::get('nhanvien/{id}/delete', 'NhanVienController@delete')->name('nhanvien-delete');


Route::get('khachhang', 'KhachHangController@index')->name('khachhang-list');
Route::get('khachhang/add', 'KhachHangController@add')->name('khachhang-add');
Route::post('khachhang/add', 'KhachHangController@addsave')->name('khachhang-addsave');
Route::get('khachhang/{id}/update', 'KhachHangController@update')->name('khachhang-update');
Route::post('khachhang/update', 'KhachHangController@updatesave')->name('khachhang-updatesave');
Route::get('khachhang/{id}/delete', 'KhachHangController@delete')->name('khachhang-delete');

Route::get('dichvu', 'DichVuController@index')->name('dichvu-list');
Route::get('dichvu/add', 'DichVuController@add')->name('dichvu-add');
Route::post('dichvu/add', 'DichVuController@addsave')->name('dichvu-addsave');
Route::get('dichvu/{id}/update', 'DichVuController@update')->name('dichvu-update');
Route::post('dichvu/update', 'DichVuController@updatesave')->name('dichvu-updatesave');
Route::get('dichvu/{id}/delete', 'DichVuController@delete')->name('dichvu-delete');

Route::get('loaiphong', 'LoaiPhongController@index')->name('loaiphong-list');
Route::get('loaiphong/add', 'LoaiPhongController@add')->name('loaiphong-add');
Route::post('loaiphong/add', 'LoaiPhongController@addsave')->name('loaiphong-addsave');
Route::get('loaiphong/{id}/update', 'LoaiPhongController@update')->name('loaiphong-update');
Route::post('loaiphong/update', 'LoaiPhongController@updatesave')->name('loaiphong-updatesave');
Route::get('loaiphong/{id}/delete', 'LoaiPhongController@delete')->name('loaiphong-delete');
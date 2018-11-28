@extends('layout/backend')

@section('content')

<h2>Danh sách Khách Hàng</h2>
<a href="{{route('khachhang-add')}}">Thêm mới</a>
<table border="1px" cellpadding="5px">
    <tr>
        <th>Id</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số ĐT</th>
        <th>Số CMND</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Ngày tạo</th>
        <th colspan="2" align="center">Thao tác</th>
    </tr>
    <?php foreach ($khachhangList as $khachhang): ?>
    <tr>
        <td>{{$khachhang['id']}}</td>
        <td>{{$khachhang['hoten']}}</td>
        <td>
            <?php
            if ($khachhang['gioitinh'] == 1){
                echo "Nam";
            }else if ($khachhang['gioitinh'] == 0){
                echo "Nữ";
            }else{
                echo '';
            }
            ?>
        </td>
        <td>{{$khachhang['diachi']}}</td>
        <td>{{$khachhang['email']}}</td>
        <td>{{$khachhang['sdt']}}</td>
        <td>{{$khachhang['socmnd']}}</td>
        <td>{{$khachhang['tendangnhap']}}</td>
        <td>{{$khachhang['matkhau']}}</td>
        <td>{{$khachhang['ngaytao']}}</td>
        <td>
            <a href="khachhang/<?= $khachhang['id']?>/update">Sửa</a>
        </td>
        <td>
            <a onclick="return confirm('Xác nhận xóa?')" href="khachhang/<?= $khachhang['id']?>/delete">Xóa</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>

@endsection
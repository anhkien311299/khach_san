@extends('layout/backend')

@section('content')

<div align="center">
    <h2>Danh sách Phòng</h2>
    <a href="{{route('phong-add')}}">
        <button type="button" class="btn btn-primary btn-sm">Thêm mới</button>
    </a>
    <table border="1px" cellpadding="5px">
        <tr>
            <th>Id</th>
            <th>Tên phòng</th>
            <th>Trạng thái</th>
            <th>Id Loại phòng</th>
            <th>Id Hóa đơn Đặt phòng</th>
            <th>Id Hóa đơn Thanh toán</th>
            <th colspan="2" align="center">Thao tác</th>
        </tr>
        <?php foreach ($phongList as $phong): ?>
        <tr>
            <td>{{$phong['id']}}</td>
            <td>{{$phong['ten']}}</td>
            <td>
                <?php
                if ($phong['trangthai'] == 1){
                    echo "Đã đặt";
                }else if ($phong['trangthai'] == 0){
                    echo "Chưa đặt";
                }else{
                    echo '';
                }
                ?>
            </td>
            <td>{{$phong['loaiphong_id']}}</td>
            <td>{{$phong['datphong_id']}}</td>
            <td>{{$phong['hoadon_id']}}</td>
            <td>
                <a href="nhanvien/<?= $phong['id']?>/update">
                    <button type="button" class="btn btn-primary btn-sm">Sửa</button>
                </a>
            </td>
            <td>
                <a onclick="return confirm('Xác nhận xóa?')" href="phong/<?= $phong['id']?>/delete">
                    <button type="button" class="btn btn-primary btn-sm">Xóa</button>
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</div>


@endsection
@extends('layout/backend')

@section('content')

<div align="center">
    <h2>Danh sách Loại Phòng</h2>
    <a href="{{route('loaiphong-add')}}">
        <button type="button" class="btn btn-primary btn-sm">Thêm mới</button>
    </a>
    <table border="1px" cellpadding="5px">
        <tr>
            <th>Id</th>
            <th>Tên loại phòng</th>
            <th>Giá</th>
            <th>Mô tả</th>
            <th colspan="2" align="center">Thao tác</th>
        </tr>
        <?php foreach ($loaiphongList as $loaiphong): ?>
        <tr>
            <td>{{$loaiphong['id']}}</td>
            <td>{{$loaiphong['ten']}}</td>
            <td>{{$loaiphong['gia']}}</td>
            <td>{{$loaiphong['mota']}}</td>
            <td>
                <a href="loaiphong/<?= $loaiphong['id']?>/update">
                    <button type="button" class="btn btn-primary btn-sm">Sửa</button>
                </a>
            </td>
            <td>
                <a onclick="return confirm('Xác nhận xóa?')" href="loaiphong/<?= $loaiphong['id']?>/delete">
                    <button type="button" class="btn btn-primary btn-sm">Xóa</button>
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</div>


@endsection
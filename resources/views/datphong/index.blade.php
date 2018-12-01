@extends('layout/backend')

@section('content')
<div align="center">
    <h2>Danh sách Hóa đơn Đặt phòng</h2>
    <?php
    if (isset($_SESSION['err_message'])){
        echo "<p style='color: red'>".$_SESSION['err_message']."</p>";
        unset($_SESSION['err_message']);
    }
    if (isset($_SESSION['nhanvien_success_message'])){
        echo "<p style='color: green'>".$_SESSION['nhanvien_success_message']."</p>";
        unset($_SESSION['nhanvien_success_message']);
    }
    ?>

<!-- search form -->
    <form action="" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="txt_keyword" class="form-control" value="<?= isset($_GET['txt_keyword']) ? $_GET['txt_keyword']: ''?>" placeholder="Tìm kiếm theo Tên khách hàng, số CMND, số ĐT, ngày nhận phòng, ngày trả phòng, ghi chú">
            <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
    </form>
    <!-- /.search form -->

    <a href="{{route('datphong-add')}}">
        <button type="button" class="btn btn-primary btn-sm">Thêm mới</button>
    </a>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Tên khách hàng</th>
            <th>Số CMND</th>
            <th>Số ĐT</th>
            <th>Ngày nhận phòng</th>
            <th>Ngày trả phòng</th>
            <th>Ghi chú</th>
            <th>Id khách hàng</th>
            <th colspan="3" align="center">Thao tác</th>
        </tr>
        <?php foreach ($datphongList as $datphong): ?>
        <tr>
            <td>{{$datphong->id_datphong}}</td>
            <td>{{$datphong->tenkh}}</td>
            <td>{{$datphong->socmnd}}</td>
            <td>{{$datphong->sdt}}</td>
            <td>{{$datphong->ngaynhanphong}}</td>
            <td>{{$datphong->ngaytraphong}}</td>
            <td>{{$datphong->ghichu}}</td>
            <td>{{$datphong->khachhang_id}}</td>
            <td>
                <a href="datphong/<?= $datphong->id_datphong?>/update">
                    <button type="button" class="btn btn-primary btn-sm">Sửa</button>
                </a>
            </td>
            <td>
                <a onclick="return confirm('Xác nhận xóa?')" href="datphong/<?= $datphong->id_datphong?>/delete">
                    <button type="button" class="btn btn-danger btn-sm">Xóa</button>
                </a>
            </td>
            <td>
                <a href="datphong_phong/<?= $datphong->id_datphong?>/add">
                    <button type="button" class="btn btn-primary btn-sm">Chọn phòng</button>
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    {!! $datphongList->links() !!}
</div>


@endsection
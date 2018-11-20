<h2>Danh sách Nhân viên</h2>
<a href="{{route('nhanvien-add')}}">Thêm mới</a>
<table border="1px" cellpadding="5px">
    <tr>
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
    <?php foreach ($nhanvienList as $nhanvien): ?>
    <tr>
        <td>{{$nhanvien['hoten']}}</td>
        <td>
        <?php
            if ($nhanvien['gioitinh'] == 1){
                echo "Nam";
            }else if ($nhanvien['gioitinh'] == 0){
                echo "Nữ";
            }else{
                echo '';
            }
        ?>
        </td>
        <td>{{$nhanvien['diachi']}}</td>
        <td>{{$nhanvien['email']}}</td>
        <td>{{$nhanvien['sdt']}}</td>
        <td>{{$nhanvien['socmnd']}}</td>
        <td>{{$nhanvien['tendangnhap']}}</td>
        <td>{{$nhanvien['matkhau']}}</td>
        <td>{{$nhanvien['ngaytao']}}</td>
        <td>
            {{--<form action="{{route('nhanvien-update')}}" method="post">--}}
                {{--<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />--}}
                {{--<input type="hidden" name="txt_id" value="{{$nhanvien['id']}}">--}}
                {{--<input type="submit" value="Sửa">--}}
            {{--</form>--}}

            <a href="nhanvien/<?= $nhanvien['id']?>/update">Sửa</a>
        </td>
        <td>
            {{--<form action="{{route('nhanvien-delete')}}" method="post">--}}
                {{--<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />--}}
                {{--<input type="hidden" name="txt_id" value="{{$nhanvien['id']}}">--}}
                {{--<input type="submit" value="Xóa">--}}
            {{--</form>--}}

            <a onclick="return confirm('Xác nhận xóa?')" href="nhanvien/<?= $nhanvien['id']?>/delete">Xóa</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
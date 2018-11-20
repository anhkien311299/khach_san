<?php
//    dd($getNhanVienById);
//?>

<h2><b>Sửa thông tin Nhân Viên</b></h2>

<form action="{{route('nhanvien-updatesave')}}" method="post" name="myForm" onsubmit="return validateForm()">
    <table border="1px" cellpadding="5px">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="txt_id" value="{{ old('id', $getNhanVienById['id']) }}">
        <tr>
            <th>Họ tên</th>
            <td>
                <input type="text" name="txt_hoten" id="hoten" value="{{ old('hoten', $getNhanVienById['hoten']) }}" >
            </td>
        </tr>
        <tr>
            <th>Giới tính</th>
            <td>
                <input type="radio" name="rd_gioitinh" id="nam" value="1" <?= (old('gioitinh', $getNhanVienById['gioitinh']) == 1) ? 'checked': ''?> >Nam
                <input type="radio" name="rd_gioitinh" id="nu" value="0" <?= (old('gioitinh', $getNhanVienById['gioitinh']) == 0) ? 'checked': ''?> >Nữ
            </td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td>
                <input type="text" name="txt_diachi" id="diachi" value="{{ old('diachi', $getNhanVienById['diachi']) }}" >
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>
                <input type="text" name="txt_email" id="email" value="{{ old('email', $getNhanVienById['email']) }}" >
            </td>
        </tr>
        <tr>
            <th>Số ĐT</th>
            <td>
                <input type="text" name="txt_sdt" id="sdt" value="{{ old('sdt', $getNhanVienById['sdt']) }}" >
            </td>
        </tr>
        <tr>
            <th>Số CMND</th>
            <td>
                <input type="text" name="txt_socmnd" id="socmnd"  value="{{ old('socmnd', $getNhanVienById['socmnd']) }}" >
            </td>
        </tr>
        <tr>
            <th>Tên đăng nhập</th>
            <td>
                <input type="text" name="txt_tendangnhap" id="tendangnhap" value="{{ old('tendangnhap', $getNhanVienById['tendangnhap']) }}" >
            </td>
        </tr>
        <tr>
            <th>Mật khẩu</th>
            <td>
                <input type="text" name="txt_matkhau" id="matkhau" value="{{ old('matkhau', $getNhanVienById['matkhau']) }}" >
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Sửa">
            </td>
        </tr>
    </table>
</form>
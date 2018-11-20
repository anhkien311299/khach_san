<h2><b>Thêm mới Nhân Viên</b></h2>

<form action="{{route('nhanvien-addsave')}}" method="post" name="myForm" onsubmit="return validateForm()">
    <table border="1px" cellpadding="5px">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <tr>
            <th>Họ tên</th>
            <td>
                <input type="text" name="txt_hoten" id="hoten">
            </td>
        </tr>
        <tr>
            <th>Giới tính</th>
            <td>
                <input type="radio" name="rd_gioitinh" id="nam" value="1">Nam
                <input type="radio" name="rd_gioitinh" id="nu" value="0">Nữ
            </td>
        </tr>
        <tr>
            <th>Địa chỉ</th>
            <td>
                <input type="text" name="txt_diachi" id="diachi">
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>
                <input type="text" name="txt_email" id="email">
            </td>
        </tr>
        <tr>
            <th>Số ĐT</th>
            <td>
                <input type="text" name="txt_sdt" id="sdt">
            </td>
        </tr>
        <tr>
            <th>Số CMND</th>
            <td>
                <input type="text" name="txt_socmnd" id="socmnd">
            </td>
        </tr>
        <tr>
            <th>Tên đăng nhập</th>
            <td>
                <input type="text" name="txt_tendangnhap" id="tendangnhap">
            </td>
        </tr>
        <tr>
            <th>Mật khẩu</th>
            <td>
                <input type="text" name="txt_matkhau" id="matkhau">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Thêm mới">
            </td>
        </tr>
    </table>
</form>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lý Khách sạn</title>
</head>
<body>
    <div align="center">
        <h1>Đăng nhập hệ thống</h1>
        <?php
        if (isset($_SESSION['err_message'])){
            echo "<p style='color: red'>".$_SESSION['err_message']."</p>";
            unset($_SESSION['err_message']);
        }
        ?>
        <form action="{{ route('nhanvien-authenticate') }}" method="post">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <table border="1" cellpadding="5">
                <tr>
                    <th>Tên đăng nhập:</th>
                    <td>
                        <input type="text" name="txt_tendangnhap">
                    </td>
                </tr>
                <tr>
                    <th>Mật khẩu:</th>
                    <td>
                        <input type="text" name="txt_matkhau">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Đăng nhập">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
@extends('layout/backend')

@section('content')

<div align="center">
    <h2>Sửa thông tin Hóa đơn Đặt phòng</h2>
    <?php
    if (isset($_SESSION['err_message'])){
        echo "<p style='color: red'>".$_SESSION['err_message']."</p>";
        unset($_SESSION['err_message']);
    }
    ?>
    <form action="{{route('datphong-updatesave')}}" method="post" name="myForm" onsubmit="return validateForm()">
        <table class="table table-bordered">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="txt_id" value="{{ old('id_datphong', $getDatPhongById['id_datphong']) }}">
            <tr>
                <th>Tên khách hàng</th>
                <td>
                    <input class="form-control" type="text" name="txt_tenkh" id="tenkh" value="{{ old('tenkh', $getDatPhongById['tenkh']) }}" >
                </td>
            </tr>
            <tr>
                <th>Số CMND</th>
                <td>
                    <input class="form-control" type="text" name="txt_socmnd" id="socmnd" value="{{ old('socmnd', $getDatPhongById['socmnd']) }}" >
                </td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td>
                    <input class="form-control" type="text" name="txt_sdt" id="sdt" value="{{ old('sdt', $getDatPhongById['sdt']) }}" >
                </td>
            </tr>
            <tr>
                <th>Ngày nhận phòng</th>
                <td>
                    <input type="date" name="txt_ngaynhanphong" id="ngaynhanphong" value="{{ old('ngaynhanphong', $getDatPhongById['ngaynhanphong']) }}" min="date('Y-m-d')" max="">
                </td>
            </tr>
            <tr>
                <th>Ngày trả phòng</th>
                <td>
                    <input type="date" name="txt_ngaytraphong" id="ngaytraphong" value="{{ old('ngaytraphong', $getDatPhongById['ngaytraphong']) }}" min="date('Y-m-d')" max="">
                </td>
            </tr>
            <tr>
                <th>Ghi chú</th>
                <td>
                    <textarea class="form-control" name="txt_ghichu" id="ghichu" cols="30" rows="10">
                        {{ old('ghichu', $getDatPhongById['ghichu']) }}
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input class="btn btn-primary btn-sm" type="submit" value="Sửa">
                </td>
            </tr>
        </table>
    </form>
</div>


@endsection
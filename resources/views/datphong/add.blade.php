@extends('layout/backend')

@section('content')

<div align="center">

    <h2>Thêm mới Hóa đơn Đặt phòng</h2>
    <?php
    if (isset($_SESSION['err_message'])){
        echo "<p style='color: red'>".$_SESSION['err_message']."</p>";
        unset($_SESSION['err_message']);
    }
    ?>
    <form action="{{route('datphong-addsave')}}" method="post" name="myForm" onsubmit="return validateForm()">
        <table class="table table-bordered">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <tr>
                <th>Tên khách hàng</th>
                <td>
                    <input class="form-control" type="text" name="txt_tenkh" id="tenkh">
                </td>
            </tr>
            <tr>
                <th>Số CMND</th>
                <td>
                    <input class="form-control" type="text" name="txt_socmnd" id="socmnd">
                </td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td>
                    <input class="form-control" type="text" name="txt_sdt" id="sdt">
                </td>
            </tr>
            <tr>
                <th>Ngày nhận phòng</th>
                <td>
                    <input type="date" name="txt_ngaynhanphong" id="ngaynhanphong" value="<?= date('Y-m-d')?>" min="date('Y-m-d')" max="">
                </td>
            </tr>
            <tr>
                <th>Ngày trả phòng</th>
                <td>
                    <input type="date" name="txt_ngaytraphong" id="ngaytraphong" value="<?= date('Y-m-d')?>" min="date('Y-m-d')" max="">
                </td>
            </tr>
            <tr>
                <th>Ghi chú</th>
                <td>
                    <textarea class="form-control" name="txt_ghichu" id="ghichu" cols="30" rows="10"></textarea>
                </td>
            </tr>
            {{--<tr>--}}
                {{--<th>Id khách hàng</th>--}}
                {{--<td>--}}
                    {{--<input class="form-control" type="text" name="txt_khachhang_id" id="khachhang_id">--}}
                {{--</td>--}}
            {{--</tr>--}}
            <tr>
                <td colspan="2" align="center">
                    <input class="btn btn-primary btn-sm" type="submit" value="Thêm mới">
                </td>
            </tr>
        </table>
    </form>
</div>


@endsection
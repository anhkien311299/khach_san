@extends('layout/backend')

@section('content')

<div align="center">
    <h2>Thêm mới Phòng</h2>

    <form action="{{route('phong-addsave')}}" method="post" name="myForm" onsubmit="return validateForm()">
        <table border="1px" cellpadding="5px">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <tr>
                <th>Tên phòng</th>
                <td>
                    <input type="text" name="txt_ten" id="ten">
                </td>
            </tr>
            <tr>
                <th>Trạng thái</th>
                <td>
                    <input type="radio" name="rd_trangthai" id="dadat" value="1">Đã đặt
                    <input type="radio" name="rd_trangthai" id="chuadat" value="0">Chưa đặt
                </td>
            </tr>
            <tr>
                <th>Id Loại phòng</th>
                <td>
                    <input type="text" name="txt_loaiphong_id" id="loaiphong_id">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input class="btn btn-primary btn-sm" type="submit" value="Thêm mới">

                </td>
            </tr>
        </table>
    </form>
</div>



@endsection
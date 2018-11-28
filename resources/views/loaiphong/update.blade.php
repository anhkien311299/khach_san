@extends('layout/backend')

@section('content')

<div align="center">
    <h2>Sửa thông tin Loại Phòng</h2>

    <form action="{{route('loaiphong-updatesave')}}" method="post" name="myForm" onsubmit="return validateForm()">
        <table border="1px" cellpadding="5px">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="hidden" name="txt_id" value="{{ old('id', $getLoaiPhongById['id']) }}">
            <tr>
                <th>Tên loại phòng</th>
                <td>
                    <input class="form-control" type="text" name="txt_ten" id="ten" value="{{ old('ten', $getLoaiPhongById['ten']) }}" >
                </td>
            </tr>
            <tr>
                <th>Giá</th>
                <td>
                    <input class="form-control" type="text" name="txt_gia" id="gia" value="{{ old('gia', $getLoaiPhongById['gia']) }}" >
                </td>
            </tr>
            <tr>
                <th>Mô tả</th>
                <td>
                    <textarea name="txt_mota" id="mota" cols="30" rows="10">{{ old('mota', $getLoaiPhongById['mota']) }}</textarea>
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
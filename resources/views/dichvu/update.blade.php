<?php
//    dd($getNhanVienById);
//?>

<h2><b>Sửa thông tin Dịch Vụ</b></h2>

<form action="{{route('dichvu-updatesave')}}" method="post" name="myForm" onsubmit="return validateForm()">
    <table border="1px" cellpadding="5px">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="txt_id" value="{{ old('id', $getDichVuById['id']) }}">
        <tr>
            <th>Tên dịch vụ</th>
            <td>
                <input type="text" name="txt_ten" id="ten" value="{{ old('ten', $getDichVuById['ten']) }}" >
            </td>
        </tr>
        <tr>
            <th>Giá</th>
            <td>
                <input type="text" name="txt_gia" id="gia" value="{{ old('gia', $getDichVuById['gia']) }}" >
            </td>
        </tr>
        <tr>
            <th>Mô tả</th>
            <td>
                <textarea name="txt_mota" id="mota" cols="30" rows="10">{{ old('mota', $getDichVuById['mota']) }}</textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Sửa">
            </td>
        </tr>
    </table>
</form>
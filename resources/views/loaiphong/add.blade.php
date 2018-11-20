<h2><b>Thêm mới Loại Phòng</b></h2>

<form action="{{route('loaiphong-addsave')}}" method="post" name="myForm" onsubmit="return validateForm()">
    <table border="1px" cellpadding="5px">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <tr>
            <th>Tên loại phòng</th>
            <td>
                <input type="text" name="txt_ten" id="ten">
            </td>
        </tr>
        <tr>
            <th>Giá</th>
            <td>
                <input type="text" name="txt_gia" id="gia">
            </td>
        </tr>
        <tr>
            <th>Mô tả</th>
            <td>
                <textarea name="txt_mota" id="mota" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Thêm mới">
            </td>
        </tr>
    </table>
</form>
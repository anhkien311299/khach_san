<h2>Danh sách Loại Phòng</h2>
<a href="{{route('loaiphong-add')}}">Thêm mới</a>
<table border="1px" cellpadding="5px">
    <tr>
        <th>Id</th>
        <th>Tên loại phòng</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th colspan="2" align="center">Thao tác</th>
    </tr>
    <?php foreach ($loaiphongList as $loaiphong): ?>
    <tr>
        <td>{{$loaiphong['id']}}</td>
        <td>{{$loaiphong['ten']}}</td>
        <td>{{$loaiphong['gia']}}</td>
        <td>{{$loaiphong['mota']}}</td>
        <td>
            <a href="loaiphong/<?= $loaiphong['id']?>/update">Sửa</a>
        </td>
        <td>
            <a onclick="return confirm('Xác nhận xóa?')" href="loaiphong/<?= $loaiphong['id']?>/delete">Xóa</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
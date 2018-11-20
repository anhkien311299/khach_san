<h2>Danh sách Dịch Vụ</h2>
<a href="{{route('dichvu-add')}}">Thêm mới</a>
<table border="1px" cellpadding="5px">
    <tr>
        <th>Id</th>
        <th>Tên dịch vụ</th>
        <th>Giá</th>
        <th>Mô tả</th>
        <th colspan="2" align="center">Thao tác</th>
    </tr>
    <?php foreach ($dichvuList as $dichvu): ?>
    <tr>
        <td>{{$dichvu['id']}}</td>
        <td>{{$dichvu['ten']}}</td>
        <td>{{$dichvu['gia']}}</td>
        <td>{{$dichvu['mota']}}</td>
        <td>
            <a href="dichvu/<?= $dichvu['id']?>/update">Sửa</a>
        </td>
        <td>
            <a onclick="return confirm('Xác nhận xóa?')" href="dichvu/<?= $dichvu['id']?>/delete">Xóa</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
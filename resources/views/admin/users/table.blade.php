@extends('admin.layouts.table')
@section('title', 'Quản trị viên')

@section('sort_options')
    <option {{$sort == \App\Enums\Sort::CREATED_AT_ASC ? 'selected': ''}} value="{{\App\Enums\Sort::CREATED_AT_ASC}}">Cũ nhất trước</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_DESC || $sort == '' ? 'selected': ''}} value="{{\App\Enums\Sort::CREATED_AT_DESC}}">Mới nhất trước</option>
@endsection

@section('table_head')
    <tr>
        <th>Họ và tên</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Ngày tạo</th>
        <th class="col-action">Thao tác</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td>{{$item->full_name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->created_at->format('d/m/Y')}}</td>
            <td class="col-action">
                <a href="{{route('edit_user',$item->id)}}" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Bạn có chắc muốn xóa {{$item->full_name}}?')" href="{{route('delete_user',$item->id)}}" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="perpage" value="users">
    <input type="hidden" id="page_item" value="list_user">
@endsection

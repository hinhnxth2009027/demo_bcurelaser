@extends('admin.layouts.table')
@section('title', 'Đánh giá Facebook')

@section('sort_options')
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_ASC || $sort == '' ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NUMBER_ASC}}">Thứ tự tăng dần</option>
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NUMBER_DESC}}">Thứ tự giảm dần</option>
    <option {{$sort == \App\Enums\Sort::NAME_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::NAME_ASC}}">Tên A-Z</option>
    <option {{$sort == \App\Enums\Sort::NAME_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::NAME_DESC}}">Tên Z-A</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_ASC}}">Cũ nhất trước</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_DESC}}">Mới nhất trước</option>
@endsection

@section('table_head')
    <tr>
        <th>Tên</th>
        <th>Ảnh đại diện</th>
        <th>Tiêu đề</th>
        <th>Thứ tự</th>
        <th>Ngày</th>
        <th class="col-action">Thao tác</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td><img src="{{$item->thumbnail}}" alt="" style="width: 50px;height: 50px;border-radius: 4px;object-fit: cover"></td>
            <td>{{$item->title}}</td>
            <td>{{$item->sort_number}}</td>
            <td>{{$item->date}}</td>
            <td class="col-action">
                <a href="{{route('edit_facebook_review',$item->id)}}" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Bạn có chắc muốn xóa review này?')" href="{{route('delete_facebook_review',$item->id)}}" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="perpage" value="Facebook">
    <input type="hidden" id="page_item" value="list_facebook_review">
@endsection

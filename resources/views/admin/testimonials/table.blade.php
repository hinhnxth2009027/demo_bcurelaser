@extends('admin.layouts.table')
@section('title', 'Chia sẻ từ khách hàng')

@section('sort_options')
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_ASC || $sort == '' ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NUMBER_ASC}}">Thứ tự tăng dần</option>
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NUMBER_DESC}}">Thứ tự giảm dần</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_ASC}}">Cũ nhất trước</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_DESC}}">Mới nhất trước</option>
@endsection

@section('table_head')
    <tr>
        <th>Tên khách hàng</th>
        <th>Chức vụ</th>
        <th>Thứ tự</th>
        <th>Ngày tạo</th>
        <th class="col-action">Action</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->sort_number}}</td>
            <td>{{$item->date}}</td>
            <td class="col-action">
                <a href="{{route('edit_testimonial',$item->id)}}" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Bạn có chắc muốn xóa mục này?')" href="{{route('delete_testimonial',$item->id)}}" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="perpage" value="testimonial">
    <input type="hidden" id="page_item" value="listTes">
@endsection

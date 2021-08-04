@extends('admin.layouts.table')
@section('title', 'Sản phẩm')

@section('sort_options')
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_ASC || $sort == '' ? 'selected': ''}} value="{{\App\Enums\Sort::SORT_NUMBER_ASC}}">Thứ tự tăng dần</option>
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_DESC ? 'selected': ''}} value="{{\App\Enums\Sort::SORT_NUMBER_DESC}}">Thứ tự giảm dần</option>
    <option {{$sort == \App\Enums\Sort::NAME_ASC ? 'selected': ''}} value="{{\App\Enums\Sort::NAME_ASC}}">Tên A-Z</option>
    <option {{$sort == \App\Enums\Sort::NAME_DESC ? 'selected': ''}} value="{{\App\Enums\Sort::NAME_DESC}}">Tên Z-A</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_ASC ? 'selected': ''}} value="{{\App\Enums\Sort::CREATED_AT_ASC}}">Cũ nhất trước</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_DESC ? 'selected': ''}} value="{{\App\Enums\Sort::CREATED_AT_DESC}}">Mới nhất trước</option>
@endsection

@section('table_head')
    <tr>
        <th>Tên</th>
        <th>Ảnh</th>
        <th>Thứ tự</th>
        <th>Ngày tạo</th>
        <th style="width: 250px">Thao tác</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>
                <img src="{{$item->thumbnail}}" alt=""
                     style="width: 70px;height: 70px;object-fit: cover;border-radius: 3px">
            </td>
            <td>{{$item->sort_number}}</td>
            <td>{{$item->created_at->format('d/m/Y')}}</td>
            <td class="col-action">
                <a target="_blank" href="{{route('product_detail', $item->slug)}}"
                   class="btn btn-warning">Xem chi tiết</a>
                <a href="{{route('edit_product',$item->id)}}" class="btn btn-info text-light">Sửa</a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')"
                   href="{{route('delete_product',$item->id)}}"
                   class="btn btn-danger text-light">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="perpage" value="products">
    <input type="hidden" id="page_item" value="list_product">
@endsection

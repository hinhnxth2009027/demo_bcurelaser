@extends('.admin.layouts.table')
@section('title', 'Phương pháp trị liệu')

@section('sort_options')
    <option
        {{$sort == \App\Enums\Sort::SORT_NUMBER_ASC || $sort == '' ? 'selected': ''}} value="{{\App\Enums\Sort::SORT_NUMBER_ASC}}">
        Thứ tự tăng dần
    </option>
    <option
        {{$sort == \App\Enums\Sort::SORT_NUMBER_DESC ? 'selected': ''}} value="{{\App\Enums\Sort::SORT_NUMBER_DESC}}">
        Thứ tự giảm dần
    </option>
    <option {{$sort == \App\Enums\Sort::TITLE_ASC ? 'selected': ''}} value="{{\App\Enums\Sort::TITLE_ASC}}">Tiêu đề
        A-Z
    </option>
    <option {{$sort == \App\Enums\Sort::TITLE_DESC ? 'selected': ''}} value="{{\App\Enums\Sort::TITLE_DESC}}">Tiêu đề
        Z-A
    </option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_ASC}}">
        Cũ nhất trước
    </option>
    <option
        {{$sort == \App\Enums\Sort::CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_DESC}}">Mới
        nhất trước
    </option>
@endsection

@section('table_head')
    <tr>
        <th>Tiêu đề</th>
        <th>Ảnh đại diện bài viết</th>
        <th>Thứ tự</th>
        <th>Ngày tạo</th>
        <th style="width: 250px">Thao tác</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td>{{$item->title}}</td>
            <td>
                <img style="height: 50px;width: 50px;object-fit: cover;border-radius: 50%"
                     src="{{$item->thumbnail}}">
            </td>
            <td>{{$item->sort_number}}</td>
            <td>{{$item->created_at->format('d/m/Y')}}</td>
            <td class="col-action">
                <a target="_blank" href="{{route('treatment_detail', $item->slug)}}"
                   class="btn btn-warning">Xem bài viết</a>
                <a href="{{route('edit_treatment', $item->id)}}" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')"
                   href="{{route('delete_treatment', $item->id)}}"
                   class="btn btn-danger text-light">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="page_item" value="list_treatment">
    <input type="hidden" id="perpage" value="treatments">
@endsection

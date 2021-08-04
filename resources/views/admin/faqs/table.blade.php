@extends('admin.layouts.table')
@section('title', 'Câu hỏi thường gặp')

@section('sort_options')
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_ASC || $sort == '' ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NUMBER_ASC}}">Thứ tự tăng dần</option>
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NUMBER_DESC}}">Thứ tự giảm dần</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_ASC}}">Cũ nhất trước</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_DESC}}">Mới nhất trước</option>
@endsection

@section('table_head')
    <tr>
        <th>Câu hỏi</th>
        <th>Thứ tự</th>
        <th>Ngày tạo</th>
        <th class="col-action">Thao tác</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td>{{$item->question}}</td>
            <td>{{$item->sort_number}}</td>
            <td>{{$item->created_at->format('d/m/Y')}}</td>
            <td class="col-action">
                <a href="{{route('edit_faq',[$item->id])}}" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Bạn có chắc muốn xóa câu hỏi này?')" href="{{route('delete_faq',[$item->id])}}" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="perpage" value="faq">
    <input type="hidden" id="page_item" value="listFaq">
@endsection

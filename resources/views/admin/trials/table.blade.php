@extends('admin.layouts.table')
@section('title', 'Thử nghiệm lâm sàng')

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

@section('extra_filters')
    <select name="type" id="type" class="form-control ml-2">
        <option value="">Tất cả thử nghiệm</option>
        <option
            value="{{\App\Enums\TrialType::CLINICAL_TRIAL}}" {{$type == \App\Enums\TrialType::CLINICAL_TRIAL ? 'selected' : '' }}>
            Thử nghiệm lâm sàng
        </option>
        <option
            value="{{\App\Enums\TrialType::PROFESSIONAL_RECOMMENDATIONS}}" {{$type == \App\Enums\TrialType::PROFESSIONAL_RECOMMENDATIONS ? 'selected' : '' }}>
            Khuyến nghị chuyên nghiệp
        </option>
    </select>
@endsection

@section('table_head')
    <tr>
        <th>Tiêu đề</th>
        <th>Logo</th>
        <th>Ảnh đại diện</th>
        <th>Kiểu</th>
        <th>Thứ tự</th>
        <th>Ngày tạo</th>
        <th class="col-action">Thao tác</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td>{{$item->title}}</td>
            <td><img src="{{$item->logo}}" alt="" style="width: 70px;height: 70px;object-fit: cover">
            </td>
            <td><img src="{{$item->thumbnail}}" alt=""
                     style="width: 70px;height: 70px;object-fit: cover"></td>
            <td>{{\App\Enums\TrialType::getDescription($item->type)}}</td>
            <td>{{$item->sort_number}}</td>
            <td>{{$item->created_at->format('d/m/Y')}}</td>
            <td class="col-action">
                <a href="{{route('edit_trial',$item->id)}}" class="btn btn-info">Sửa</a>
                <a href="{{route('delete_trial',$item->id)}}"
                   onclick="return confirm('Bạn có chắc chắn muốn xóa mục này?')"
                   class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="perpage" value="trials">
    <input type="hidden" id="page_item" value="listTrial">
@endsection

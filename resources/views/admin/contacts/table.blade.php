@extends('.admin.layouts.table')
@section('title', 'Hòm thư')

@section('sort_options')
    <option {{$sort == \App\Enums\Sort::NAME_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::NAME_ASC}}">Tên A-Z</option>
    <option {{$sort == \App\Enums\Sort::NAME_DESC ? 'selected': ''}} value="{{\App\Enums\Sort::NAME_DESC}}">Tên Z-A</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_ASC ? 'selected': ''}} value="{{\App\Enums\Sort::CREATED_AT_ASC}}">Cũ nhất trước</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_DESC || $sort == '' ? 'selected': ''}} value="{{\App\Enums\Sort::CREATED_AT_DESC}}">Mới nhất trước</option>
@endsection

@section('extra_filters')
    <select class="form-control" name="filter" id="filter" style="margin-right: 10px">
        <option {{$filter == '' ? 'selected': ''}} value="">Tất cả chủ đề</option>
        <option
            {{$filter == \App\Enums\Subject::SALES ? 'selected': ''}} value="{{\App\Enums\Subject::SALES}}">
            Mua hàng
        </option>
        <option
            {{$filter == \App\Enums\Subject::CUSTOMER_SUPPORT ? 'selected': ''}} value="{{\App\Enums\Subject::CUSTOMER_SUPPORT}}">
            Cần hỗ trợ
        </option>
        <option
            {{$filter == \App\Enums\Subject::PARTNER_SHIP ? 'selected': ''}} value="{{\App\Enums\Subject::PARTNER_SHIP}}">
            Yêu cầu hợp tác
        </option>
    </select>
@endsection

@section('table_head')
    <tr>
        <th style="width: 250px">Người gửi</th>
        <th>Chủ đề</th>
        <th style="width: 150px">Ngày gửi</th>
        <th style="width: 150px">Thao tác</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td>
                {{$item->name}}<br>
                SĐT: {{$item->phone}}<br>
                Email: {{$item->email}}
            </td>
            <td>
                <strong>
                    @switch($item->subject)
                        @case(\App\Enums\Subject::SALES)
                        Mua hàng
                        @break
                        @case(\App\Enums\Subject::CUSTOMER_SUPPORT)
                        Cần hỗ trợ
                        @break
                        @case(\App\Enums\Subject::PARTNER_SHIP)
                        Yêu cầu hợp tác
                        @break
                    @endswitch
                </strong><br>
                <p style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;">{{$item->message}}</p></td>
            <td>{{$item->created_at}}</td>
            <td class="col-action">
                <a href="{{route('detail_contact',$item->id)}}" class="btn btn-primary">Xem</a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa tin này?')"
                   href="{{route('delete_contact',$item->id)}}"
                   class="btn btn-danger text-light">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="perpage" value="contact">
@endsection

@extends('admin.layouts.form')
@section('title', 'Xem thư')

@section('form')
    <div class="m-3 mt-4">
        <h6><i class="fa fa-user pr-3"></i>{{$detail->name}}</h6>
        <h6><i class="fa fa-envelope pr-3"></i>{{$detail->email}}</h6>
        <h6><i class="fa fa-phone pr-3"></i>{{$detail->phone}}</h6>
        <h6><i class="fa fa-clock pr-3"></i>{{$detail->created_at}}</h6>
    </div>

    <div style="padding: 15px 15px;">
        <p style="font-size: 15px;display: block">
            <strong>
                Chủ đề: @switch($detail->subject)
                    @case(1)
                    Mua hàng
                    @break
                    @case(2)
                    Cần hỗ trợ
                    @break
                    @case(3)
                    Yêu cầu hợp tác
                    @break
                @endswitch
            </strong>
        </p>
        <p><strong style="font-size: 15px">Nội dung:</strong></p>
        <p>{{$detail->message}}</p>
    </div>
@endsection

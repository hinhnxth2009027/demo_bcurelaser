@extends('layouts.master')
@section('extraCss')
    <style>
        @media only screen and (max-width: 991px){
            [class*="col-"] {
                width: 100%;
                padding: 10px;
            }
        }
    </style>
@endsection
@section('main')
    <div class="container p-5">
        <div class="row mt-3">
            <h1 class="text-center text-uppercase">Thử nghiệm <span style="color: #f68e1e">B-Cure Laser</span></h1>
        </div>
        <div class="row mt-3">
            Các nghiên cứu lâm sàng chứng minh tác động tích cực của công nghệ laser mức độ thấp trong điều trị đau,
            điều kiện chỉnh hình, viêm nhiễm, chấn thương thể thao và vết thương. Hơn 2.000 ấn phẩm - bao gồm hơn 100
            nghiên cứu mù đôi - đã ủng hộ hiệu quả của liệu pháp laser mức độ thấp. Hiệu quả của B-Cure Laser trong điều
            trị đau và vết thương đã được chứng minh trong năm thử nghiệm lâm sàng mù đôi. năm thử nghiệm lâm sàng khác
            đang được tiến hành.
        </div>
        <div class="row mt-4">
            @foreach($clinical as $item)
            <div class="col-4" style="padding: 10px">
                <div class="card" style="width: 100%;height: 100%">
                    <div class="row">
                        <img height="100%" class="card-img-top"
                             src="{{$item->thumbnail}}"
                             alt="">
                    </div>
                    <div class="card-title d-flex p-2 pt-3 pb-0">
                        <img
                            src="{{$item->logo}}" alt=""
                            style="max-height: 60px; max-width: 60px; object-fit: contain;">
                        <h5> {{$item->title}}</h5>
                    </div>
                    <div class="card-body pt-0">
                        <p class="card-text small">{{$item->content}}</p>
                    </div>
                    <div class="card-footer">
                        <a target="_blank" href="{{$item->file}}" class="btn btn-primary btn-sm">Mở file</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <h1 class="text-center text-uppercase">Khuyến nghị chuyên môn</h1>
        </div>
        <div class="row mt-4">
            @foreach($professional as $item)
                <div class="col-4" style="padding: 10px">
                    <div class="card" style="width: 100%;height: 100%">
                        <div class="row">
                            <img height="100%" class="card-img-top"
                                 src="{{$item->thumbnail}}"
                                 alt="">
                        </div>
                        <div class="card-title d-flex p-2 pt-3 pb-0">
                            <img
                                src="{{$item->logo}}" alt=""
                                style="max-height: 60px; max-width: 60px; object-fit: contain;">
                            <h5> {{$item->title}}</h5>
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text small">{{$item->content}}</p>
                        </div>
                        <div class="card-footer">
                            <a target="_blank" href="{{$item->file}}" class="btn btn-primary btn-sm">Mở file</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

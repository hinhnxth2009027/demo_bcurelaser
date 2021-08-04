@extends('layouts.master')
@section('extraCss')
    <style>
        html {
            background: no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .background-image {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            height: 300px;
            transition: 0.5s;
            cursor: pointer;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);;
        }

        .background-image:hover {
            opacity: 0.5;
            animation-duration: 0.5s;
            animation-name: example;
        }

        .background-image::after {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 5;
            content: '';
        }

    </style>
@endsection
@section('main')
    <article class="container">
        <header class="header-shadow" style="padding: 50px">
            <h1 style="text-transform: uppercase;text-align: center">Các khu vực điều trị <br> dành cho các chỉ định y tế khác nhau*</h1>
        </header>
        <div class="content">
            <div class="container-fluid">
                <div class="row" style="padding: 20px">
                    @for($i = 0; $i < count($list);$i++)
                        <a href="{{route('treatment_detail',$list[$i]->slug)}}" class="col-md-4 mt-3">
                            <div class="col-md-12 background-image"
                                 style="background-image: url('{{$list[$i]->thumbnail}}');">
                                <div style="position: absolute;left: 20px;bottom: 15px;z-index: 6">
                                    <h5 class="text-light">{{$list[$i]->title}}</h5>
                                    <button class="btn btn-primary" style="font-size: 12px">Xem thêm</button>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    </article>
@endsection

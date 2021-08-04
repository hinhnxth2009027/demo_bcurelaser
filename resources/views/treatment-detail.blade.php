@extends('layouts.master')
@section('title', $detail->title)
@section('extraCss')
    <style>
        ol {
            padding-left: 50px !important;
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
            animation-duration: 0.6s;
            opacity: 0.5;
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
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2></h2>
                <ol>
                    <li><a href="{{route('index')}}">Trang chủ</a></li>
                    <li><a href="{{route('treatment')}}">Các khu vực trị liệu</a></li>
                    <li>{{$detail->title}}</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <div class="container py-4">
        <div class="row" style="position: relative">
            <div class="col-lg-8">
                <h3>{{$detail->title}}</h3>
                <img class="pt-3" style="object-fit: cover" src="{{$detail->thumbnail}}" alt="" width="100%"
                     height="400px">
                <div class="content pt-3">
                    {!! html_entity_decode($detail->content) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div id="product-sticky" class="content sticky-lg-top d-none d-lg-block" style="padding-top: 100px; z-index: 996;">
                    <div style="list-style: none">
                        <h4>Sản phẩm</h4>
                        @for($i = 0;$i < 2;$i++)
                            <a href="{{route('product_detail',$products[$i]->slug)}}">
                                <li class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6"><img style="object-fit: cover"
                                                                   src="{{$products[$i]->thumbnail}}"
                                                                   alt="" class="img-fluid"></div>
                                        <div class="col-md-6">
                                            <h6>{{$products[$i]->name}}</h6>
                                            <button class="btn btn-primary btn-sm m-3">Xem thêm</button>
                                        </div>
                                    </div>
                                </li>
                            </a>
                            <hr>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <h3 class="text-uppercase">Quy trình điều trị</h3>
            <div>
                {!! html_entity_decode($detail->protocol) !!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="swiper-container" id="treatment-protocol-slide">
                        <div class="swiper-wrapper">
                            @for($i = 0 ; $i < sizeof(json_decode($detail->protocol_images,true)); $i++)
                                <div class="swiper-slide" data-caption="{{json_decode($detail->protocol_images_caption,true)[$i]}}">
                                    <img src="{{json_decode($detail->protocol_images,true)[$i]}}" class="img-fluid" alt="">
                                </div>
                            @endfor
                        </div>
                        <div class="swiper-caption">{{json_decode($detail->protocol_images_caption,true)[0]}}</div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>

                @if($detail->protocol_video != "")
                    <div class="col-md-6 mt-3 mt-md-0">
                        <iframe width="560" height="315" class="w-100"
                                src="{{'https://www.youtube.com/embed/'.explode("/",$detail->protocol_video)[3]}}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <p style="margin-top: 2px">{{$detail->protocol_video_caption}}</p>
                    </div>
                @endif
            </div>

            <div class="row mt-4">
                <h3 class="text-uppercase">Đề xuất cho bạn</h3>
                @for($i = 0; $i < 3;$i++)
                    <a href="{{route('treatment_detail',$treatments[$i]->slug)}}" class="col-md-4 mt-3">
                        <div class="col-md-12 background-image"
                             style="background-image: url('{{$treatments[$i]->thumbnail}}');">
                            <div style="position: absolute;left: 20px;bottom: 15px;z-index: 6">
                                <h5 class="text-light">{{$treatments[$i]->title}}</h5>
                                <button class="btn btn-primary" style="font-size: 12px">Xem thêm</button>
                            </div>

                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
@endsection

@section('extraJs')
    <script>
        let mySwiper = new Swiper('#treatment-protocol-slide', {
            centeredSlides: true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        mySwiper.on('slideChange', function () {
            $('.swiper-caption').html($('div.swiper-slide-active').attr('data-caption'));
        });
    </script>
@endsection

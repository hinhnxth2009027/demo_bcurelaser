@extends('layouts.master')
@section('title', 'Sản phẩm')
@section('extraCss')
    <style>
        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #f68e1e;
            font-weight: bold;
        }

        .nav-pills .nav-link, .nav-link:focus, .nav-link:hover {
            color: #212529;
        }

        .product_thumbnail {
            width: 90%;
            height: 100%;
            object-fit: cover;
            transition: 0.4s;
        }

        .product_thumbnail:hover {
            width: 100%;
            height: 110%;
        }

        ::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .content_text {
            height: 300px;
            overflow: scroll;
            text-overflow: ellipsis;
        }

        .product_item {
            box-shadow: #c8c8c8 0 0 10px;
            height: 100%;
        }

        .btn_container > a {
            height: 65px;
            background: #f68e1e;
            width: 170px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        @media only screen and (min-width: 992px) {
            .container_thumbnail {
                height: 350px;
                overflow: hidden;
                align-items: center;
            }

            .container_item {
                height: 910px
            }

            .product_item {
                padding: 40px;
            }
        }

        @media only screen and (min-width: 768px) {
            .container_thumbnail {
                height: 250px;
                overflow: hidden;
                align-items: center;
            }

            .container_item {
                height: 750px
            }

            .product_item {
                padding: 8px;
            }
        }

        @media only screen and (min-width: 500px) {
            .container_thumbnail {
                height: 350px;
                overflow: hidden;
                align-items: center;
            }

            .container_item {
                height: 910px
            }

            .product_item {
                padding: 40px;
            }
        }

        @media only screen and (max-width: 499px) {
            .container_thumbnail {
                height: 280px;
                overflow: hidden;
                align-items: center;
            }

            .container_item {
                height: 780px
            }

            .product_item {
                padding: 10px;
            }
        }
    </style>
@endsection
@section('main')
    <section id="product-page-1" style="height: 270px;background-image:url({{url('images/header_product.jpg')}});">
        <div class="ast-container-inner">
            <h1></h1>
            <h3></h3>
            <div class="mobile-hide"></div>
        </div>
    </section>
    <section id="products">
        <div class="container">
            <div class="row">
                @for($i = 0 ; $i < sizeof($products) ; $i++)
                    <div class="col-md-6 p-3 container_item">
                        <div class="product_item">
                            <div class="container_thumbnail pl-5 pr-5 d-flex justify-content-center">
                                <img class="product_thumbnail" src="{{$products[$i]->thumbnail}}" alt="">
                            </div>
                            <div class="content_container pt-3">
                                <h3 class="title">{{$products[$i]->name}}</h3>
                                <div class="content_text"
                                     style="border-bottom: #b4b4b4 1px solid;padding-bottom: 0!important;">
                                    {!! html_entity_decode($products[$i]->description) !!}
                                </div>
                            </div>
                            <div class="btn_container pt-3">
                                <a href="{{route('product_detail',$products[$i]->slug)}}">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
@section('extraJs')
@endsection

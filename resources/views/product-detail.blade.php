@extends('layouts.master')
@section('title', $detail->name)
@section('extraCss')
    <style>
        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #f68e1e;
            font-weight: bold;
        }

        .nav-pills .nav-link, .nav-link:focus, .nav-link:hover {
            color: #212529;
        }
    </style>
@endsection

@section('main')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{$detail->name}}</h2>
                <ol>
                    <li><a href="{{route('index')}}">Trang chủ</a></li>
                    <li>{{$detail->name}}</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Product Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper-container">
                        <div class="swiper-wrapper align-items-center">
                            @foreach(json_decode($detail->images,true) as $img)
                                <div class="swiper-slide">
                                    <img src="{{$img}}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2>{{$detail->name}}</h2>
                    <p>
                        {!! html_entity_decode($detail->description) !!}
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Product Details Section -->

    <!-- ======= Pills Section ======= -->
    <section id="product-details-pills">
        <div class="container">
            <div class="d-none d-xl-block">
                <ul class="nav nav-pills nav-fill mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1"
                                type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <div>Chia sẻ từ khách hàng</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <div>Câu hỏi thường gặp</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <div>Cách dùng</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4"
                                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <div>Thông số kỹ thuật</div>
                        </button>
                    </li>
                    <div class="yellow-underline"></div>
                </ul>
                <div class="tab-content text-center" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                        @include('common.testimonials-video-list')
                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                        @include('common.faq')
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                        @include('common.how-to-use')
                    </div>
                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                        @include('common.product-specifications')
                    </div>
                </div>
            </div>
            <div class="d-block d-xl-none">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Chia sẻ từ khách hàng
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('common.testimonials-video-list')
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Câu hỏi thường gặp
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('common.faq')
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Cách dùng
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('common.how-to-use')
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Thông số kỹ thuật
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                @include('common.product-specifications')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('common.testimonials-text-slide')
@endsection

@section('extraJs')
    <script>
        const swiper = new Swiper('.swiper-container', {
            autoHeight: true,
        });
    </script>
@endsection

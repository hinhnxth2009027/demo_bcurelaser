@extends('layouts.master')

@section('title')
    Homepage
@endsection

@section('banner')

    <section id="hero" class="d-flex align-items-center">
        <div id="carouselExampleCaptions" class="carousel carousel-fade slide" data-bs-ride="carousel"
             style="width: 100%">
            <div class="carousel-inner" style="width: 100%">
                @for($i = 0 ; $i < sizeof($banners) ; $i++)
                    <div class="carousel-item {{$i == 0 ? 'active' : ''}}" style="width: 100%">
                        <picture style="width: 100%">
                            <source media="(max-width: 576px)"
                                    srcset="images/carousel/Copy-of-b-cure-laser-pro-fixed.png"/>
                            <img style="width: 100%" src="{{$banners[$i]->thumbnail}}" class="d-block w-100" alt="..."/>
                        </picture>
                        <div class="carousel-caption">
                            @if($banners[$i]->video != null)
                                <button slot="{{$banners[$i]->video}}" data-toggle="modal"
                                        data-target="#exampleModalCenter"
                                        class="btn btn-primary btn-lg px-sm-5 open_video">WATCH
                                </button>
                            @endif
                            <a href="{{$banners[$i]->order_target_url}}"
                               class="btn btn-primary btn-lg px-sm-5">ORDER</a>
                        </div>
                    </div>
                @endfor
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                <button type="button" class="close btn btn-primary" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe id="preview_video" width="466" height="300" src="" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button style="top: 54px!important;" class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button style="top: 54px!important;" class="carousel-control-next" type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
@endsection

@section('main')




    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">

        <div class="container" data-aos="fade-up">



            <div class="d-lg-flex justify-content-around">
                <div class="align-items-center mb-5 mb-lg-0 justify-content-center justify-content-lg-start mx-lg-5">
                    <h2 class="title px-4 px-lg-0" style="font-size: 1.875rem;">
                        <span class="text-primary">ESSENTIAL</span><br>
                        IN EVERY HOME
                    </h2>
                </div>

                <div class="d-flex justify-content-around mx-lg-5">
                    <div class="d-md-flex align-items-center mb-5 mb-lg-0 mx-3">
                        <div class="icon mb-0 mx-2 text-center"><i class="bx bx-file"></i></div>
                        <span class="description">Easy and safe</span>
                    </div>

                    <div class="d-md-flex align-items-center mb-5 mb-lg-0 mx-3">
                        <div class="icon mb-0 mx-2 text-center"><i class="bx bx-tachometer"></i></div>
                        <span class="description">6 min. twice daily</span>
                    </div>

                    <div class="d-md-flex align-items-center mb-5 mb-lg-0 mx-3">
                        <div class="icon mb-0 mx-2 text-center"><i class="bx bx-world"></i></div>
                        <span class="description">Proven efficacy</span>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>
                    <div class="d-inline d-lg-block">Cùng tìm hiểu làm thế nào <span>B-Cure Laser</span></div>
                    <div class="d-inline d-lg-block">có thể giúp bạn <span>giảm bớt nỗi đau ngay tại nhà</span></div>
                </h3>
            </div>

            <div class="row gx-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    {{--                    <a href="javascript:void(0)" class="js-video-button" data-video-id='BcXqKG41l2w'>--}}
                    {{--                        <img src="{{url('images/4O5A5913.jpg')}}" class="img-fluid" alt="" id="trigger">--}}
                    {{--                    </a>--}}
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/BcXqKG41l2w"
                            title="YouTube video player" frameborder="0" class="w-100"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                     data-aos-delay="100">
                    <p>
                        <b>CÔNG NGHỆ TIÊN TIẾN:</b>
                        B-Cure Laser dựa trên công nghệ LLLT (Liệu pháp laser cấp thấp), điều trị cơn đau và có thể điều
                        trị hiệu quả nguồn gốc của nó.
                    </p>
                    <p>
                        <b>ĐÃ ĐƯỢC CHỨNG MINH LÂM SÀNG VÀ VÔ CÙNG AN TOÀN:</b>
                        Hiệu quả và an toàn của B-Cure Laser đã được chứng minh trong một số nghiên cứu double-blind ,
                        tất cả đều xác nhận giá trị lâm sàng của nó.
                    </p>
                    <p>
                        <b>THÂN THIỆN VỚI NGƯỜI DÙNG:</b>
                        Nhờ hình dạng nhỏ gọn, nhẹ, bạn có thể tự điều trị cho mình mọi lúc mọi nơi!
                    </p>
                    <p>
                        <b>MỘT THIẾT BỊ Y TẾ SỬ DỤNG TẠI NHÀ CUNG CẤP GIẢI PHÁP CHO CẢ GIA ĐÌNH!</b>
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- ======= Benefits Section ======= -->
    <section id="benefits" class="bg-dark text-light">
        <div class="container" data-aos="fade-up">
            <div class="section-title mb-4">
                <h3>
                    LỢI ÍCH CỦA LIỆU PHÁP LASER B-CURE LÀ GÌ?
                </h3>
            </div>
            <div class="d-none d-xl-block">
                <ul class="nav nav-pills nav-fill mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1"
                                type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <img src="{{url('images/benefits/1-proven-efficacy.png')}}" alt="">
                            <div>Hiệu quả</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2"
                                type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <img src="{{url('images/benefits/2-safe.png')}}" alt="">
                            <div>An toàn</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3"
                                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <img src="{{url('images/benefits/3-easy-to-use.png')}}" alt="">
                            <div>Dễ dàng sử dụng</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4"
                                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <img src="{{url('images/benefits/4-no-known-side-effects.png')}}" alt="">
                            <div>Không tác dụng phụ</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5"
                                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <img src="{{url('images/benefits/5-cost-effective.png')}}" alt="">
                            <div>Tiết kiệm chi phí</div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-6-tab" data-bs-toggle="pill" data-bs-target="#pills-6"
                                type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <img src="{{url('images/benefits/6-non-invasive.png')}}" alt="">
                            <div>Không xâm lấn</div>
                        </button>
                    </li>
                    <div class="yellow-underline"></div>
                </ul>
                <div class="tab-content text-center" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                        <h4 class="title text-primary">Điều trị hiệu quả và nhanh chóng</h4>
                        Hiệu quả lâm sàng đã được chứng minh để điều trị đau, điều kiện chỉnh hình, chấn thương thể thao
                        và
                        vết thương.
                    </div>
                    <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                        <h4 class="title text-primary">An toàn sử dụng cho mọi lứa tuổi</h4>
                        Có thể sử dụng cho tất cả các thành viên trong gia đình ở mọi lứa tuổi, mà không cần kính bảo
                        hộ.
                    </div>
                    <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                        <h4 class="title text-primary">Dễ dàng sử dụng</h4>
                        Nhờ hình dạng nhỏ gọn, nhẹ, thiết bị B-CURE LASER cho phép bạn điều trị cơn đau một cách thoải
                        mái
                        ngay tại nhà.
                    </div>
                    <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                        <h4 class="title text-primary">Không có tác dụng phụ được biết đến</h4>
                        Kết quả đem lại lâu dài, chỉ vài phút sử dụng với hai lần một ngày.
                    </div>
                    <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                        <h4 class="title text-primary">Tiết kiệm chi phí</h4>
                        Một thiết bị y tế giúp cho cả gia đình.
                    </div>
                    <div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="pills-6-tab">
                        <h4 class="title text-primary">Không xâm lấn</h4>
                        Việc điều trị sử dụng liệu pháp laser cường độ thấp để kích thích chữa bệnh. Không có bất bì sự
                        cắt,
                        nối hoặc xuyên qua cơ thể.
                    </div>
                </div>
            </div>
            <div class="d-block d-xl-none">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Hiệu quả
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Hiệu quả lâm sàng đã được chứng minh để điều trị đau, điều kiện chỉnh hình, chấn thương
                                thể thao và
                                vết thương.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                An toàn
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Có thể sử dụng cho tất cả các thành viên trong gia đình ở mọi lứa tuổi, mà không cần
                                kính bảo hộ.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Dễ dàng sử dụng
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Nhờ hình dạng nhỏ gọn, nhẹ, thiết bị B-CURE LASER cho phép bạn điều trị cơn đau một cách
                                thoải mái
                                ngay tại nhà.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Không tác dụng phụ
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Kết quả đem lại lâu dài, chỉ vài phút sử dụng với hai lần một ngày.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Tiết kiệm chi phí
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Một thiết bị y tế giúp cho cả gia đình.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Không xâm lấn
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Việc điều trị sử dụng liệu pháp laser cường độ thấp để kích thích chữa bệnh. Không có
                                bất bì sự cắt,
                                nối hoặc xuyên qua cơ thể.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Products Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>Hãy chọn sản phẩm phù hợp với bạn</h3>
            </div>

            @include('common.featured_product')

        </div>
    </section>

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">
            <div class="wrapper">
                <h2>
                    Hơn 250.000 thiết bị
                    <div id="sold-text">ĐÃ BÁN</div>
                </h2>
            </div>
        </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    @include('common.testimonials-text-slide')

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box py-5 text-start">
                        <img style="width: 100px;height: 100px;object-fit: cover;border-radius: 50%"
                             src="{{url('images/model.png')}}" alt="" class="mb-3">
                        <p>"B-Cure Laser có hiệu quả cao trong việc làm lành các mô bị tổn thương và giúp giảm đau tích
                            cực cho bệnh nhân. Thứ nhất, đây là công nghệ rất hữu ích và bệnh nhân đau mạn tính có thể
                            sử dụng tại nhà. Thứ hai, khả năng điều trị đạt hiệu quả cao và vô cùng an toàn."</p>
                        <div class="mt-3"><b>Dr Grageriro,</b></div>
                        <p>Trưởng phòng y học thể thao Olympic Rio 2016 Thế vận hội Mùa hè </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box py-5 text-start">
                        <img style="width: 100px;height: 100px;object-fit: cover;border-radius: 50%"
                             src="{{url('images/model1.png')}}" alt="" class="mb-3">
                        <p>"B-Cure Laser là một thiết bị khuyên dùng dành cho nha sĩ để điều trị đau do loạn năng khớp
                            thái dương hàm (TMJ). Bởi vì nó tránh cho bệnh nhân sự bất tiện khi phải điều trị thường
                            xuyên, hàng ngày và mỗi ngày tại phòng khám. Thay vào đó, bệnh nhân có thể điều trị thoải
                            mái tại nhà. Bệnh nhân hài lòng vì họ nhận được kết quả nhanh chóng."</p>
                        <div class="mt-3"><b>Giáo sư Carlo Fornaini,</b></div>
                        <p>Đại học Parma, Ý</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box py-5 text-start">
                        <img style="width: 100px;height: 100px;object-fit: cover;border-radius: 50%"
                             src="{{url('images/logo_usoc.png')}}" alt="" class="mb-3">
                        <p>"Hiệu quả đặc biệt của B-Cure Laser đã được chứng minh bằng các thử nghiệm lâm sàng và tôi
                            khuyên bạn nên nó như một phần của các giao thức điều trị để quản lý các cơ và chấn thương
                            thể thao."</p>
                        <div class="mt-3"><b>Richard Reff, MD.,</b></div>
                        <p>Hội đồng quản trị của Hoa Kỳ, Ủy ban Olympic (USOC)</p>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/slJtdWMusI0"
                            class="w-100"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <p>Những chia sẻ trong hơn 250,000 người bệnh xương khớp mạn tính điều trị thành công với B-cure
                        Laser</p>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= About Section ======= -->
    <section id="trials" class="">
        <div class="container" data-aos="fade-up">

            <div class="row gx-5">
                <div class="col-lg-1"></div>
                <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <img src="images/clinical_trials.jpg" class="img-fluid mh-100" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="section-title text-start">
                        <h3>
                            THỬ NGHIỆM B-CURE LASER
                        </h3>
                    </div>
                    <p>
                        Hiệu quả của B-Cure Laser để điều trị đau và vết thương đã được chứng minh trong 5 thử nghiệm
                        lâm sàng mù đôi. 5 thử nghiệm lâm sàng khác đang được xử lý.
                    </p>
                    <ul class="list-group list-group-flush trial-list">
                        <li class="list-group-item d-flex bg-transparent">
                            <img src="images/list-img/list_img_1.png" alt="">
                            <div>
                                <span class="text-primary">Đau liên quan đến khớp (TMJ)</span><br>
                                <span class="small">Đại học Sapienza, Ý</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex bg-transparent">
                            <img src="images/list-img/list_img_2.png" alt="">
                            <div>
                                <span class="text-primary">Bệnh viện Laminectomy</span><br>
                                <span class="small">Sao Paulo, Brazil</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex bg-transparent">
                            <img src="images/list-img/list_img_3.png" alt="">
                            <div>
                                <span class="text-primary">Đại học Implantation</span><br>
                                <span class="small">PERM, Nga</span>
                            </div>
                        </li>
                        <li class="list-group-item d-flex bg-transparent">
                            <img src="images/list-img/list_img_4.png" alt="">
                            <div>
                                <span class="text-primary">Đau liên quan đến khớp (TMJ)</span><br>
                                <span class="small">Đại học Parma, Ý</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
            </div>

        </div>
    </section>

    <!-- HUMAN BODY SECTION -->
    <section class="bg-dark text-light">
        <div class="container">
            <div id="home-s7" class="section-bc-08">
                <div class="wrapper">

                    <div class="section-title">
                        <h3>
                            A STATE-OF-THE-ART PAIN MANAGEMENT THERAPY
                        </h3>
                        <p>Laser B-Cure là một giải pháp hiệu quả và giá cả hợp lý để điều trị một loạt các tình trạng
                            đau đớn phổ biến.*</p>
                    </div>
                    <div class="human-model row">
                        <div class="pains-list-section col-12 col-md-3">
                            <h4 class="title-h4">Conditions</h4>


                            <div id="wpv-view-layout-135"
                                 class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-135"
                                 data-viewnumber="135"
                                 data-pagination="{&quot;id&quot;:&quot;135&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;disabled&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:500,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;enabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:1,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://www.bcurelaser.co.uk/wp-content/plugins/wp-views/embedded/res/img/ajax-loader.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;disabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:0,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=135&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}"
                                 data-permalink="/?wpv_view_count=135">


                                <p class="first-option mobile-show d-md-none">Select Condition</p>
                                <ul class="pains-list">

                                    <li class="pain Front mouth" data-view="Front" data-dots=mouth
                                        data-content='Up to five percent of the population will suffer from pain in the jaw joint during their lifetime.

The Temporo-Mandibular joints connect the jawbone (the mandible) and the skull (the temporal bone). The joint enables opening and closing of the jaw which seems so trivial yet is vitally important for the basic functions of speech and eating.'
                                        data-post-url='https://www.bcurelaser.co.uk/problem/temporo-mandibular-joint-disorder/'>
                                        Temporo-mandibular joint disorder
                                    </li>

                                    <li class="pain Both neck" data-view="Both" data-dots=neck data-content='Neck pain is a very common problem, and in the past few years, the use of low-level laser has become a popular and effective treatment worldwide.
Approximately 70% of the population experiences neck pain at some point during their lifetime. Constant pressure on the neck vertebrae as a result of lengthy driving, improper posture while sitting at the computer, sitting underneath the air conditioner, lifting heavy loads and many other factors can cause neck pain, migraines, and project pain to the shoulders, arms, and forearms.'
                                        data-post-url='https://www.bcurelaser.co.uk/problem/neck-pain/'>Neck pain
                                    </li>

                                    <li class="pain Back upper-back" data-view="Back" data-dots=upper-back
                                        data-content='The thoracic spine is also referred to as the upper or middle back.   It is designed for stability to anchor the rib cage and protect vital internal organs within the chest. Pain in the upper back is usually a result of poor posture, overuse of muscles, or injury.'
                                        data-post-url='https://www.bcurelaser.co.uk/problem/upper-back-pain/'>Upper back
                                        pain
                                    </li>

                                    <li class="pain Back lower-back" data-view="Back" data-dots=lower-back
                                        data-content='Lower back pain is one of the main causes of difficulty in everyday, routine functions.

Pain in the lower back is the most common form of work-related disability and the main reason for absence from work.

8 out of 10 people in the United States endure at least one attack of lower back pain in their lifetime.'
                                        data-post-url='https://www.bcurelaser.co.uk/problem/lower-back-pain/'>Lower back
                                        pain
                                    </li>

                                    <li class="pain Both wrist" data-view="Both" data-dots=wrist data-content='If you experience numbness, tingling or weakness in your hand, consider asking your doctor to examine you for Carpal Tunnel syndrome.

This structure, located in the wrist, is the source of a syndrome that affects about 2% of the population.

This condition occurs when one of the major nerves to the hand, the Median nerve, is compressed as it travels through the wrist. This happens when the Carpal Tunnel in your wrist is inflamed.'
                                        data-post-url='https://www.bcurelaser.co.uk/problem/carpal-tunnel-syndrome/'>
                                        Carpal tunnel syndrome
                                    </li>

                                    <li class="pain Both knee" data-view="Both" data-dots=knee data-content='Knee pains are one of the most common types of pain, in fact, 80 percent of those aged 45 and over suffer knee pain.

Not only the elderly suffer from knee pain, it can appear at any age.

Knee pain can appear as the result of injury, worn down cartilage, and from other medical conditions such as mechanical problems, arthritis and infections.'
                                        data-post-url='https://www.bcurelaser.co.uk/problem/knee-pain/'>Knee pain
                                    </li>

                                    <li class="pain Both all" data-view="Both" data-dots=all
                                        data-content='A skin wound that does not heal, heals slowly or heal but tends to recur, is known as a chronic wound. Some of the many cases of chronic (ongoing) wounds can include trauma, burns, skin cancers, infections or underlying medical conditions such as diabetes. Persistent wounds need special care.'
                                        data-post-url='https://www.bcurelaser.co.uk/problem/wounds/'>Wounds
                                    </li>

                                    <li class="pain Both all" data-view="Both" data-dots=all
                                        data-content='According to the World Health Organization, Fibromyalgia is defined as a disease or syndrome from the group of rheumatic illnesses. In other words, illnesses related to joints, soft tissues and connective tissues.'
                                        data-post-url='https://www.bcurelaser.co.uk/problem/fibromyalgia/'>Fibromyalgia
                                    </li>

                                </ul>


                            </div>

                        </div>
                        <div class="center-view-mode col-12 col-md-6">
                            <div class="human-body">
                                <div class="human-body-inner">
                                    <div class="front-view">
                                        <img loading="lazy"
                                             src="https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/Front-view-@2x.png"
                                             width="692" height="1354" class="size-full"/>
                                        <div class="dots-front">
                                            <div class="mouth"></div>
                                            <div class="face"></div>
                                            <div class="shoulder dot-1"></div>
                                            <div class="shoulder dot-2"></div>
                                            <div class="shoulder dot-3"></div>
                                            <div class="burns"></div>
                                            <div class="elbow dot-1"></div>
                                            <div class="wrist dot-1"></div>
                                            <div class="wrist dot-2"></div>
                                            <div class="wrist dot-5"></div>
                                            <div class="hand dot-1"></div>
                                            <div class="hand dot-2"></div>
                                            <div class="hand dot-3"></div>
                                            <div class="hand dot-4"></div>
                                            <div class="hand dot-5"></div>
                                            <div class="neck dot-0"></div>
                                            <div class="hip dot-0"></div>
                                            <div class="knee dot-0"></div>
                                            <div class="ankle dot-0"></div>
                                            <div class="ankle dot-1"></div>
                                            <div class="ankle dot-2"></div>
                                            <div class="foot dot-0"></div>
                                            <div class="foot dot-1"></div>
                                        </div>
                                    </div>
                                    <div class="back-view">
                                        <img loading="lazy"
                                             src="https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/Back-view-@2x.png"
                                             width="716" height="1356" class="size-full"/>
                                        <div class="dots-back">
                                            <div class="shoulder dot-4"></div>
                                            <div class="elbow dot-2"></div>
                                            <div class="elbow dot-3"></div>
                                            <div class="wrist dot-3"></div>
                                            <div class="wrist dot-4"></div>
                                            <div class="neck dot-1"></div>
                                            <div class="neck dot-2"></div>
                                            <div class="neck dot-3"></div>
                                            <div class="neck dot-4"></div>
                                            <div class="neck dot-5"></div>
                                            <div class="knee dot-1"></div>
                                            <div class="knee dot-2"></div>
                                            <div class="knee dot-3"></div>
                                            <div class="knee dot-4"></div>
                                            <div class="knee dot-5"></div>
                                            <div class="knee dot-6"></div>
                                            <div class="ankle dot-3"></div>
                                            <div class="ankle dot-4"></div>
                                            <div class="ankle dot-5"></div>
                                            <div class="ankle dot-6"></div>
                                            <div class="ankle dot-7"></div>
                                            <div class="ankle dot-8"></div>
                                            <div class="ankle dot-9"></div>
                                            <div class="upper-back dot-0"></div>
                                            <div class="upper-back dot-1"></div>
                                            <div class="upper-back dot-2"></div>
                                            <div class="upper-back dot-3"></div>
                                            <div class="upper-back dot-4"></div>
                                            <div class="upper-back dot-5"></div>
                                            <div class="upper-back dot-6"></div>
                                            <div class="lower-back dot-0"></div>
                                            <div class="lower-back dot-1"></div>
                                            <div class="lower-back dot-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="change-view-btn">
                                <div class="img-change-view"><img loading="lazy"
                                                                  src="https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/Flip.png"
                                                                  width="73" height="43" class="size-full normal"/><img
                                        loading="lazy"
                                        src="https://www.bcurelaser.co.uk/wp-content/uploads/2018/12/Flip_huver.png"
                                        width="76" height="45" class="size-full hover-img"/></div>
                                <h3 class="front">Front view</h3>
                                <h3 class="back">Back view</h3>
                            </div>

                        </div>
                        <div class="pains-areas col-12 col-md-3">


                            <div id="wpv-view-layout-140"
                                 class="js-wpv-view-layout js-wpv-layout-responsive js-wpv-view-layout-140"
                                 data-viewnumber="140"
                                 data-pagination="{&quot;id&quot;:&quot;140&quot;,&quot;query&quot;:&quot;normal&quot;,&quot;type&quot;:&quot;disabled&quot;,&quot;effect&quot;:&quot;fade&quot;,&quot;duration&quot;:500,&quot;speed&quot;:5,&quot;pause_on_hover&quot;:&quot;disabled&quot;,&quot;stop_rollover&quot;:&quot;false&quot;,&quot;cache_pages&quot;:&quot;enabled&quot;,&quot;preload_images&quot;:&quot;enabled&quot;,&quot;preload_pages&quot;:&quot;enabled&quot;,&quot;preload_reach&quot;:1,&quot;spinner&quot;:&quot;builtin&quot;,&quot;spinner_image&quot;:&quot;https://www.bcurelaser.co.uk/wp-content/plugins/wp-views/embedded/res/img/ajax-loader.gif&quot;,&quot;callback_next&quot;:&quot;&quot;,&quot;manage_history&quot;:&quot;enabled&quot;,&quot;has_controls_in_form&quot;:&quot;disabled&quot;,&quot;infinite_tolerance&quot;:&quot;0&quot;,&quot;max_pages&quot;:1,&quot;page&quot;:1,&quot;base_permalink&quot;:&quot;/?wpv_view_count=140&amp;wpv_paged=WPV_PAGE_NUM&quot;,&quot;loop&quot;:{&quot;type&quot;:&quot;&quot;,&quot;name&quot;:&quot;&quot;,&quot;data&quot;:[],&quot;id&quot;:0}}"
                                 data-permalink="/?wpv_view_count=140">


                                <p class="first-option-area">Part of the body affected</p>
                                <ul class="pain-areas-list">
                                    <li class="all-text" style="display: none;">All body parts</li>

                                    <li class="mouth" data-area="mouth">Jaw, mouth</li>

                                    <li class="face" data-area="face">Face</li>

                                    <li class="neck" data-area="neck">Neck</li>

                                    <li class="shoulder" data-area="shoulder">Shoulder</li>

                                    <li class="upper-back" data-area="upper-back">Upper back</li>

                                    <li class="lower-back" data-area="lower-back">Lower back</li>

                                    <li class="elbow" data-area="elbow">Elbow</li>

                                    <li class="wrist" data-area="wrist">Wrist</li>

                                    <li class="hand" data-area="hand">Hand</li>

                                    <li class="hip" data-area="hip">Hip</li>

                                    <li class="knee" data-area="knee">Knee</li>

                                    <li class="foot" data-area="foot">Foot</li>

                                    <li class="ankle" data-area="ankle">Ankle</li>

                                    <li class="all" data-area="all">All the body</li>

                                </ul>


                            </div>

                            <div class="selected-dot-text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('common.contact')

@endsection

@section('extraJs')
    <script>
        $(".js-video-button").modalVideo();
    </script>
    <script>
        //-----------------------------------------
        // View slug: human-pains - start
        //-----------------------------------------
        jQuery(function ($) {
            $(".first-option.mobile-show").click(function () {
                $(".pains-list").slideToggle("slow");
            });
            if ($(window).width() < 769) {
                $(".pains-list li").click(function () {
                    $(".pains-list").hide();
                    $(".pain-areas-list").show();
                });
                $("p.first-option-area").click(function () {
                    $(".pain-areas-list").hide();
                });
            }
        });
        //-----------------------------------------
        // View slug: human-pains - end
        //-----------------------------------------
    </script>

    <script type="text/javascript">
        //-----------------------------------------
        // Content Template: human-model - start
        //-----------------------------------------
        jQuery(function ($) {
            $("li.pain").click(function () {
                $("li.pain").removeClass("active-pain");
                $(this).addClass("active-pain");

                var Dotcl = $(this).attr("data-dots");
                let selectedDotPostText = $(this).attr('data-content');
                let selectedDotPostUrl = $(this).attr('data-post-url');
                let selectedDotPostUrlCleared = selectedDotPostUrl.replace(/\/problem/i, '');
                let buttonReadMore = `<a class="human-model-readmore" href="${selectedDotPostUrlCleared}">Read more</a>`;
                if (selectedDotPostText === '') {
                    buttonReadMore = '';
                }
                $('.selected-dot-text').html(`${selectedDotPostText} ${buttonReadMore}`); // <div class="selected-dot-text"></div>
                if ($(this).hasClass("all")) {
                    // $(".pain-areas-list li").css("display" , "none");
                    /*$(".dots-front div, .dots-back div").removeClass("shine");
                    $(".dots-front div, .dots-back div").addClass("shine-all");
                    $(".pain-areas-list li").addClass("whole");
                    $(".pain-areas-list li").removeClass("shine").hide();
                    $(".pain-areas-list .whole").show("slow");*/
                    $(".pain-areas-list li, div").removeClass("shine , shine-all");
                    $(".pain-areas-list li").hide();
                    $(".all-text").show();
                }
                if ($(".pain-areas-list li, div").hasClass(Dotcl) && !$(this).hasClass("all")) {
                    $(".all-text").hide();
                    $(".pain-areas-list li, div").removeClass("shine , shine-all");
                    $(".pain-areas-list li." + Dotcl + ", div." + Dotcl).addClass("shine");
                    $(".pain-areas-list li").removeClass("whole");
                    $(".pain-areas-list li").hide("slow");
                    $(".pain-areas-list li.shine").show("slow");
                }


                if ($(this).hasClass("Back")) {
                    $(".human-body").addClass("active");
                } else {
                    $(".human-body").removeClass("active");
                }
            });
            $(".img-change-view").click(function () {
                $(".human-body").toggleClass("active");
            });

            function findBodyPartName(element) {
                if (!element) {
                    return false;
                }

                let bodyPartName = element.attr('class');
                bodyPartName = bodyPartName.split(' ');
                return bodyPartName[0];
            }

            function shineBodyPart(className) {
                $('.human-body .' + className).addClass('shine');
            }

            function unShineBodyPart(className) {
                $('.human-body .' + className).removeClass('shine');
            }

            function unshineAllBodyParts() {
                $(".dots-front div, .dots-back div").removeClass('sticked');
                $(".dots-front div, .dots-back div").removeClass('shine');
            }

            function findMenuByBodyPartName(bodyPartName) {
                let menuItem = $('.pains-list li[data-dots="' + bodyPartName + '"]');
                return menuItem;
            }

            function isUsedBodyPart(element) {
                let bodyPartName = findBodyPartName(element);
                let result = findMenuByBodyPartName(bodyPartName).length;

                return result;
            }

            $(".dots-front div, .dots-back div").mouseenter(function () {
                let bodyPartName = findBodyPartName($(this));
                let useInMenu = isUsedBodyPart($(this));
                if (useInMenu) {
                    shineBodyPart(bodyPartName);
                }
            }).mouseleave(function () {
                let bodyPartName = findBodyPartName($(this));
                let isSticked = $(this).hasClass('sticked');
                if (!isSticked) {
                    unShineBodyPart(bodyPartName);
                }
            });

            $(".dots-front div, .dots-back div").on('click', function () {
                let useInMenu = isUsedBodyPart($(this));
                if (useInMenu) {
                    let bodyPartName = findBodyPartName($(this));
                    unshineAllBodyParts();
                    shineBodyPart(bodyPartName);
                    $('.human-body .' + bodyPartName).addClass('sticked');
                    $('.pains-list li[data-dots="' + bodyPartName + '"]')[0].click();
                }

            });

        });
        //-----------------------------------------
        // Content Template: human-model - end
        //-----------------------------------------

        $('.open_video').click(function () {
            var link = this.slot.split('/')
            $('#preview_video').attr('src', 'https://www.youtube.com/embed/' + link[3])
        })

        $('.close').click(function () {
            $('#preview_video').attr('src', '')
        })

        // $('.open_video').click(function () {
        //     var link = this.slot.split('/')
        //     $('#preview_video').attr('src', 'https://www.youtube.com/embed/' + link[3])
        // })
        //
        // $('.close').click(function () {
        //     $('#preview_video').attr('src', '')
        // })

    </script>
@endsection

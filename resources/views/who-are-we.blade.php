@extends('layouts.master')
@section('title', 'Chúng tôi là ai?')
@section('extraCss')
    <style>
        .header-img {
            background-image: url('https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/bg_about_01.jpg');
            background-repeat: no-repeat;
            background-position: 50% 0%;
            background-size: cover;
            padding: 50px 0 50px 0;
        }

        .content-header {
            background: rgba(255, 255, 255, 0.93);
            width: 31.5625vw;
            margin: 0 0 0 -2.70833vw;
            padding: 1.92708vw 1.30208vw 1.92708vw 2.70833vw;
            line-height: 1.45833vw;
            font-size: 1.14583vw;
        }

        .bottom-img {
            background-image: url('https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/bg_about_02.jpg');
            background-repeat: no-repeat;
            background-position: 50% 0%;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .content-bottom {
            background: rgba(243, 158, 55, 0.9);
            width: 33.33333vw;
            min-height: 40.52083vw;
            margin: 0;
            padding: 3.33333vw 6.77083vw 1.66666vw 2.8125vw;
            line-height: 1.66666vw;
            color: #fff;
            font-size: 1.14583vw;
        }

        #custom-row {
            height: 250px
        }

        @media only screen and (max-width: 991px) {
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }

            .header-img {
                background-image: url('https://www.bcurelaser.co.uk/wp-content/themes/astra-child/images/bg_about_01_mobile.jpg') !important;
                margin: 0;
                padding: 15.86666vw 0 14.66666vw 20.26666vw;
            }

            .content-header {
                width: auto;
                margin: 0;
                padding: 4.93333vw 2.66666vw 6.26666vw 6.93333vw;
                line-height: 3.73333vw;
                font-size: 3.2vw;
            }

            .bottom-img {
                background-image: url('https://www.bcurelaser.co.uk/wp-content/themes/astra-child/images/bg_about_02_mobile.jpg') !important;
                margin: 0 0 -13.06666vw 0;
                padding: 13.73333vw 7.86666vw 14.13333vw 6.8vw;
            }

            .content-bottom {
                width: auto;
                padding: 12.66666vw 13.33333vw 6.26666vw 8.4vw;
                line-height: 5.33333vw;
                font-size: 4vw;
            }

            #custom-row {
                height: 100%;
            }
        }
    </style>
@endsection
@section('main')
    <div>
        <div class="header-img">
            <div class="container">
                <div class="content-header">
                    <h1>Chúng tôi là ai?</h1>
                    <p>Good Energies Ltd là một
                        công ty đa quốc gia (thành
                        lập năm 2009). Các sản phẩm được thiết kế
                        để điều trị đau, sưng, điều
                        trị vết thương và viêm với
                        thiết bị không dây, gọn nhẹ. Công ty TNHH Đầu tư và Phát triển An Khang là đơn vị phân phối độc
                        quyền sản phẩm B-Cure Laser tại Việt Nam. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row my-4 m-lg-5">
                <div class="col-6">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/gTPbNzsUazY"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-6 mt-3 mt-lg-0">
                    <h4>Tiêu chuẩn chuyên nghiệp cao</h4>
                    <p id="custom-row">Công nghệ tiên tiến được hỗ trợ bởi các quy trình giám sát và kiểm tra nghiêm
                        ngặt; Công ty và
                        các sản phẩm của Công ty luôn đứng đầu trong thị trường thiết bị y tế gia đình.</p>
                </div>
            </div>
            <div class="row my-4 m-lg-5 flex-column-reverse flex-lg-row">
                <div class="col-6 mt-3 mt-lg-0">
                    <h4>Được các bác sĩ hàng đầu thế giới khuyên dùng</h4>
                    <p>Hơn 250.000 bệnh nhân ở các quốc gia trên toàn cầu, sử dụng các thiết bị B-Cure Laser để điều trị
                        giảm đau, giảm viêm, chấn thương thể thao và hỗ trợ phục hồi sau phẫu thuật và tổn thương. Ứng
                        dụng rộng rãi tại nhiều quốc gia trên Thế Giới như:
                        Anh, Mỹ, Canada, Phần Lan,
                        Na Uy, Brazil, Nga, Ý, Pháp,
                        Đức, Israel, … <br>
                        Mở rộng phạm vi điều trị của
                        Bác sĩ
                        <br>
                        Giáo sư, Bác sĩ Jean Jacque
                        Vatin, Chuyên khoa phục hồi
                        chức năng, Pháp. “Tôi đã điều
                        trị cho nhiều bệnh nhân của tôi
                        bằng B-cure Laser vì thiết bị
                        này không chỉ giảm đau, giảm
                        viêm mà còn thúc đẩy quá trình
                        tự phục hồi của các bệnh xương
                        khớp mạn tính ”</p>
                </div>
                <div class="col-6">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/khbhFk-vQio"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="bottom-img">
            <div class="container">
                <div class="content-bottom p-5">
                    <h1 class="text-uppercase mb-5">Tầm nhìn của chúng tôi</h1>
                    <p>Dẫn đầu thông qua việc phát triển và tiếp thị các sản phẩm trị liệu sáng tạo và tiên tiến, trong
                        các lĩnh vực phục hồi, giảm đau, chấn thương thương và da liễu.</p>
                    <p>
                        Chúng tôi cố gắng cải thiện chất lượng cuộc sống của bệnh nhân bằng cách rút ngắn quá trình chữa
                        bệnh và cải thiện sức khỏe của bệnh nhân.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

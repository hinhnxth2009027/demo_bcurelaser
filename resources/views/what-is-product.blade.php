@extends('layouts.master')
@section('title')
    What Is B-Cure Laser?
@endsection
@section('extraCss')
    <style>
        .header-image {
            background-image: url('https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/bg_01.jpg');
            background-repeat: no-repeat;
            background-position: 50% 0%;
            background-size: cover;
            padding: 50px 0 50px 0;
            line-height: 2.44791vw;
            font-size: 30px;
            color: #fff;
        }

        .header-content {
            background: #ff8700;
            width: 31.5625vw;
            padding: 1.92708vw 1.5625vw 1.92708vw 2.70833vw;
        }

        .title {
            position: relative;
            margin: 0 0 4.16666vw 0;
            padding: 1.66666vw 0 1.25vw 1.5625vw;
        }

        .title-img {

            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            line-height: 0;
            font-size: 0;
        }

        .icon-img {
            width: auto;
            height: 6.82291vw;
            margin: 0 0 0 0.46875vw;
        }

        .content-1 {
            background: #21323f;
            padding: 2.34375vw 0 0 0;
            line-height: 1.5625vw;
            font-size: 1.35416vw;
            font-weight: normal;
            color: #fff;
        }

        .col-3 {
            margin: 0 0 4.47916vw 0;
            padding: 0 1.04166vw;
            text-align: center;
        }
        @media only screen and (max-width: 991px) {
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
                padding-top: 20px;
            }
            .header-image{
                background-image: url('https://www.bcurelaser.co.uk/wp-content/themes/astra-child/images/bg_01_mobile.jpg') !important;
                padding: 40.8vw 4.66666vw 3.86666vw 4.66666vw;
                line-height: 6.26666vw;
                font-size: 4vw;
            }
            .header-content{
                width: auto;
                padding: 4.93333vw 13.33333vw 3.6vw 4.93333vw;
            }
            .title{
                margin: 0 0 8.26666vw 0;
                padding: 6vw 0 6.13333vw 3.73333vw;
                line-height: 3.2vw;
                font-size: 2.93333vw;
            }
            .title h2{
                margin: 0 0 1.2vw 0;
                padding: 0;
                line-height: 5.6vw;
                font-size: 5.33333vw;
            }
            .title h5{
                margin: 0;
                line-height: inherit;
                font-size: inherit;
            }
            .title-img{
                top: 3.56666vw;
            }
            .title-img img{
                height: 15vw;
                margin: 0 0 0 0.4vw;
            }
            .content-1{
                display: none;
            }
            #col-reverse{
                flex-direction: column-reverse;
            }
            #title-bottom{
                font-size: 22px;
            }
        }
    </style>
@endsection
@section('main')
    <div>
        <div class="header-image">
            <div class="container">
                <div class="header-content">
                    <div style="padding: 3.95833vw 0 1.71875vw 1.97916vw;">
                        <h1>B-Cure Laser là gì?</h1>
                        <p>B-Cure Laser dựa trên công nghệ LLLT (Liệu pháp laser cường độ thấp), còn được gọi là Laser
                            lạnh,
                            Laser mềm, Liệu pháp quang sinh học hoặc quang trị liệu.</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding: 50px 0 50px 0">
            <div class="container">
                <div class="title">
                    <h2>Công nghệ tiên tiến</h2>
                    <h5 style="font-weight: normal">Cơ chế hoạt động của B-Cure Laser</h5>
                    <div class="title-img">
                        <img class="icon-img"
                             src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/carousel_stamp_01.png" alt="">
                        <img class="icon-img"
                             src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/stamp_no_glasses.png" alt="">
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <iframe width="100%" height="50%" src="https://www.youtube.com/embed/bdKqLX-MT5c"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        <br>
                        <iframe width="100%" height="50%" src="https://www.youtube.com/embed/vg_dKoa3OmI"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="col-6">
                        <p>
                            B-Cure Laser dựa trên công nghệ LLLT (Liệu pháp laser cường độ thấp), còn được gọi là Laser
                            lạnh, Laser mềm hoặc Laser quang sinh học. (Liệu pháp Laser độ thấp
                            trong khoảng 1-1000mW). Nó là một chùm ánh sáng đơn sắc mạch lạc, với một bước sóng được xác
                            định, di chuyển theo một pha và theo một hướng.
                        </p>
                        <p>
                            Một thiết bị dựa trên công nghệ LLLT, B-Cure Laser có tác dụng quang hóa nhiều hơn là tác
                            động nhiệt lên các mô sống. Nó hoạt động trên bề mặt da, đồng thời thâm nhập sâu qua các mô
                            da (4cm), không có tác dụng làm nóng và không làm tổn thương da.
                        </p>
                        <p>
                            Kích thích sinh học: Khi ánh sáng laser được hấp thụ bởi một mô sống, nó kích hoạt các phản
                            ứng sinh học trong các tế bào. Một loạt các chất hóa học nội sinh được sản xuất trong các tế
                            bào và được mang theo lưu lượng máu và bạch huyết đến các bộ phận khác của cơ thể. Do đó,
                            tác động của ánh sáng laser lạnh có thể không chỉ cục bộ, mà cũng có thể đạt được hiệu ứng
                            cho toàn thân.
                        </p>
                        <p>
                            Một thiết bị dựa trên công nghệ LLLT, B-Cure Laser có tác dụng quang hóa nhiều hơn là tác
                            động nhiệt lên các mô sống. Nó hoạt động trên bề mặt da, đồng thời thâm nhập sâu qua các mô
                            da (4cm), không có tác dụng làm nóng và không làm tổn thương da.
                        </p>
                        <p>
                            <strong>Không cần kính bảo hộ</strong> - Do cơ chế quang điện cải tiến mới, phân phối năng
                            lượng rộng cho phép sử dụng thiết bị B-Cure Laser mà không cần sử dụng kính bảo hộ để an
                            toàn cho mắt. (Đạt chứng nhận CS 0120 của Châu Âu)
                        </p>
                        <p>
                            Một danh mục mới được cấp bằng sáng chế trong LLLT - Chùm tia laser được cấp bằng sáng chế
                            với diện tích 4,5 cm² của chùm tia laser.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-1">
            <div class="container">
                <div>
                    <h2 class="text-uppercase" style="color: #ff9b00;margin: 0 0 1.04166vw 0;padding: 0;">Tác dụng điều
                        trị</h2>
                    <p style="margin: 0 0 3.54166vw 0;">Tác dụng điều trị của laser cường độ thấp bao gồm:</p>
                    <div>
                        <div class="row">
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_1.png"
                                     alt="">
                                <p style="font-size: 16px">Tăng mức ATP (Adenosine TriPhosphate)</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_5.png"
                                     alt="">
                                <p style="font-size: 16px">Tăng tổng hợp protein</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_2.png"
                                     alt="">
                                <p style="font-size: 16px">Tăng sự trao đổi chất của tế bào</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_3.png"
                                     alt="">
                                <p style="font-size: 16px">Tăng sản sinh collagen</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_4.png"
                                     alt="">
                                <p style="font-size: 16px">Tăng sản xuất enzyme</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_6.png"
                                     alt="">
                                <p style="font-size: 16px">Lưu lượng máu tốt hơn</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_7.png"
                                     alt="">
                                <p style="font-size: 16px">Lưu lượng bạch huyết và dẫn lưu tốt hơn</p>
                            </div>
                            <div class="col-3">
                                <img style="margin-bottom: 20px"
                                     src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/list_icon_8.png"
                                     alt="">
                                <p style="font-size: 16px">Giảm viêm nhiễm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding: 50px 0 50px 0">
            <div class="container">
                <div class="row" style="margin-bottom: 50px" id="col-reverse">
                    <div class="col-6">
                        <img width="100%" src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/image_01.jpg"
                             alt="">
                    </div>
                    <div class="col-6">
                        <h2>Phân tử ATP</h2>
                        <p>Tác dụng chính và quan trọng nhất của ánh sáng laser đối với các tế bào, là tăng mức sản xuất
                            atp (Adenosine TriPhosphate). Quá trình này được gọi là 'kích thích sinh học'.
                        <p class="collapse multi-collapse multiCollapseExample1">
                            Các phân tử ATP được tìm thấy trong các tế bào của tất cả các sinh vật sống. Trong hệ thống
                            động vật và con người, Adenosine TriPhosphate được tổng hợp trong các bào quan trong tế bào
                            nhỏ được gọi là ty thể. Trong ty thể, nguồn năng lượng tế bào chính - ATP - được sản xuất
                            bằng cách kết hợp oxy với đường có nguồn gốc từ thực phẩm. ATP có thể được mô tả là 'con tàu
                            năng lượng' hoặc 'con thoi năng lượng'. Nó có khả năng khai thác năng lượng hóa học được tạo
                            ra từ thực phẩm và vận chuyển nó qua màng tế bào để chuyển đổi thành 'nhiên liệu' cần thiết
                            cho chức năng cơ thể bình thường. Adenosine TriPhosphate thường được gọi là 'năng lượng của
                            cuộc sống'. Nếu một người không có đủ mức ATP có sẵn, năng lượng không thể đến được các mô.
                            Điều này có thể dẫn đến một loạt các vấn đề sức khỏe, bao gồm nhạy cảm với các bệnh truyền
                            nhiễm, chữa lành vết thương kém, viêm và sưng.
                        </p>
                        <p class="collapse multi-collapse multiCollapseExample1">
                            Laser cung cấp năng lượng ánh sáng vào các mô sống, quá trình đó còn được gọi là 'liệu pháp
                            quang sinh học'. Điều này làm tăng ATP và do đó vận chuyển nhiều năng lượng và chất dinh
                            dưỡng xung quanh cơ thể, để trao đổi chất lành mạnh, cải thiện khả năng miễn dịch và các cơ
                            quan hoạt động hiệu quả.
                        </p>
                        <p class="collapse multi-collapse multiCollapseExample1">
                            Các thiết bị B-Cure Laser thường được sử dụng bởi các cá nhân, cũng như các chuyên gia y tế
                            và nhà trị liệu, để giảm đau, giảm viêm, tăng tốc độ lành thương, đẩy nhanh quá trình tái
                            tạo mô, giảm thiểu sự hình thành mô sẹo và cải thiện khả năng vận động, phục hồi sau chấn
                            thương hoặc phẫu thuật.
                        </p>
                        <a class="toggle_text" data-toggle="collapse" href=".multiCollapseExample1" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample1">Xem thêm</a></p>


                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-6">
                        <h2>Tác động đến cơn đau</h2>
                        <p>Trong nhiều trường hợp, cơn đau không ngừng là kết quả của áp lực lên các sợi thần kinh. Áp
                            lực này gây sưng và viêm xung quanh khu vực bị ảnh hưởng. B-Cure Laser mở rộng các mạch máu
                            và bạch huyết tạo điều kiện cho việc lọc và làm sạch vùng bị viêm và phù nề, do đó giải
                            phóng áp lực lên dây thần kinh. Giảm áp lực dẫn đến giảm mức độ đau và cho phép các mạch máu
                            và bạch huyết bơm năng lượng cần thiết để chữa lành khu vực bị ảnh hưởng.
                        <p class="collapse multi-collapse multiCollapseExample2">
                            B-Cure Laser có hiệu quả và an toàn và có thể được áp dụng tại nhà. B-Cure Laser "không có
                            tác dụng phụ" và có thể được sử dụng riêng như một phương thức trị liệu độc lập hoặc kết hợp
                            với các liệu pháp thông thường khác, chẳng hạn như vật lý trị liệu.
                        </p>
                        <a class="toggle_text1" data-toggle="collapse" href=".multiCollapseExample2" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample2">Xem thêm</a></p>

                    </div>
                    <div class="col-6">
                        <img width="100%" src="https://www.bcurelaser.co.uk/wp-content/uploads/2019/09/image_02.jpg"
                             alt="">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px" >
                    <h2 class="text-uppercase text-center" id="title-bottom">Chọn thiết bị phù hợp <strong style="color:#f68e1e">với bạn</strong></h2>
                </div>
                @include('common.featured_product')
            </div>
        </div>
    </div>
@endsection
@section('extraJs')
    <script>
        let toggleText = true;
        $('.toggle_text').click(function () {
            if (toggleText) {
                $('.toggle_text').text('Ẩn bớt');
                toggleText = false
            } else {
                $('.toggle_text').text('Xem thêm');
                toggleText = true
            }
        })
        $('.toggle_text1').click(function (){
            if(toggleText){
                $('.toggle_text1').text('Ẩn bớt');
                toggleText = false
            }else{
                $('.toggle_text1').text('Xem thêm');
                toggleText = true
            }
        })
    </script>
@endsection

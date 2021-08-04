<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title') - B-Cure laser</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/video-modal/css/modal-video.css">
    <link rel="stylesheet" href="/css/app.css">
    @yield('extraCss')
    <style>
        .btn_telephone > i {
            position: absolute;
            left: 24px;
            top: 24px;
        }

        .btn_telephone:focus {
            outline: none;
        }
        

        .btn_telephone {
            color: white;
            height: 70px;
            position: fixed;
            bottom: 10px;
            left: 10px;
            border-radius: 35px;
            background: #ff9e2e;
            border: none;
            font-size: 20px;
        }

        .show_phone {
            width: 230px;
        }

        .hide_phone {
            width: 70px;
        }
    </style>
</head>
<body>
<!-- ======= Top Bar ======= -->
{{--@include('components.topbar')--}}
<!-- ======= Header ======= -->
@include('components.header')
<!-- ======= Hero Section ======= -->
@yield('banner')
<main id="main">
    @yield('main')
</main>
<!-- ======= Footer ======= -->
@include('components.footer')
@include('components.back-to-top')
<!-- Chỉnh sủa số điện thoại ở dòng 107 file master layout -->
<a href="tel:0987987789"  class="btn_telephone hide_phone"><i class="fas fa-phone-alt"></i></a>
<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
<!-- Template Main JS File -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/libs/jquery/Script/jquery.validate.min.js"></script>
<script src="/video-modal/js/jquery-modal-video.js"></script>
<script src="/video-modal/js/modal-video.js"></script>
<script src="/assets/js/main.js"></script>
@yield('extraJs')
<script>
    var phone = true
    // $('.btn_telephone').click(function () {
    //     $('.btn_telephone').toggleClass('show_phone')
    //     $('.btn_telephone').toggleClass('hide_phone')
    //     if (phone) {
    //         //thêm số điện thoại ở đây
    //         setTimeout(function () {
    //             $('.phone_number').text('19001000');
    //         }, 400);
    //         phone = false
    //     } else {
    //         setTimeout(function () {
    //             $('.phone_number').text('');
    //         }, 100);
    //         phone = true
    //     }
    // })
</script>
</body>
</html>

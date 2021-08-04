<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Đăng nhập | Quản trị viên</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('libs/style/style_for_login/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('libs/style/style_for_login/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('libs/style/style_for_login/style.css')}}">
</head>
<body>
<div class="half">
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <div class="form-block" style="height: 600px!important;box-shadow: #9e9e9e 0 0 100px;margin-top: -50px!important;padding-top: 60px!important;">
                        <div class="text-center mb-5">
                            <h3>Đăng nhập hệ thống</h3>
                            <p></p>
                        </div>
                        <form action="{{route('processLogin_user')}}" method="post">
                            @if(session('login_error'))
                                <p style="color: red">{{session('login_error')}}</p>
                            @endif
                            @csrf
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input required type="email" class="form-control" placeholder="your-email@gmail.com" id="email"
                                       name="email">
                            </div>
                                <br>
                            <div class="form-group last mb-3">
                                <label for="password">Mật khẩu</label>
                                <input required type="password" class="form-control" placeholder="Your Password" id="password"
                                       name="password">
                            </div>
                                <br>
                            <br>
                            <input type="submit" value="Đăng nhập" class="btn btn-block btn-info">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.components.script')
</body>
</html>

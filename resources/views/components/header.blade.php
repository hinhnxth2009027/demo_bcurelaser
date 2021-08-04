<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{route('index')}}" class="logo"><img src="{{url('images/logo.png')}}" alt=""></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="dropdown">
                    <a href="javascript:void(0)"><span>Về chúng tôi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('who-are-we')}}">Chúng tôi là ai?</a></li>
                        <li><a href="{{route('what-is')}}">B-Cure Laser là gì?</a></li>
                        <li><a href="{{route('faq')}}">Câu hỏi thường gặp</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{route('treatment')}}">
                        <span>Khu vực điều trị</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        @foreach($treatments as $treatment)
                            <li><a href="{{route('treatment_detail', ['slug' => $treatment->slug])}}">{{$treatment->title}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{route('product')}}">
                        <span>Sản phẩm</span> <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        @foreach($products as $product)
                            <li><a href="{{route('product_detail', ['slug' => $product->slug])}}">{{$product->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'trial' ? 'active' : '' }}" href="{{route('trial')}}">Thử nghiệm lâm sàng</a></li>
                <li><a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'testimonial' ? 'active' : '' }}" href="{{route('testimonial')}}">Chia sẻ của khách hàng</a></li>
                <li><a class="nav-link {{ \Illuminate\Support\Facades\Route::currentRouteName() == 'contact' ? 'active' : '' }}" href="{{route('contact')}}">Liên hệ</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

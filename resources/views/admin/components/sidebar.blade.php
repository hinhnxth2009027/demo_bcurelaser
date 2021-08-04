<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
                        <span>
                            <button type="button"
                                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu mt-4" style="border: none">
                <li style="border: none!important;">
                    <a href="{{route('list_contact')}}" slot="contact" class="sidebar_item">
                        <i class="metismenu-icon fas fa-mail-bulk"></i>
                        Hòm thư
                    </a>
                </li>
                <li slot="treatments" class="sidebar_item" style="border: none!important;" >
                    <a class="sidebar_item">
                        <i class="metismenu-icon fas fa-heartbeat"></i>
                        Phương pháp trị liệu
                        <i class="metismenu-state-icon fas fa-caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a slot="list_treatment" class="page_item" href="{{route('list_treatment')}}">
                                <i class="metismenu-icon">
                                </i>Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a slot="create_treatment" class="page_item" href="{{route('create_treatment')}}">
                                <i class="metismenu-icon"></i>
                                Thêm mới
                            </a>
                        </li>

                    </ul>
                </li>
                <li slot="products" class="sidebar_item" style="border: none!important;">
                    <a class="sidebar_item">
                        <i class="metismenu-icon fab fa-product-hunt"></i>
                        Sản phẩm
                        <i class="metismenu-state-icon fas fa-caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a slot="list_product" class="page_item" href="{{route('list_product')}}">
                                <i class="metismenu-icon"></i>
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a slot="create_product" class="page_item" href="{{route('create_product')}}">
                                <i class="metismenu-icon">
                                </i>
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li slot="trials" class="sidebar_item" style="border: none!important;">
                    <a class="sidebar_item">
                        <i class="metismenu-icon fas fa-vial"></i>
                        Thử nghiệm lâm sàng
                        <i class="metismenu-state-icon fas fa-caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a slot="listTrial" class="page_item" href="{{route('list_trial')}}">
                                <i class="metismenu-icon">
                                </i>Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a slot="createTrial" class="page_item" href="{{route('create_trial')}}">
                                <i class="metismenu-icon"></i>
                                Thêm mới
                            </a>
                        </li>

                    </ul>
                </li>
                <li slot="testimonial" class="sidebar_item" style="border: none!important;">
                    <a class="sidebar_item">
                        <i class="metismenu-icon fas fa-clipboard-check"></i>
                        Chia sẻ từ khách hàng
                        <i class="metismenu-state-icon fas fa-caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a slot="listTes" class="page_item" href="{{route('list_testimonial')}}" >
                                <i class="metismenu-icon"></i>
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a slot="createTes" class="page_item" href="{{route('create_testimonial')}}">
                                <i class="metismenu-icon">
                                </i>Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li slot="Facebook" class="sidebar_item" style="border: none!important;">
                    <a class="sidebar_item">
                        <i class="metismenu-icon fab fa-facebook-f"></i>
                        Đánh giá Facebook
                        <i class="metismenu-state-icon fas fa-caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a slot="list_facebook_review" class="page_item" href="{{route('list_facebook_review')}}">
                                <i class="metismenu-icon"></i>
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a slot="create_facebook_review" class="page_item" href="{{route('create_facebook_review')}}">
                                <i class="metismenu-icon">
                                </i>Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li slot="faq" class="sidebar_item" style="border: none!important;">
                    <a class="sidebar_item">
                        <i class="metismenu-icon fas fa-question-circle"></i>
                        Câu hỏi thường gặp
                        <i class="metismenu-state-icon fas fa-caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a slot="listFaq" class="page_item" href="{{route('list_faq')}}">
                                <i class="metismenu-icon"></i>
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a slot="createFaq" class="page_item" href="{{route('create_faq')}}">
                                <i class="metismenu-icon">
                                </i>Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li slot="banner" class="sidebar_item" style="border: none!important;">
                    <a  class="sidebar_item">
                        <i class="metismenu-icon fas fa-bookmark"></i>
                        Banners
                        <i class="metismenu-state-icon fas fa-caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a slot="list_banner" class="page_item" href="{{route('list_banner')}}" >
                                <i class="metismenu-icon"></i>
                                Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a slot="create_banner" class="page_item" href="{{route('create_banner')}}" >
                                <i class="metismenu-icon">
                                </i>Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
                <li slot="users" class="sidebar_item" style="border: none!important;">
                    <a  href="" class="sidebar_item">
                        <i class="metismenu-icon fas fa-users"></i>
                        Quản trị viên
                        <i class="metismenu-state-icon fas fa-caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a slot="list_user" class="page_item" href="{{route('list_user')}}">
                                <i class="metismenu-icon">
                                </i>Xem tất cả
                            </a>
                        </li>
                        <li>
                            <a slot="create_user" class="page_item" href="{{route('create_user')}}">
                                <i class="metismenu-icon"></i>
                                Thêm mới
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

@extends('layouts.master')
@section('title', 'Liên hệ')

@section('main')
    @include('common.contact')
{{--    <div class="container mt-5">--}}
{{--        <div style="max-width: 68.75vw;--}}
{{--    margin: 0 auto;">--}}
{{--            <div style="margin: auto;width: auto">--}}
{{--                <form action="{{route('create_contact')}}" method="post" style="position: relative" id="contact">--}}
{{--                    @csrf--}}
{{--                    <div class="contact-form">--}}
{{--                        <div style="margin-bottom: 20px;text-align: center">--}}
{{--                            <span class="text-uppercase title">ĐỂ BIẾT THÊM THÔNG TIN</span>--}}
{{--                            @if(session('send_success'))--}}
{{--                                <p style="font-weight: bold;color: #08a608">{{session('send_success')}}</p>--}}
{{--                            @else--}}
{{--                                <p>Vui lòng cung cấp thông tin của bạn và chúng tôi sẽ liên hệ lại với bạn trong thời--}}
{{--                                    gian sớm nhất</p>--}}
{{--                            @endif--}}

{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-3 col-md-3">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="Họ tên" name="name">--}}
{{--                                    @error('name')--}}
{{--                                    <label id="name-error" class="error" for="name">{{$message}}</label>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-3 col-md-3">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="Số điện thoại" name="phone">--}}
{{--                                    @error('phone')--}}
{{--                                    <label id="name-error" class="error" for="name">{{$message}}</label>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-3 col-md-3">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="E-mail *" name="email">--}}
{{--                                    @error('email')--}}
{{--                                    <label id="name-error" class="error" for="name">{{$message}}</label>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-3 col-md-3">--}}
{{--                                <div class="form-group">--}}
{{--                                    <select type="text" class="form-select" name="subject">--}}
{{--                                        <option value="1">Mua hàng</option>--}}
{{--                                        <option value="2">cần hỗ trợ</option>--}}
{{--                                        <option value="3">Yêu cầu hợp tác</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <div class="col-9 col-md-9">--}}
{{--                                <div class="form-group">--}}
{{--                                    <textarea placeholder="Để lại lời nhắn" class="form-control" name="message"--}}
{{--                                              rows="1"></textarea>--}}
{{--                                    @error('message')--}}
{{--                                    <label id="name-error" class="error" for="name">{{$message}}</label>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-3 col-md-3">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="submit" class="form-control btn btn-primary">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-3">--}}
{{--                            <div class="form-group">--}}
{{--                                <label style="font-size: 13px">--}}
{{--                                    <input type="checkbox" class="form-check-label">--}}
{{--                                    <span>Đồng ý nhận các bản tin và tài liệu tiếp thị của B-Cure.</span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-1">--}}
{{--                            <p style="font-size: 13px">Dữ liệu của bạn sẽ được xử lý theo <a href=""> Chính sách Bảo--}}
{{--                                    mật</a> của chúng tôi và chỉ được sử dụng để cung cấp cho bạn thông tin bạn yêu cầu.--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <section style="background-color: #2A3541;">
        <div class="container">
            <div class="row text-light">
                <div class="col-md-9">
                    <h3 class="">Công ty TNHH Đầu tư và Phát triển An Khang</h3>
                    <p>
                        <a href="http://ankhangdevin.com">http://ankhangdevin.com</a><br>
                        Số 78, Chùa Bộc, Phường Quang Trung, Quận Đống Đa, Hà Nội<br>
                        <a href="mailto:cskh@ankhangdevin.com">cskh@ankhangdevin.com</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <div class="pb-3">
                        <a href="tel:84912621232"><i class="fa fa-phone-alt"></i> 84912621232 (Ms. Phượng)</a>
                    </div>
                    <div class="pb-3">
                        <a href="tel:84917564086"><i class="fa fa-phone-alt"></i> 84917564086 (Ms. Huyền)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

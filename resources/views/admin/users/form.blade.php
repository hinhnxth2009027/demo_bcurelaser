@extends('admin.layouts.form')
@section('title', $detail ? 'Chỉnh sủa thông tin quản trị viên' :'Thêm mới quản trị viên')

@section('form')
    <form action="{{route('save_user')}}" method="post" id="create_user" class="needs-validation"
          novalidate>
        @if($detail != null)
            @method('put')
        @endif
        @if(session('email_error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oh no !</strong> {{session('email_error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(session('phone_error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oh no !</strong> {{session('phone_error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationCustom01">Họ và tên</label>
                <input type="text" class="form-control" id="validationCustom01"
                       placeholder="Nhập vào họ và tên"
                       required name="full_name" value="{{$detail ? $detail->full_name : ''}}">
                @error('full_name')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom02">Email</label>
                <input type="email" class="form-control" id="validationCustom02"
                       placeholder="Nhập vào email" required name="email" value="{{$detail ? $detail->email : ''}}">
                @error('email')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">Số điện thoại</label>
                <input type="text" class="form-control" id="validationCustom03"
                       placeholder="Nhập vào số điện thoại"
                       required name="phone" value="{{$detail ? $detail->phone : ''}}">
                @error('phone')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustomUsername">Mật khẩu</label>
                <input type="password" class="form-control" id="validationCustomUsername"
                       placeholder="Nhập vào mật khẩu (6-18 kí tự)" required name="password">
                @error('password')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom04">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="validationCustom04"
                       placeholder="Nhập lại mật khẩu"
                       required name="confirm_password">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <button class="btn btn-primary form-control" type="submit">{{$detail ? 'Cập nhật' : 'Tạo mới'}}</button>
            </div>
            <div class="col-md-6 mb-3">
                <button class="btn btn-warning form-control" type="reset">Xóa nội dung đã nhập</button>
            </div>
        </div>
    </form>
    <input type="hidden" id="perpage" value="users">
    <input type="hidden" id="page_item" value="create_user">
@endsection

@section('custom_js')
    <script>
        $('#create_user').validate({
            rules: {
                full_name: {
                    required: true,
                    minlength: 5,
                    maxlength: 40
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 10,
                    maxlength: 30
                },
                phone: {
                    required: true,
                    minlength: 9,
                    maxlength: 12
                },
                password: {
                    required: true,
                    minlength: 6,
                    maxlength: 18
                },
                confirm_password: {
                    required: true,
                    equalTo: "#validationCustomUsername"
                }
            },
            messages: {
                full_name: {
                    required: 'Họ tên không được để trống',
                    minlength: 'Vui lòng nhập đủ họ tên',
                    maxlength: 'Tên không khả dụng (40 ký tự)'
                },
                email: {
                    required: 'Email là trường bắt buộc',
                    email: 'Email sai định dạng',
                    minlength: 'Email sai định dạng',
                    maxlength: 'Email sai định dạng'
                },
                phone: {
                    required: 'Số điện thoại không được để trống',
                    minlength: 'Số điện thoại không hợp lệ',
                    maxlength: 'Số điện thoại sai định dạng'
                },
                password: {
                    required: 'Mật khẩu là trường bắt buộc',
                    minlength: 'Mật khẩu phải tối thiểu từ 6 ký tự',
                    maxlength: 'Mật khẩu không được quá 18 kí tự'
                },
                confirm_password: {
                    required: 'Nhập lại mật khẩu',
                    equalTo: 'Mật khẩu không khớp'
                }
            }
        })
    </script>
@endsection

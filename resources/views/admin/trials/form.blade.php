@extends('admin.layouts.form')
@section('title', $detail ? 'Chỉnh sửa bản thử nghiệm' : 'Thêm mới bản thử nghiệm')

@section('extra_style')
    <style>
        .show_images {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 6px;
            margin-top: 10px;
        }
    </style>
@endsection

@section('form')
    <div class="hidden_form d-none">
        <form id="form_logo" method="post" enctype="multipart/form-data">
            <input type="file" id="choose_logo" name="image">
        </form>
        <form id="form_thumbnail" method="post" enctype="multipart/form-data">
            <input type="file" id="choose_thumbnail" name="image">
        </form>
        <form class="get_file" method="post" enctype="multipart/form-data">
            <input type="file" class="choice_file" name="file">
        </form>
    </div>
    <form method="post" id="form-trial">
        @if($detail != null)
            @method('put')
        @endif
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" placeholder="Title" name="title"
                       value="{{$detail ? $detail->title:''}}">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Logo</label>
                <div class="btn_choose_logo"
                     style="overflow: hidden;height: 130px;width: 130px;border: #c82333 2px solid;display: flex;justify-content: center;align-items: center;font-size: 25px;color: #c82333;border-radius: 5px;cursor: pointer">
                    @if($detail)
                        <img style="height: 102%;width: 102%;object-fit: cover" src="{{$detail->logo}}"
                             alt="">
                    @else
                        +
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <label>Hình ảnh</label>
                <div class="btn_choose_Thumbnail"
                     style="overflow: hidden;height: 130px;width: 130px;border: #c82333 2px solid;display: flex;justify-content: center;align-items: center;font-size: 25px;color: #c82333;border-radius: 5px;cursor: pointer">
                    @if($detail)
                        <img style="height: 102%;width: 102%;object-fit: cover"
                             src="{{$detail->thumbnail}}"
                             alt="">
                    @else
                        +
                    @endif
                </div>
            </div>
        </div>
        <div class="form-row" style="padding-top: 20px">
            <div class="col-md-12">
                <div class="position-relative form-group">
                    <label>Nội dung</label>
                    <textarea name="content"
                              placeholder="Content"
                              class="form-control"
                              rows="6">{{$detail ? $detail->content:''}}</textarea>
                </div>
            </div>
        </div>
        <input type="hidden" name="file" class="file" value="{{$detail ? $detail->file : ''}}">
        <div class="form-row">
            <div class="col-md-12">
                <label>Tập tin</label>
                <button type="button" class="choose_file btn btn-warning form-control">Chọn file
                </button>
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-6 show_file">
                @if($detail != '')
                    <strong><a target="_blank" href="{{$detail->file}}">{{$detail->file}}</a></strong>
                @endif
            </div>
        </div>


        <div class="form-row" style="padding-top: 20px">
            <div class="col-md-7">
                <label>Kiểu thử nghiệm</label>
                <select name="type" id="exampleSelect" class="form-control">
                    <option
                        value="{{\App\Enums\TrialType::CLINICAL_TRIAL}}">Thử nghiệm lâm sàng
                    </option>
                    <option
                        value="{{\App\Enums\TrialType::PROFESSIONAL_RECOMMENDATIONS}}">Khuyến nghị
                        chuyên nghiệp
                    </option>
                </select>
            </div>
            <div class="col-md-5">
                <label>Sort Number</label>
                <input type="text" class="form-control" name="sort_number"
                       value="{{$detail ? $detail->sort_number : ''}}">
            </div>
        </div>
        <div class="form-row" style="padding-top: 20px;justify-content: flex-end">
            <button style="width: 120px" class="btn btn-primary"
                    type="submit">{{$detail ? 'Cập nhật':'Tạo mới'}}</button>
        </div>
        <div class="group_input_hidden d-none">

            <input type="text" class="form-control datalogo" placeholder="Logo" name="logo"
                   value="{{$detail ? $detail->logo:''}}">
            <input type="text" class="form-control datathumbnail" placeholder="thumbnail"
                   name="thumbnail"
                   value="{{$detail ? $detail->thumbnail:''}}">
        </div>
    </form>
    <input type="hidden" id="perpage" value="trials">
    <input type="hidden" id="page_item" value="createTrial">
@endsection

@section('custom_js')
    <script src="{{url('https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js')}}"></script>
    <script>
        $('.choose_file').click(function () {
            $('.choice_file').click()
        })
        $('.choice_file').change(function () {
            $('.get_file').submit()
        })
        $('.get_file').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{route('upload_file_api')}}",
                method: "POST",
                data: new FormData(this),
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    $('.show_file').html(`<strong><a target="_blank" href="/data_file/${res.data}">/data_file/${res.data}</a></strong>`)
                    $('.file').val('/data_file/'+res.data)
                }
            })
        })
        CKEDITOR.replace('content');
        $('.btn_choose_logo').click(function () {
            $('#choose_logo').click()
        })
        $('#choose_logo').change(function () {
            $('#form_logo').submit()
        })
        $('#form_logo').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{route('upload_image_api')}}",
                method: "POST",
                data: new FormData(this),
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    $('.btn_choose_logo').html(`<img style="height: 102%;width: 102%;object-fit: cover" src="/data_images/${res.data}" alt="">`)
                    $('.datalogo').val('/data_images/' + res.data)
                }
            })
        })
        $('.btn_choose_Thumbnail').click(function () {
            $('#choose_thumbnail').click()
        })
        $('#choose_thumbnail').change(function () {
            $('#form_thumbnail').submit()
        })
        $('#form_thumbnail').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: "{{route('upload_image_api')}}",
                method: "POST",
                data: new FormData(this),
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    $('.btn_choose_Thumbnail').html(`<img style="height: 102%;width: 102%;object-fit: cover" src="/data_images/${res.data}" alt="">`)
                    $('.datathumbnail').val('/data_images/' + res.data)
                }
            })
        })
        $('#form-trial').validate({
            rules: {
                title: {
                    required: true,
                    minlength: 5,
                },
                content: {
                    required: true,
                    minlength: 15,
                },
                logo: {
                    required: true
                },
                thumbnail: {
                    required: true
                },
                file: {
                    required: true
                },
                type: {
                    required: true
                },
                sort_number: {
                    required: true,
                }
            },
            messages: {
                title: {
                    required: 'Tiêu đề không được để trống',
                    minlength: 'Tiêu đề tối thiếu phải từ 5 ký tự trở lên',
                },
                content: {
                    required: 'Nội dung không được để trống',
                    minlength: 'Nội dung tối thiếu phải từ 15 ký tự trở lên',
                },
                logo: {
                    required: 'Logo không được để trống',
                },
                thumbnail: {
                    required: 'Ảnh không được để trống',
                },
                file: {
                    required: 'File không được để trống'
                },
                type: {
                    required: 'Kiểu không được để trống',
                },
                sort_number: {
                    required: 'Thứ tự không được để trống',
                }
            }
        })
    </script>
@endsection

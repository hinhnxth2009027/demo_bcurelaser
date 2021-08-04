@extends('admin.layouts.form')
@section('title', $detail != '' ? 'Chỉnh sửa đánh giá' : 'Thêm đánh giá Facebook')

@section('form')
    <div class="d-none">
        <form id="get_image" action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" class="image_file">
        </form>
    </div>
    <form method="post"
          action="@if($detail) {{route('update_facebook_review',$detail->id)}} @else {{route('save_facebook_review')}} @endif"
          id="form_create_facebook_review">
        @if($detail != '')
            @method('put')
        @endif
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Tên khách hàng</label>
                <input value="{{$detail != '' ? $detail->name : ''}}" type="text" name="name"
                       class="form-control" placeholder="Nhập vào họ tên" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Chức vụ</label>
                <input value="{{$detail != '' ? $detail->title : ''}}" name="title" type="text"
                       class="form-control" placeholder="Nhập vào chức vụ"
                       required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Nội dung</label>
                <textarea name="content" class="form-control" style="height: 150px">
                                    {{$detail != '' ? $detail->content : ''}}
                                </textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Ảnh</label>
                <div class="choose_image_fb">
                    @if($detail != '')
                        <img src="{{$detail->thumbnail}}" alt=""
                             style="width: 102%;height: 102%;object-fit: cover">
                    @else
                        +
                    @endif
                </div>
                <label id="theImage-error" class="error d-none" for="theDate">Vui lòng Chọn ảnh</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom02">Được viết ngày</label>
                <input value="{{$detail != '' ? $detail->date : ''}}" type="date" name="date"
                       id="theDate" class="form-control"
                       required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationCustom02">Thứ tự sắp xếp</label>
                <input value="{{$detail != '' ? $detail->sort_number : 1}}" name="sort_number"
                       type="number" class="form-control" required>
            </div>
        </div>
        <input value="{{$detail != '' ? $detail->thumbnail : ''}}" type="hidden"
               style="width: 300px" name="thumbnail" class="image_thumbnail">
        <button class="btn btn-primary btn-block btn_submit" type="button">{{$detail != '' ? 'Chỉnh sủa' : 'Tạo mới'}}</button>
    </form>
    <input type="hidden" id="perpage" value="Facebook">
    <input type="hidden" id="page_item" value="create_facebook_review">
@endsection

@section('custom_js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('.choose_image_fb').click(function () {
                $('.image_file').click()
            })

            $('.image_file').change(function () {
                $('#get_image').submit();
            })

            $('#get_image').on('submit', function (event) {
                var id = Math.random()
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
                        $('.choose_image_fb').html(`<img src="/data_images/${res.data}" alt="" style="width: 102%;height: 102%;object-fit: cover">`)
                        $('.image_thumbnail').val('/data_images/' + res.data)
                    }
                })
            })

            $('#form_create_facebook_review').validate({
                rules: {
                    name: {
                        required: true
                    },
                    title: {
                        required: true
                    },
                    date: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: 'Vui lòng nhập tên'
                    },
                    title: {
                        required: 'Vui lòng nhập tiêu đề'
                    },
                    date: {
                        required: 'Vui lòng nhập ngày'
                    }
                }
            })
        })

        $('.btn_submit').click(function () {
            if ($('.image_thumbnail').val() === '') {
                $('#theImage-error').removeClass('d-none')
            } else {
                $('#form_create_facebook_review').submit()
            }
        })
    </script>
@endsection

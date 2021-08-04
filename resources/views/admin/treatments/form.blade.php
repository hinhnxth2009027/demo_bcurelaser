@extends('.admin.layouts.form')
@section('title', $detail ? 'Chỉnh sửa phương pháp trị liệu' : 'Thêm mới phương pháp trị liệu')
@section('form')
    <div class="d-none">
        <form id="form_thumbnail" method="post" enctype="multipart/form-data">
            <input type="file" name="image" class="get_thumbnail">
            <button>submit</button>
        </form>
        <form id="form_image" method="post" enctype="multipart/form-data">
            <input type="file" multiple name="files[]" class="get_image">
            <button>submit</button>
        </form>
    </div>
    <form
        action="@if($detail) {{route('update_treatment',$detail->id)}} @else {{route('store_treatment')}} @endif"
        method="post" id="create_user" class="needs-validation" novalidate>
        @if($detail != null)
            @method('put')
        @endif
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-3 title_container">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" id="title"
                       placeholder="Nhập tiêu đề cho phương pháp trị liệu" required name="title"
                       value="{{$detail != null ? $detail->title:''}}">
                <label id="validationCustom12345-error" class="error d-none"
                       for="validationCustom02">Không được để trống tiêu đề</label>
                @error('title')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>
        <div class="form-row btn_add_image_container">
            <div class="col-md-12 mb-3">
                <label for="add_image">Ảnh đại diện bài viết</label>
                @if($detail)
                    <div id="add_image" class="add_image choose_thumbnail"
                         style="width: 130px;height: 130px;border: #c82333 2px solid">
                        <img id="preview_thumbnail" src="{{$detail->thumbnail}}"
                             style="width: 100%;height: 100%;object-fit: cover" alt="">
                    </div>
                @else
                    <div id="add_image" class="add_image choose_thumbnail mt-1"
                         style="width: 130px;height: 130px;border: #c82333 2px solid;">
                        +
                    </div>
                @endif
                <label id="validationCustom020202-error" class="error d-none"
                       for="validationCustom02">Vui lòng chọn ảnh đại diện cho bài viết</label>
                @error('thumbnail')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="title">Nội dung</label>
                <textarea class="content_textarea" id="title"
                          name="content">{{$detail != null ? $detail->content :''}}</textarea>
                @error('content')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="protocol">Quy trình điều trị</label>
                <textarea id="protocol"
                          name="protocol">{{$detail != null ? $detail->protocol :''}}</textarea>
                @error('protocol')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>
        <div style="width: 100%" class="images_protocol_container">
            @if($detail)
                @for($i = 0 ; $i < sizeof(json_decode($detail->protocol_images,true)) ; $i++)
                    <div id="dsadsa{{$i}}" class="form-row btn_add_image_container">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5 mb-3">
                            <label for="add_image">Ảnh quy trình</label>
                            <div class="choose_image d-flex justify-content-center align-items-center" style="width: 100px;height: 100px;border: #8c8c8c 1px solid">
                                <img class="images_protocol"
                                     src="{{json_decode($detail->protocol_images,true)[$i]}}"
                                     alt="" style="width: 105%;height: 105%;object-fit: cover">
                            </div>
                        </div>
                        <div class="col" style="position: relative">
                                            <span slot="dsadsa{{$i}}" onclick="delete_image(this.slot)"
                                                  style="color: red;font-size: 30px;font-weight: bold;cursor: pointer;position: absolute;right: 5px;top: -13px">&times;</span>
                            <label for="add_image">Mô tả</label>
                            <input
                                value="{{json_decode($detail->protocol_images_caption,true)[$i]}}"
                                type="text" class="form-control protocol_images_caption"
                                name="protocol_images_caption"
                                placeholder="Nhập vào mô tả của bức ảnh này">
                        </div>
                        <hr>
                    </div>
                @endfor
            @endif
        </div>
        <div class="form-row ">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="btn btn-danger choose_image form-control" style="min-width: 120px">Thêm ảnh quy trình</div>
                <label id="validationCustom030303-error" class="error d-none"
                       for="validationCustom02">Để tiếp tục hãy thêm ít nhất một ảnh mô tả</label>
            </div>
        </div>
        <br>
        <hr>
        <div class="form-row mb-3">
            <div class="col-3">
                <label for="sort_number">Thứ tự sắp xếp <i class="fas fa-info-circle" data-toggle="tooltip" title="Số thấp hơn sẽ xuất hiện trước, bắt đầu từ số 1" style="transform: translateY(2px)"></i></label>
                <input class="form-control" type="number" id="sort_number" name="sort_number"
                       value="{{$detail != null ? $detail->sort_number : 1}}">
                @error('sort_number')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="protocol_video_input">Video quy trình điều trị (Youtube)</label>
                <input id="protocol_video_input" type="text" name="protocol_video"
                       class="form-control value_video_protocol"
                       value="{{$detail != null ? $detail->protocol_video:''}}"
                       placeholder="Thêm link video từ youtube">
            </div>
            <div class="col-md-6 mb-3">
                <label >Mô tả video quy trình điều trị</label>
                <input value="{{$detail != null ? $detail->protocol_video_caption : ''}}"
                       type="text" style=";margin-bottom: 50px"
                       class="video_caption form-control"
                       placeholder="Nhập vào mô tả cho video trên" name="protocol_video_caption">
            </div>
        </div>

        <hr>


        <div class="form-row">
            <div class="col-md-6 mb-3">
                <button class="btn btn-primary btn_get_all_image form-control"
                        type="button">{{$detail != null ? 'Cập nhật' : 'Tạo mới'}}
                </button>
            </div>
            <div class="col-md-6 mb-3">
                <button class="btn btn-warning form-control"
                        type="reset">{{$detail != null ? 'Khôi phục' : 'Xóa nội dung đã nhập'}} </button>
            </div>
        </div>
        <div class="group_input_hidden d-none">
            <input type="text" name="thumbnail" id="thumbnail">
            <input type="text" name="protocol_images" id="protocol_images">
            <input type="text" name="protocol_images_caption" id="protocol_images_caption">
            <input type="text" name="protocol_video_caption" id="protocol_video_caption">
            <button class="on_submit"></button>
        </div>
    </form>
    <input type="hidden" id="perpage" value="treatments">
    <input type="hidden" id="page_item" value="create_treatment">
@endsection

@section('custom_js')
    <script src="{{url('libs/scripts/custom_js.js')}}"></script>
    <script src="{{url('https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('[data-toggle="tooltip"]').tooltip();
            CKEDITOR.replace('content');
            CKEDITOR.replace('protocol');
            $('.choose_thumbnail').click(function () {
                $('.get_thumbnail').click()
            })
            $('.get_thumbnail').change(function () {
                $('#form_thumbnail').submit()
            })
            $('#sort_number').change(function () {
                if (Number($('#sort_number').val()) < 1) {
                    $('#sort_number').val(1)
                }
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
                        $('#add_image').html(`<img id="preview_thumbnail" src="/data_images/${res.data}" style="width: 100%;height: 100%;object-fit: cover" alt="">`)
                    }
                })
            })
            $('.choose_image').click(function () {
                $('.get_image').click()
            })
            $('.get_image').change(function () {
                $('#form_image').submit()
            })
            $('#form_image').on('submit', function (event) {
                event.preventDefault();
                var id = Math.random()
                $.ajax({
                    url: "{{route('upload_images_api')}}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (res) {
                        var data = res.data
                        var images = data.split(",")

                        for (let i = 0; i < images.length; i++) {
                            var id = Math.random()
                            $('.images_protocol_container').append(`<div id="${id}" class="form-row btn_add_image_container" >
                                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5 mb-3">
                                        <label for="add_image">Ảnh quy trình</label>
                                        <div class="choose_image" style="width: 100px;height: 100px;border: none">
                                        <img class="images_protocol" src="/data_images/${images[i]}" alt="" style="width: 100%;height: 100%;object-fit: cover">
                                        </div>

                        </div>
                        <div class="col" style="position: relative">
                            <span slot="${id}" onclick="delete_image(this.slot)" style="color: red;font-size: 30px;font-weight: bold;cursor: pointer;position: absolute;right: 5px;top: -13px">&times;</span>
                            <label for="add_image">Mô tả</label>
                            <input type="text" class="form-control protocol_images_caption" name="protocol_images_caption" placeholder="Nhập vào mô tả của bức ảnh này">
                        </div>
                        <hr>
                    </div>`)
                        }

                    }
                })
            })
        })
        function delete_image(id) {
            document.getElementById(`${id}`).remove()
        }
        $('.btn_get_all_image').click(function () {
            var images_link = document.querySelectorAll('.images_protocol')
            var protocol_images_caption = document.querySelectorAll('.protocol_images_caption')
            if ($('#title').val().length < 1) {
                $('#validationCustom12345-error').removeClass('d-none')
            } else if (document.getElementById('preview_thumbnail').src == "") {
                $('#validationCustom020202-error').removeClass('d-none')
            } else if (images_link.length < 1) {
                $('#validationCustom030303-error').removeClass('d-none')
            } else {
                if (images_link.length > 0) {
                    var images = []
                    var image_cations = []
                    for (let i = 0; i < images_link.length; i++) {
                        images.push(images_link[i].src)
                        image_cations.push(protocol_images_caption[i].value)
                    }
                    $('#protocol_images').val(JSON.stringify(images))
                    $('#protocol_images_caption').val(JSON.stringify(image_cations))
                    $('#protocol_video_caption').val($('.video_caption').val())
                    console.log($('#preview_thumbnail'))
                    $('#thumbnail').val(document.getElementById('preview_thumbnail').src)
                }
                $('.on_submit').click()
            }
        })
    </script>
@endsection


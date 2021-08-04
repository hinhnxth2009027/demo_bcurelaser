@extends('admin.layouts.form')
@section('title', $detail ? 'Chỉnh sửa banner' : 'Thêm mới banner')

@section('form')
    <div class="d-none">
        <form id="get_image" action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" class="image_file">
        </form>
    </div>
    <form id="form_banner" method="post"
          action="@if($detail) {{route('update_banner',$detail->id)}} @else {{route('save_banner')}} @endif">
        @if($detail != '')
            @method('put')
        @endif
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Ảnh</label>
                <div class="choose_image_banner">
                    {!! $detail ? html_entity_decode('<img src="'.$detail->thumbnail.'" alt="" style="width: 102%;height: 102%;object-fit: cover">'): '+' !!}
                </div>
                <label id="theImage-error" class="error d-none" for="theDate">Vui lòng chọn ảnh</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Liên kết video youtube</label>
                <input value="{{$detail ? $detail->video : ''}}" type="text" name="video"
                       class="form-control" placeholder="Nhập vào liên kết video youtube (không bắt buộc)">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Liên kết tới trang sản phẩm tương ứng</label>
                <input value="{{$detail ? $detail->order_target_url : ''}}" type="text" name="order_target_url"
                       class="form-control" placeholder="Nhập vào đường dẫn" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Thứ tự sắp xếp</label>
                <input value="{{$detail ? $detail->sort_number : 1}}" name="sort_number"
                       type="number" class="form-control sort_number" required>
            </div>
        </div>
        <input value="{{$detail ? $detail->thumbnail : ''}}" type="hidden"
               style="width: 300px" name="thumbnail" class="image_thumbnail" required>
        <button class="btn btn-primary btn_submit" style="width: 150px;"
                type="button">{{$detail ? 'Thay đổi' : 'Tạo mới'}}</button>
    </form>
    <input type="hidden" id="perpage" value="banner">
    <input type="hidden" id="page_item" value="create_banner">
@endsection

@section('custom_js')
    <script>
        $('.choose_image_banner').click(function () {
            $('.image_file').click()
        })
        $('.image_file').change(function () {
            $('#get_image').submit()
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
                    $('.choose_image_banner').html(`<img src="/data_images/${res.data}" alt="" style="width: 102%;height: 102%;object-fit: cover">`)
                    $('.image_thumbnail').val('/data_images/' + res.data)
                    $('#theImage-error').addClass('d-none')
                }
            })
        })
        $('.sort_number').change(function () {
            if (Number($('.sort_number').val()) < 1) {
                $('.sort_number').val(1)
            }
        })
        $('.btn_submit').click(function () {
            if ($('.image_thumbnail').val() === "") {
                $('#theImage-error').removeClass('d-none')
            } else {
                $('#form_banner').submit()
                $('#theImage-error').addClass('d-none')
            }
        })
    </script>
@endsection

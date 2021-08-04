@extends('admin.layouts.form')
@section('title', $detail ? 'Chỉnh sửa thông tin sản phẩm' : 'Thêm mới sản phẩm')

@section('extra_style')
    <style>
        .btn_add_technical > span {
            line-height: 40px;
        }

        .btn_add_technical {
            height: 50px;
            width: 50px;
            border: #f87a7a 2px solid;
            border-radius: 50%;
            justify-content: center;
            font-size: 25px;
            display: flex;
            cursor: pointer;
        }

        .option_form {
            position: relative;
        }

        .close_option_form {
            font-size: 35px;
            color: #ff6767;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            height: 25px;
            right: 1px;
            top: -15px;
        }

        .btn_choose_thumbnail {
            height: 120px;
            width: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            color: #a8b6ce;
            cursor: pointer;
            border: #a8b6ce 1px solid;
        }
    </style>
@endsection

@section('form')
    <div class="d-none">
        <form id="form_images" method="post" enctype="multipart/form-data">
            <input type="file" multiple name="files[]" class="get_images">
            <button>submit</button>
        </form>
    </div>
    <form
        action="@if($detail) {{route('update_product',$detail->id)}} @else {{route('store_product')}} @endif"
        method="post" id="create_product" class="needs-validation">
        @if($detail != '')
            @method('put')
        @endif
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationCustom01">Tên sản phẩm</label>
                <input value="{{$detail != ''? $detail->name :''}}" type="text" class="form-control"
                       id="validationCustom01"
                       placeholder="Nhập vào tên sản phẩm" required name="name">
                @error('name')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="description">Mô tả sản phẩm</label>
                <textarea name="description"
                          id="description">{{$detail != ''? $detail->description :''}}</textarea>
                @error('description')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
        </div>

        <div class="container_images_preview form-row" style="margin: 0;">
            <div class="col-12">
                <label for="description">Hình sản phẩm</label>
            </div>
            @if($detail != '')
                @for($i = 0 ; $i < sizeof(json_decode($detail->images,true)) ; $i++)
                    <div id="product_{{$i}}1" class="col-3 p-1">
                        <img class="images_item" id="item_img_01"
                             style="height: 200px; width: 100%; object-fit: cover; margin: auto;"
                             src="{{json_decode($detail->images,true)[$i]}}" alt="">
                        <div slot="product_{{$i}}1" onclick="delete_form_option(this.slot)"
                             class="btn btn-light form-control mt-1">Xóa
                        </div>
                    </div>
                @endfor
            @endif
        </div>

        <div class="form-row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3 my-3">
                <button id="choose_images_btn" class="btn btn-danger form-control" type="button">Thêm
                    ảnh sản phẩm
                </button>
                <label class="error d-none error_images">Chọn ít nhất 1 ảnh để tiếp tục</label>
            </div>
        </div>
        <div class="form-row justify-content-between">
            <div class="col-md-3 mb-3">
                <label for="sort_number">Thứ tự sắp xếp <i class="fas fa-info-circle"
                                                           data-toggle="tooltip"
                                                           title=" Số thấp hơn sẽ xuất hiện trước, bắt đầu từ số 1"
                                                           style="transform: translateY(2px)"></i></label>
                <input id="sort_number" class="form-control"
                       value="{{$detail != ''? $detail->sort_number :1}}" type="number"
                       name="sort_number">
                @error('sort_number')
                <label id="validationCustom02-error" class="error"
                       for="validationCustom02">{{$message}}</label>
                @enderror
            </div>
            <div class="col-md-6 mb-6">
                Sản phẩm nổi bật
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="is_featured" value="1" {{$detail && $detail->is_featured === 1 ? 'checked' : ''}}>
                    <label class="form-check-label">
                        Có
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" checked type="radio" name="is_featured" value="0" {{$detail && $detail->is_featured === 0 ? 'checked' : ''}}>
                    <label class="form-check-label">
                        Không
                    </label>
                </div>
            </div>
        </div>

        <hr>
        <div style="width: 100%" class="option_form_container">
            <div class="option_form" style="width: 100%">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="property">Thông số</label>
                        <input value="{{$technical != '' ? $technical[0]->property : ''}}" id="property"
                               class="form-control property_input" type="text"
                               placeholder="Nhập vào thông số" name="property">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="value">Giá trị thông số</label>
                        <input value="{{$technical != '' ? $technical[0]->value : ''}}" id="value"
                               class="form-control value_input" type="text" name="value"
                               placeholder="Nhập vào giá trị thông số">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="units">Đơn vị</label>
                        <input value="{{$technical != '' ? $technical[0]->units : ''}}" id="units"
                               class="form-control units_value" type="text"
                               placeholder="Nhập vào đơn vị" name="units">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="notes">Ghi chú</label>
                        <input value="{{$technical != '' ? $technical[0]->notes : ''}}" id="notes"
                               class="form-control notes_input" type="text"
                               placeholder="Nhập vào ghi chú" name="notes">
                    </div>
                </div>
                <hr>
            </div>
            @if($technical != '')
                @for($i = 1 ; $i < sizeof($technical) ; $i++)
                    <div id="delete_item{{$i}}" class="option_form" style="width: 100%">
                                        <span slot="delete_item{{$i}}" onclick="delete_form_option(this.slot)"
                                              class="close_option_form">&times;</span>
                        <br>
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="property">Thông số</label>
                                <input value="{{$technical[$i]->property}}" id="property"
                                       class="form-control property_input" type="text"
                                       placeholder="Nhập vào thông số">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="value">Giá trị thông số</label>
                                <input value="{{$technical[$i]->value}}" id="value"
                                       class="form-control value_input" type="text"
                                       placeholder="Nhập vào giá trị thông số">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="units">Đơn vị</label>
                                <input value="{{$technical[$i]->units}}" id="units"
                                       class="form-control units_value" type="text"
                                       placeholder="Nhập vào đơn vị">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="notes">Ghi chú</label>
                                <input value="{{$technical[$i]->notes}}" id="notes"
                                       class="form-control notes_input" type="text"
                                       placeholder="Nhập vào ghi chú">
                            </div>
                        </div>
                        <hr>
                    </div>
                @endfor
            @endif
        </div>
        <div class="form-row mt-3">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="btn_add_technical"><span>+</span></div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <p>Thêm thông số khác</p>
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="col-md-6 mb-3">
                <button class="btn btn-primary form-control get_data_form_option"
                        type="button"> {{$technical != '' ? 'Chỉnh sửa' : 'Tạo mới'}}
                </button>
            </div>
            <div class="col-md-6 mb-3">
                <button class="btn btn-warning form-control" type="reset">Xóa nội dung đã nhập</button>
            </div>
        </div>
        <div class="d-none">
            <input class="properties_input_hidden" type="text" name="properties">
            <input class="units_input_hidden" type="text" name="units">
            <input class="values_input_hidden" type="text" name="values">
            <input class="notes_input_hidden" type="text" name="notes">
            <input class="thumbnail_input_hidden" type="text" name="thumbnail">
            <input class="images_input_hidden" type="text" name="images">
        </div>
    </form>
    <input type="hidden" id="perpage" value="products">
    <input type="hidden" id="page_item" value="create_product">
@endsection

@section('custom_js')
    <script src="{{url('https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js')}}"></script>
    <script>
        $('[data-toggle="tooltip"]').tooltip();
        CKEDITOR.replace('description');
        document.addEventListener('DOMContentLoaded', function () {
            $('.btn_add_technical').click(function () {
                var id = Math.random()
                $('.option_form_container').append(`<div id="${id}" class="option_form" style="width: 100%">
                                <span slot="${id}" onclick="delete_form_option(this.slot)" class="close_option_form">&times;</span>
                                <br>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="property">Thông số</label>
                                        <input id="property" class="form-control property_input" type="text" placeholder="Nhập vào thông số">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="value">Giá trị</label>
                                        <input id="value" class="form-control value_input" type="text" placeholder="Nhập vào giá trị thông số">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="units">Units</label>
                                        <input id="units" class="form-control units_value" type="text" placeholder="Nhập vào dơn vị">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="notes">Ghi chú</label>
                                        <input id="notes" class="form-control notes_input" type="text" placeholder="Nhập vào ghi chú">
                                    </div>
                                </div>
                                <hr>
                            </div>`)
            })
        })
        $('#choose_images_btn').click(function () {
            $('.get_images').click()
        })
        $('.get_images').change(function () {
            $('#form_images').submit()
        })
        $('#form_images').on('submit', function (event) {
            var id = Math.random()
            event.preventDefault();
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
                        $('.container_images_preview').append(`<div id="${id}" class="col-3 p-1" style="height: 14vw;padding: 0">
                                    <img class="images_item" style="height: 85%;width: 100%;object-fit: cover" src="/data_images/${images[i]}" alt="">
                                    <div slot="${id}" onclick="delete_form_option(this.slot)"  class="btn btn-light form-control mt-1">xóa</div>
                                </div>`)
                    }
                }
            })
        })
        $('#sort_number').change(function () {
            if (Number($('#sort_number').val()) < 1) {
                $('#sort_number').val(1)
            }
        })
        $('#create_product').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3,
                },
                property: {
                    required: true,
                },
                value: {
                    required: true,
                },
                units: {
                    required: true,
                },
                notes: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: 'Tên sản phẩm không được bỏ chống',
                    minlength: '',
                },
                property: {
                    required: 'Thêm ít nhất 1 trường thông số để tiếp tục',
                },
                value: {
                    required: 'Thêm ít nhất 1 trường giá trị thông số để tiếp tục',
                },
                units: {
                    required: 'Thêm ít nhất 1 trường đơn vị để tiếp tục',
                },
                notes: {
                    required: 'Thêm ít nhất 1 trường ghi chú để tiếp tục',
                },
            }
        })
        $('.get_data_form_option').click(function () {
            var properties = document.querySelectorAll('.property_input');
            var units = document.querySelectorAll('.value_input');
            var values = document.querySelectorAll('.units_value');
            var notes = document.querySelectorAll('.notes_input');
            var thumbnail = document.getElementById('preview_thumbnail');
            var images = document.querySelectorAll('.images_item')

            if (images.length < 1) {
                $('.error_images').removeClass('d-none')
            } else {
                $('.error_images').addClass('d-none')
                var properties_array = [];
                var units_array = [];
                var values_array = [];
                var notes_array = [];
                var img_array = [];
                for (let i = 0; i < properties.length; i++) {
                    properties_array.push(properties[i].value)
                    units_array.push(units[i].value)
                    values_array.push(values[i].value)
                    notes_array.push(notes[i].value)
                }
                for (let i = 0; i < images.length; i++) {
                    img_array.push(images[i].src)
                }
                $('.thumbnail_input_hidden').val(`${img_array[0]}`)
                $('.images_input_hidden').val(JSON.stringify(img_array))
                $('.properties_input_hidden').val(JSON.stringify(properties_array))
                $('.units_input_hidden').val(JSON.stringify(units_array))
                $('.values_input_hidden').val(JSON.stringify(values_array))
                $('.notes_input_hidden').val(JSON.stringify(notes_array))
                $('#create_product').submit()
            }
        })

        function delete_form_option(id) {
            document.getElementById(`${id}`).remove()
        }
    </script>
@endsection

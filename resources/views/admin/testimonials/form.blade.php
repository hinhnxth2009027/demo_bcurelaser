@extends('admin.layouts.form')
@section('title', $detail ? 'Chỉnh sửa lời chia sẻ' : 'Thêm mới lời chia sẻ')

@section('form')
    <form action="" id="testimonial_form" method="post">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Tên khách hàng</label>
                <input type="text" class="form-control" name="name" value="{{$detail ? $detail->name : ''}}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Chức vụ</label>
                <input type="text" class="form-control" name="title" value="{{$detail ? $detail->title : ''}}">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <div class="position-relative form-group">
                    <label>Nội dung</label>
                    <textarea style="min-height: 150px" name="content" id="exampleText"
                              class="form-control">{!! $detail ? html_entity_decode($detail->content) : '' !!}</textarea>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Video (Link Youtube)</label>
                <input type="text" class="form-control" name="video" value="{{$detail ? $detail->video : ''}}">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Ngày tạo</label>
                <input type="date" class="form-control" name="date" value="{{$detail ? $detail->date : ''}}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Thứ tự ưu tiên</label>
                <input type="text" class="form-control" name="sort_number"
                       value="{{$detail ? $detail->sort_number : ''}}">
            </div>
        </div>
        <div class="row justify-content-end">
            <button class="btn btn-primary" type="submit" style="width: 100px">Gửi</button>
        </div>
    </form>
    <input type="hidden" id="perpage" value="testimonial">
    <input type="hidden" id="page_item" value="createTes">
@endsection

@section('custom_js')
    <script>
        $('#testimonial_form').validate({
            rules: {
                name: {
                    required: true
                },
                title: {
                    required: true
                },
                date: {
                    required: true
                },
                sort_number: {
                    required: true,
                    number: true
                },
                content: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: 'Vui lòng nhập tên người đánh giá'
                },
                title: {
                    required: 'Vui lòng nhập tiêu đề'
                },
                date: {
                    required: 'Vui lòng nhập vào ngày người này viết đánh giá'
                },
                sort_number: {
                    required: 'Vui lòng thêm thứ tự để sắp xếp trong bảng',
                    number: 'Vui lòng nhập giá trị ở dạng số'
                },
                content: {
                    required: 'Vui lòng nhập nội dung đánh giá'
                }
            }
        })
    </script>
@endsection


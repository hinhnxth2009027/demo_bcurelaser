@extends('admin.layouts.form')
@section('title', $detail ? 'Chỉnh sửa câu hỏi' : 'Thêm mới câu hỏi')

@section('form')
    <form method="post" id="form-faq">
        @csrf
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Câu hỏi</label>
                <input type="text" class="form-control" name="question" value="{{$detail ? $detail->question : ''}}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Thứ tự sắp xếp</label>
                <input type="text" class="form-control" name="sort_number"
                       value="{{$detail ? $detail->sort_number : ''}}">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <div class="position-relative form-group">
                    <label>Nội dung trả lời</label>
                    <textarea name="reply_content" class="form-control">
                                        {!! $detail ? html_entity_decode($detail->reply_content) : '' !!}
                                    </textarea>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12">
                <button class="btn btn-primary btn-block" type="submit">Gửi</button>
            </div>
        </div>
    </form>
    <input type="hidden" id="perpage" value="faq">
    <input type="hidden" id="page_item" value="createFaq">
@endsection

@section('custom_js')
    <script>
        CKEDITOR.replace('reply_content')
        $('#form-faq').validate({
            rules: {
                question: {
                    required: true,
                    minlength: 15,
                },
                reply_content: {
                    required: true,
                    minlength: 15,
                },
                sort_number: {
                    required: true,
                }
            },
            messages: {
                question: {
                    required: 'Câu hỏi không được để trống',
                    minlength: 'Câu hỏi tối thiếu phải từ 15 ký tự trở lên',
                },
                reply_content: {
                    required: 'Nội dung không được để trống',
                    minlength: 'Nội dung tối thiếu phải từ 15 ký tự trở lên',
                },
                sort_number: {
                    required: 'Thứ tự ưu tiên không được để trống',
                }
            }
        })
    </script>
@endsection

@extends('admin.layouts.table')
@section('title', 'Banner')

@section('sort_options')
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_ASC || $sort == '' ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NUMBER_ASC}}">Thứ tự tăng dần</option>
    <option {{$sort == \App\Enums\Sort::SORT_NUMBER_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::SORT_NUMBER_DESC}}">Thứ tự giảm dần</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_ASC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_ASC}}">Cũ nhất trước</option>
    <option {{$sort == \App\Enums\Sort::CREATED_AT_DESC ? 'selected' : ''}} value="{{\App\Enums\Sort::CREATED_AT_DESC}}">Mới nhất trước</option>
@endsection

@section('table_head')
    <tr>
        <th>Ảnh</th>
        <th>Đường dẫn</th>
        <th>Video</th>
        <th>Thứ tự</th>
        <th>Ngày tạo</th>
        <th class="col-action">Thao tác</th>
    </tr>
@endsection

@section('table_body')
    @foreach($list as $item)
        <tr>
            <td><img src="{{$item->thumbnail}}" alt=""
                     style="width: 90px;height: 50px;border-radius: 4px;object-fit: cover"></td>
            <td>
                <a target="_blank"
                   href="{{$item->order_target_url}}">{{$item->order_target_url}}</a>
            </td>
            <td>
                @if($item->video != null)
                    <button data-toggle="modal" data-target="#exampleModal"
                            slot="{{$item->video}}" style="width: 90px"
                            class="btn btn-warning open_video">Xem
                    </button>
                @else
                    Không có video
                @endif

            </td>
            <td>{{$item->sort_number}}</td>
            <td>{{$item->created_at->format('d-m-Y')}}</td>
            <td class="col-action">
                <a href="{{route('edit_banner',$item->id)}}" class="btn btn-info">Sửa</a>
                <a onclick="return confirm('Bạn có chắc muốn xóa banner này?')"
                   href="{{route('delete_banner',$item->id)}}" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
    @endforeach
    <input type="hidden" id="perpage" value="banner">
    <input type="hidden" id="page_item" value="list_banner">
@endsection

@section('modal')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xem trước</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="preview_video" style="width: 100%;height: 300px" src="" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
@endsection

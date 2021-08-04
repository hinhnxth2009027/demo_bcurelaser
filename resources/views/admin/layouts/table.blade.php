@extends('.admin.layouts.master')
@section('custom_style')
    <style>
        .col-action {
            width: 150px;
            text-align: center;
        }

        .table_header {
            margin: 0;
            padding: 0;
            height: 70px;
            display: flex;
            align-items: center;
        }

        .table_header > form {
            height: 100%;
            display: flex;
            align-items: center;
        }

        .table_header > form > div {
            height: 100%;
            display: flex;
            align-items: center;
            margin: 0;
        }
    </style>
@endsection
@section('main_content')
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body" style="padding-top:0 ">
                <div class="table_header col-12 row" style="position: relative">
                    <h4 class="card-title" style="margin: 0">@yield('title')</h4>&nbsp;&nbsp;&nbsp;
                    <form action="" id="filter-form">
                        <div class="form-group">
                            <div class="search-wrapper {{$search ? 'active' : ''}}">
                                <div class="input-holder">
                                    <input type="text" class="search-input" placeholder="Nhập từ khóa" name="search"
                                           value="{{$search ? $search : ''}}">
                                    <button type="button" class="search-icon"><span></span></button>
                                    {{--                                    <a href="{{route('')}}" class="d-none"></a>--}}
                                </div>
                                <button class="close btn_close_search"></button>
                            </div>
                        </div>
                        <div class="form-group select_filter" style="position: absolute;right: 10px">
                            <button class="btn btn-primary mr-2 btn_clear_filter" type="button" style="width: 150px">Xóa lọc</button>
                            @yield('extra_filters')
                            <select class="form-control" name="sort" id="sort">
                                @yield('sort_options')
                            </select>
                        </div>
                    </form>
                </div>
                <table class="mb-0 table table-bordered">
                    <thead>
                    @yield('table_head')
                    </thead>
                    <tbody>
                    @yield('table_body')
                    </tbody>
                </table>
            </div>
            <div class="col-11">
                @include('paginate.paginate', ['list' => $list])
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        $('#sort').change(function () {
            $('#filter-form').submit();
        })
        $('#type').change(function () {
            $('#filter-form').submit();
        })
        $('.open_video').click(function () {
            var link = this.slot.split('/')
            $('#preview_video').attr('src', 'https://www.youtube.com/embed/' + link[3])
        })
        $('.close').click(function () {
            $('#preview_video').attr('src', '')
        })
        $('#filter').change(function () {
            $('#filter-form').submit()
        })
        let submmit = false
        $('.search-icon').click(function () {
            if (submmit) {
                $('#filter-form').submit()
            } else {
                submmit = true
            }
        })
        $('.btn_close_search').click(function (event) {
            event.preventDefault()
            submmit = false
        })
        $('.btn_clear_filter').click(function (){
            let urls = window.location.href.split('?')
            if (urls.length > 1){
                window.location.replace(urls[0])
            }
        })

        $('.search-input').keyup(function (event){
            if (event.keyCode === 13 && !submmit){
                $('#filter-form').submit()
            }
        })

    </script>
@endsection

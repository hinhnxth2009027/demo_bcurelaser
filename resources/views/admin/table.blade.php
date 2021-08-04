@extends('.admin.layouts.master')
@section('title','Table | Admin')
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
                <div class="table_header col-12 row">
                    <h4 class="card-title" style="margin: 0">Table Name</h4>&nbsp;&nbsp;&nbsp;
                    <form action="#">
                        <div class="form-group">
                            <div class="search-wrapper">
                                <div class="input-holder">
                                    <input type="text" class="search-input" placeholder="Type to search">
                                    <button type="button" class="search-icon"><span></span></button>
                                </div>
                                <button class="close"></button>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created at</th>
                        <th class="col-action">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i = 0 ; $i < 10 ; $i++)
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>Demo user {{$i}}</td>
                            <td>Demoemail{{$i}}@gmail.com</td>
                            <td>09999999{{$i}}</td>
                            <td>{{$i}}-20-2021</td>
                            <td class="col-action">
                                <a href="#" class="btn btn-warning">Delete</a>
                                <a href="#" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
            <div class="col-11">
                <div class="dataTables_paginate paging_bs_normal" id="datatable-editable_paginate" style="float: right">
                    <ul class="pagination">
                        <li class="prev disabled"><a href="#"><span class="fa fa-chevron-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next"><a href="#"><span class="fa fa-chevron-right"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')

@endsection

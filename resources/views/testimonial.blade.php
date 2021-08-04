@extends('layouts.master')
@section('title', 'Chia sẻ của khách hàng')
@section('main')
    <div class="container p-5">
        <div class="row mt-3">
            <h1 class="text-center text-uppercase">Chia sẻ của khách hàng</h1>
        </div>
        <div class="row mt-4">
            @foreach($testimonials as $item)
                <div class="col-4" style="padding: 10px">
                    <div class="card" style="width: 100%;height: 100%">
                        <div class="row">
                            <iframe class="card-img-top" width="100%" height="300px" src="https://www.youtube.com/embed/{{explode('/',$item->video)[3]}}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$item->name}}, {{$item->title}}
                            </h5>
                            <p class="card-text">{{$item->content}}</p>
                        </div>
                        <div class="card-footer">{{date('d/m/Y',strtotime($item->date))}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('common.testimonials-text-slide')
@endsection

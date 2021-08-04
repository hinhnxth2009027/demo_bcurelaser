<div class="row">
    @foreach($featured_product as $item)
        <div class="col-md-4 col-12" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
                <h3>{{$item->name}}</h3>
                <img src="{{$item->thumbnail}}" class="img-fluid w-50" alt="">
                <div style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 5;-webkit-box-orient: vertical;">
                    {!! html_entity_decode($item->description) !!}
                </div>
                <div class="btn-wrap">
                    <a href="{{route('product_detail',$item->slug)}}" class="btn btn-primary">Xem thêm</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

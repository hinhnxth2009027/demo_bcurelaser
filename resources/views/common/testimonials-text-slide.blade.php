<section id="testimonials" class="testimonials">
    <div class="container" data-aos="zoom-in">

        <div class="section-title text-light">
            <h3>Dựa trên đánh giá của <span>Facebook</span></h3>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($reviews as $review)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{$review->thumbnail}}" class="testimonial-img" alt="">
                            <h3>{{$review->name}}</h3>
                            <h4>{{$review->title}}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                               {{$review->content}}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->

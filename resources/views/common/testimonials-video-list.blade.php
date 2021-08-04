<div class="row" style="margin: 0;padding: 0">
    @foreach($testimonials as $testimonial)
    <div class="col-md-4 pt-3" style="height: 330px">
        <iframe width="100%" height="85%" src="https://www.youtube.com/embed/{{explode('/',$testimonial->video)[3]}}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        <strong>{{$testimonial->name}}</strong>
        <p>{{date('d/m/Y',strtotime($testimonial->date))}}</p>
    </div>
    @endforeach
</div>

<style>
    .accordion-button {
        font-weight: normal;
    }

    .accordion-button:not(.collapsed) {
        color: white;
        font-weight: bold;
    }
</style>
<div class="row px-4">
    <div class="accordion" id="accordionExample">
        @for($i = 0;$i < count($faqs);$i++)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{$i}}">
                    <button class="accordion-button collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}"
                            aria-expanded="false" aria-controls="collapse{{$i}}">
                        {{$faqs[$i]->question}}
                    </button>
                </h2>
                <div id="collapse{{$i}}" class="accordion-collapse collapse"
                     aria-labelledby="heading{{$i}}" data-bs-parent="#accordionExample">
                    <div class="accordion-body text-start small" style="background-color: #FFF6EB">
                        {!! html_entity_decode($faqs[$i]->reply_content) !!}
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

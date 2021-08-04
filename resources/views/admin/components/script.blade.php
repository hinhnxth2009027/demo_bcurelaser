<script type="text/javascript" src="/libs/scripts/main.js"></script>
<script type="text/javascript" src="/libs/jquery/Script/jquery.min.js"></script>
<script type="text/javascript" src="/libs/jquery/Script/jquery.validate.min.js"></script>
<script type="text/javascript" src="/libs/jquery/Script/popper.min.js"></script>
<script type="text/javascript" src="/libs/jquery/Script/bootstrap.min.js"></script>
<script src="{{url('https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js')}}"></script>
@yield('custom_js')
<script>
    var sidebar_items = document.querySelectorAll('.sidebar_item')
    var page_items = document.querySelectorAll('.page_item')
    var perpages = document.getElementById('perpage')
    var page_item = document.getElementById('page_item')

    for (let i = 0; i < sidebar_items.length ; i++) {
        if (sidebar_items[i].slot === perpages.value){
            sidebar_items[i].classList.add('mm-active')
        }
    }

    for (let i = 0; i < page_items.length ; i++) {
        if (page_items[i].slot === page_item.value){
            page_items[i].classList.add('mm-active')
        }
    }


</script>

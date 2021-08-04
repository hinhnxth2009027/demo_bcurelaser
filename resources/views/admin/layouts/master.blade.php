<!doctype html>
<html lang="en">
@include('.admin.components.head')
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @yield('modal')
    @include('.admin.components.header')
    <div class="app-main">
        @include('admin.components.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner" style="position: relative">
                @yield('main_content')
            </div>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
</div>
@include('.admin.components.script')
</body>
</html>

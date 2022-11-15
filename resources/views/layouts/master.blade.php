<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body style="padding-top:4rem">
    @include('layouts.navbar')
    <div class="content">
        @yield('content')
    </div>
    @include('layouts.footer')
    @include('layouts.alert-swal')
</body>
@yield('js-extra')
</html>

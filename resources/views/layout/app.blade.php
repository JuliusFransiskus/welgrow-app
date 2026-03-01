<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.head')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div id="app-layout" class="overflow-x-hidden flex">

    @include('partial.navbar')

<div class="flex-1 flex flex-col min-h-screen">
    <div class="flex-1">
        @yield('content')
    </div>

        @include('partial.footer')
</div>
</div>

{{-- JS --}}
<script src="{{ asset('template/dashui/dist') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="{{ asset('template/dashui/dist') }}/assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="{{ asset('template/dashui/dist') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template/dashui/dist') }}/assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{ asset('template/dashui/dist') }}/assets/js/theme.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
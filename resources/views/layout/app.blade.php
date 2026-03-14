<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.head')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
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
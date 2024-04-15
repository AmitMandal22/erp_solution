<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.css-source')

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        <!-- Page Heading -->

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    <!-- common Footer -->
    @include('partials.footer')
    <!-- End common Footer -->

    @include('layouts.js-source')

</body>

</html>

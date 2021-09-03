<!DOCTYPE html>
<html lang="en">
    @include('frontend.templates.partials.head')
<body>
    <!-- Navbar  -->
    @include('frontend.templates.partials.navbar')

    <!-- Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Compiled and minified JavaScript -->
    @include('frontend.templates.partials.scripts')

    <!-- Toast  -->
    @include('frontend.templates.partials.toast')
</body>
</html>

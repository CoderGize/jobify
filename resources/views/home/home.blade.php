<!doctype html>
<html class="h-100" lang="en">

<head>
    @include('home.css')
</head>

<body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">

    @include('home.header')

    <main>

        @include('home.mission')

        @include('home.second')

        @include('home.service')

        @include('home.show')

        @include('home.pricing')

        @include('home.counter')

        {{-- @include('home.testimonial') --}}

        @include('home.contact')

    </main>

    @include('home.footer')

    @include('home.script')

</body>

</html>

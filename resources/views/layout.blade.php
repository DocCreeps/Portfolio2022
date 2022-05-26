@include('Component.head')
@include('Component.header')

<div id = "main" class = "row" >
    @yield('content')
</div>
@include('Component.ContactForm')
@include('Component.footer')

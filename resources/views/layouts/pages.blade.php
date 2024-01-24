<!DOCTYPE html>
<html lang="en">

@include('includes.head')
<body>
    <div class="container-xxl bg-white p-0">
        @include('includes.spinner')
        @include('includes.navbar')
        @include('includes.pageHeader')
        @stack('content')
        @include('includes.footer')
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('includes.js')

    
</body>

</html>
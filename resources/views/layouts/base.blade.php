<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    @include('includes.styles')
</head>
<body class="home-page home-01 ">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
@include('includes.header')

{{$slot}}

@include('includes.footer')

@include('includes.scripts')

</body>
</html>

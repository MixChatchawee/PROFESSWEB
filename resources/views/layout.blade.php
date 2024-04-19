<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profess rent and service</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('contents/icons/favicon-32x32.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/navbars/navbar-1/assets/css/navbar-1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href=" https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css " rel="stylesheet">
    <!-- font -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt"/> --}}
</head>

<body>
    @include('includes.header')
    <div class="content-parent" id="content">
        @yield('content')
    </div>
</body>
{{-- <script src="https://kit.fontawesome.com/2d98694e5f.js" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js" integrity="sha256-A+2opyqhvbBV8tbd9mIM8w9zvvMYHOawY03BQRtq7Kw=" crossorigin="anonymous"></script>



{{-- innit library --}}


<script>

    AOS.init({
        duration: 1100,
        once: true,
    });

    $('.fb-link-icon').click(() => {
        window.open("https://www.facebook.com/professrent/?locale=th_TH", '_blank');
    });

    $('.line-link-icon').click(() => {
        window.open("https://lin.ee/9gdmFJY", '_blank');
    });

    $('.map-link-icon').click(() => {
        window.open("https://maps.app.goo.gl/aBcSrYuKiL41Cmck6", '_blank');
    });

    $('.call-link-icon').click(() => {
        window.open('tel:' + '0219726934');
    });
</script>


<style>
    * {
        margin :0;
        padding :0;
        box-sizing : border-box;
        font-family: "Kanit", sans-serif;
        user-select: none;
    }

    :root {
        --main-color: #192458;
        --sec-color: #2b2b2b;
        --bs-dropdown-link-active-bg: #192458 !important;
    }

    .main-color {
        color: var(--main-color);
    }

    .sec-color{
        color: var(--sec-color);
    }

    .content-parent {
        margin-top: 56px;
        width: 100% !important;
    }

    .section-heading {
        font-size: 2.6rem;
        font-weight: 600;
    }

    .sub-section-heading {
        font-size: 2.2rem;
        font-weight: 600;
    }

    .container-fluid {
        --bs-gutter-x: 0; 
    }

</style>

</html>

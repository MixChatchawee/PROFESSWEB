<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('contents/icon/favicon-32x32.png') }}">

        {{-- <title>{{ config('app.name', 'Tasco International Co., Ltd.') }}</title> --}}

        <meta name="description" content="">
        
        <meta name="keywords" content="พัฒนาโปรแกรม , พนักงานขับรถ">

        <link rel="canonical" href="{{ url()->current() }}">
        <!-- font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt"/>

        {{-- <link rel="stylesheet" href="{{ asset('css/cookieconsent.css')}}" /> --}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}" />

        {{-- google font (thai = Anuphan , Eng = Poppins) --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">




        <link ref="stylesheet" href="{{ public_path('contents/fonts/arial-narrow/stylesheet.css') }}" />
    
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        {{-- boostrap5.2 --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    </head>

    <body class="">
        <div class="">
            @include('layouts.navigation')
            <!-- Page Content -->
            <main >
                {{ $slot }}
            </main>
            {{-- <span class="go-to-top" data-aos="fade-up" data-aos-duration="500" data-aos-offset="500">
                <i class="fa fa-chevron-circle-up"></i> Scroll to top
            </span> --}}

            @include('layouts.footer')
            {{-- @include('layouts.cookie_policy') --}}
        </div>
    </body>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- amimation  --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    

    <!-- add bootstrap 5 js file -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <!-- //add bundel js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
<style >

    body{
        margin:0;
        padding:0;
        /* font-size: calc(11px + 0.390625vw); */
        font-size: 1rem;
        overflow-x: hidden;
        max-width: 100%;
        box-sizing: border-box !important;
        /* font-family: "Roboto Condensed", "Anuphan"; */

        /* font-family: 'Anuphan', sans-serif; */
        font-family: 'Poppins', 'Anuphan' , sans-serif;
        font-weight: 300 !important;
    }

</style>

@extends('layout')
@section('content')
<div class="container-fluid" data-aos="fade" data-aos-easing="ease-in-out" data-aos-duration="700">
    <div class="row g-0" >
        <div class="col-12" >
            <div class="hero-image d-flex align-items-center justify-content-center">
                <div>about us</div>
                <div class="icon-contact-parent">
                    <div><img class=" fb-link-icon" src="{{ asset('contents/icons/fb.png') }}" alt="icon"></div>
                    <div><img class=" line-link-icon" src="{{ asset('contents/icons/line.png') }}" alt="icon"></div>
                    <div><img class=" call-link-icon" src="{{ asset('contents/icons/call.png') }}" alt="icon"></div>
                </div>
            </div>
        </div>

        @php
            $timelineData = [
                [
                    'image' => 'contents/icons/timeline-1.png',
                    'title' => '2535',
                    'text' => 'ได้สั่งสมประสบการณ์ ความรู้ ความสามารถ ด้านการบริหารงานบุคคลในสายงานต่างๆ อาทิ สายงานโรงงาน งานขนส่ง งานรับเหมาช่วงแรงงาน งานรถเช่า'
                ],
                [
                    'image' => 'contents/icons/timeline-2.png',
                    'title' => '2546',
                    'text' => 'ได้ผันตัวเองเข้าสู่ธุรกิจการบริหารพนักงานขับรถแบบเต็มตัว โดยก่อตั้งบริษัทฯ ขึ้นมารับบริหารและบริการพนักงานขับรถผู้บริหารโดยเฉพาะ ให้กับหน่วยงานภาครัฐและภาคเอกชน'
                ],
                [
                    'image' => 'contents/icons/timeline-3.png',
                    'title' => '2552',
                    'text' => 'ได้มาก่อตั้ง บริษัท โปรเฟส เร้นท์ แอนด์ เซอร์วิส จำกัด เพื่อพัฒนาพนักงานขับรถให้มีคุณภาพมากยิ่งขึ้น เราจะพัฒนาพนักงานขับรถ และบริการ ให้ตรงกับความต้องการของลูกค้า ให้ลูกค้าพึงพอใจ'
                ],
            ];
        @endphp
        <div class="col-12 mt-4 d-flex align-items-center justify-content-center col-timeline flex-wrap" >
            @foreach ($timelineData as $data)
                <div class="card border-0" style="width: 20rem;">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset($data['image']) }}" alt="timeline">
                        </div>
                        <h5 class="card-title mt-2 main-color">{{ $data['title'] }}</h5>
                        <p class="card-text">{{ $data['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-12 col-intro d-flex align-items-center justify-content-center flex-column">
            <div class="container">
                <div class="row text-center row-intro" data-aos="zoom-in">
                    <div>profess rent and service</div>
                    <div>บริษัท โปรเพส เร้นท์ แอนด์ เซอร์วิส จำกัด ก่อตั้งอย่างเป็นทางการ เมื่อวันที่ 16 กรกฏาคม 2552 โดยเติบโตจาก <br>
                        ธุรกิจด้านการบริหารทรัพยากรบุคคล โดยสำนักงานใหญ่ ตั้งอยู่ที่ หลักสี่ และให้บริการอีก 2 สาขา <br>
                        สาขาอาคารชาญอิสระ (กรุงเทพ) และ สาขานิคมอุตสาหกรรมปิ่นทอง 1 (ชลบุรี)</div>
                </div>
            </div>
        </div>

    </div>

</div>

<div class="container">
    <div class="row g-0">
        <div class="col-12 text-center mt-4 mb-5">
            <div class="container">
                <div class="main-color intro-sec d-flex align-items-center justify-content-center">
                    "โปรเฟส เร้นท์ เป็นผู้นำด้านงานบริการ สร้างคุณภาพชีวิตที่ดีให้กับ <br>พนักงานเพื่อการส่งมอบบริการที่ดี และเติบโตอย่างยั่งยืน"
                </div>
    
                <div class="mt-3">
                    เรายังมุ่งเน้นพัฒนาพนักงานและการให้บริการอย่างต่อเนื่องโดยคัดเลือกจัดแบ่ง มาตรฐานพนักงานขับรถตามความสามารถ <br>
                    ของพนักงาน เราคำนึงเสมอว่า เราจะพัฒนาพนักงานขับรถ และบริการให้ตรงกับความต้องการของลูกค้า  <br>
                    และได้รับประสบการณ์การใช้บริการที่เป็นเลิศ อันจะนำมาสู่ ความสำเร็จที่ตั้งใจไว้ 
                </div>
            </div>
        </div>
        <div class="col-12 mt-5 col-why-us-text">
            <div class="text-center main-color">
                WHY US
            </div>
        </div>
        @php
            $why_us = [
                [
                    'desc' => '<span class="main-color">ควบคุมมาตรฐาน</span> ด้วย</br>ระเบียบปฏิบัติงาน', 
                    'image' => 'contents/icons/why-1.png'
                ],
                [
                    'desc' => '<span class="main-color">การจัด Rateing</span> พนักงานขับรถ</br>ให้ง่ายต่อการตัดสินใจของลูกค้า', 
                    'image' => 'contents/icons/why-2.png'
                ],
                [
                    'desc' => '<span class="main-color">การเพิ่มความรู้</span> ความสามารถ</br>เพื่อความปลอดภัยของผู้ใช้บริการอยู่เสมอ', 
                    'image' => 'contents/icons/why-3.png'
                ],
                [
                    'desc' => '<span class="main-color">รักษาคุณภาพ</span>และมาตรฐานงาน</br>บริการด้วยการสุ่มตรวจอบรมประจำปีพนักงานเสมอ', 
                    'image' => 'contents/icons/why-4.png'
                ],
                [
                    'desc' => '<span class="main-color">ทีมปฏิบัติการ</span>ที่สามารถรับข้อร้องเรียนและให้คำปรึกษาได้', 
                    'image' => 'contents/icons/why-5.png'
                ],
                [
                    'desc' => '<span class="main-color">ดูแลคุณภาพ</span> พนักงานเพื่อ</br>การส่งมอบงานบริการที่ดี', 
                    'image' => 'contents/icons/why-6.png'
                ],
            ];
        @endphp
        <div class="col-12 d-flex flex-wrap justify-content-center col-why-us mt-5">
            @foreach ($why_us as $item)
                <div class="why-us-item text-center mx-1">
                    <img data-aos="zoom-in" src="{{ asset($item['image']) }}" alt="">
                    <div data-aos="fade-up" class="desc mt-2">{!! $item['desc'] !!}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@php
    $pro_service = [
        [
            'image' => 'contents/icons/pro-1.png',
            'desc' => 'บริการพนักงานขับรถผู้บริหาร
                ด้วยบริการระดับ Premium Luxury
                ด้วยคุณภาพที่เหนือระดับ  และบริการที่มีมาตรฐานที่ดีที่สุด สำหรับลูกค้าคนสำคัญของเรา'
        ],
        [
            'image' => 'contents/icons/pro-2.png',
            'desc' => 'บริการในการจัดทำ Application, Web Application, และโปรแกรมต่างๆ ตามความต้องการของลูกค้าเพื่อให้ลูกค้าได้รับความพึงพอใจสูงสุด'
        ],
        [
            'image' => 'contents/icons/pro-3.png',
            'desc' => 'บริการทำความสะอาดทั้งลูกค้าทั่วไปและกลุ่มลูกค้าองค์กร เราทำความสะอาดตามรูปแบบที่ลูกค้าต้องการ เรามีความซื่อสัตย์ต่อลูกค้า มีมาตรฐานการคัดกรอง'
        ]
    ];
@endphp

<div class="container-fluid mt-4">
    <div class="row g-0 row-pro-service">
        <div class="col-12 text-center main-text">
            เราเป็นมืออาชีพด้านบริการ
        </div>
        <div class="col-12 text-center sub-text">
            <span class="fst-italic">"</span>&nbsp;เพื่อส่งมอบบริการที่ดีให้คุณ&nbsp;<span class="fst-italic">"</span>
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-center mt-5">
            @foreach ($pro_service as $item)
                <div class="card mb-3 mb-lg-0" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset($item['image']) }}" alt="pro-service">
                        </div>
                        <p class="card-text text-center mt-3">
                            {{ $item['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach
    
        </div>
    </div>
</div>

@php
    $reward = [
        [
            'title' => 'Amazing Thailand Safety & Health Administration', 
            'desc' => 'มาตรฐานความปลอดภัยด้านสุขอนามัยสำหรับกิจการด้านการท่องเที่ยว', 
            'image' => 'contents/icons/reward-1.png'
        ],
        [
            'title' => 'ISO 9001', 
            'desc' => 'มาตรฐานบริหารงานคุณภาพระดับสากลที่เกี่ยวข้องกับการจัดการคุณภาพในองค์กร', 
            'image' => 'contents/icons/reward-2.png'
        ],
        [
            'title' => 'UKAS Management System', 
            'desc' => 'เป็นหน่วยงานให้การรับรองระดับประเทศเพียงแห่งเดียวที่รัฐบาลยอมรับในการประเมินองค์กรที่ให้บริการด้านการรับรองตามมาตฐานที่ตกลงกันในระดับสากล', 
            'image' => 'contents/icons/reward-3.png'
        ],
        [
            'title' => 'DBD ธรรมมาภิบาลธุรกิจ', 
            'desc' => 'การรับรองมาตรฐานธรรมาภิบาลธุรกิจ', 
            'image' => 'contents/icons/reward-4.png'
        ],
        [
            'title' => 'WELLNESS CNB AWARD', 
            'desc' => 'โครงการ "การพัฒนาสุขภาพขององค์กรเพื่อการสร้างชาติ"', 
            'image' => 'contents/icons/reward-5.png'
        ],
    ];
@endphp
<div class="container">
    <div class="row g-0 mt-4 d-flex justify-content-center row-reward">
        @foreach ($reward as $item)
            <div class="card-reward-parent">
                <div class="card h-100 mx-lg-2">
                    <div class="img-reward">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['desc'] }}</p>
                        <div class="flex justify-content-center align-items-center">
                            {{-- <div class="line-bottom"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="container-fluid">
    <div class="row g-0 row-reward-video">
        <div class="col-12 d-flex flex-wrap justify-content-center">
            <div class="me-lg-3 mb-2 mb-lg-0">
                <video autoplay loop muted playsinline>
                    <source src="{{ asset('contents/others/reward.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="slide-wraper">
                <div id="image-slider" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{ asset('contents/others/reward-1.png') }}">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('contents/others/reward-1.png') }}">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('contents/others/reward-1.png') }}">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('contents/others/reward-1.png') }}">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('contents/others/reward-1.png') }}">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('contents/others/reward-1.png') }}">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

    <div class="row g-0 row-company">
        <div class="col-12 main-text text-center ">
            หลายองค์กรให้ความไว้วางใจ
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-center mt-4">
            @for ($i = 1; $i <= 6; $i++)
                <div class="div-company-icon">
                    <img src="{{ asset('contents/icons/com-' . $i . '.png') }}">
                </div>
            @endfor
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-center">
            @for ($i = 7; $i <= 12; $i++)
                <div class="div-company-icon line-2">
                    <img src="{{ asset('contents/icons/com-' . $i . '.png') }}">
                </div>
            @endfor
        </div>
    </div>
</div>



@include('includes.footer')
@endsection

<script>
    document.addEventListener( 'DOMContentLoaded', function() {
        new Splide( '#image-slider' , {
            type : 'loop',
            autoplay:true,
        }).mount()
    } );
  </script>

<style>
    .hero-image {
        height: 620px;
        background-image: url('/contents/banner/about-us.png');
        background-size: cover;
        position: relative;
        background-attachment: fixed;
        /* @media only screen and (min-width: 600px) {
            background-size: 100% auto;
        } */

        div {
            color:white;
            text-transform: uppercase;
            font-size: 4rem;
            font-weight: 500;

            @media only screen and (max-width: 600px) {
                font-size: 3rem !important;
            }
        }

        .icon-contact-parent {
            right:-20px;
            position: absolute;
            top:100%;
            transform: translate(-50%,-50%) !important;
            
            img {
                width: 30px;
                height: 30px;
                margin-right: 10px;
                margin-bottom: 5px;
            }
        }

    }

    .row-company {
        .div-company-icon {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            height:120px;
            width:120px;
            border-right: 1px dotted black;
            border-bottom: 1px dotted black;

            overflow: hidden;
            img {
                width: 85%;
                transition: all 0.4s;
            }

            img:hover {
                transform: scale(1.3);
            }

            @media only screen and (max-width: 600px) {
                border:none;
            }
        }

        .div-company-icon:last-child {
            border-right: none;
        }

        .div-company-icon.line-2{
            border-bottom: none;
        }
    }


    .row-company {
        padding: 2.6rem 0;
        .main-text {
            font-size: 1.6rem;
            color: var(--main-color);
            font-weight: 500
        }
    }

    .row-reward-video {
        padding-top: 2rem;
        padding-bottom: 3.7rem;
        background-color: var(--main-color);

        video {
            width:400px;
        }

        .slide-wraper {
            width: 400;
            .splide__slide img {
                width: auto;
                height: 225px;
                object-fit: cover;
                width: 100%;
            }
        }
    }

    .row-reward {
        @media only screen and (min-width: 900px) {
            /* Styles for desktop */
            margin: 0 100px !important;
        }

        .card-reward-parent {
                text-align: center;
                color: var(--main-color) !important;
                width: 315px !important;
                display: flex;
                flex-wrap: wrap;
                margin: 20px 0;

                @media only screen and (max-width: 600px) {
                    margin: 10px 0;
                }

                .card {

                    transition: all 0.3s !important;
                    border-radius: 20px;
                    border:none !important;


                    .img-reward {
                        display: flex;
                        align-items: center;
                        justify-content: center;

                        img {
                            height: 100px;
                            margin: 30px auto; 

                            @media only screen and (max-width: 600px) {
                                height: 75px !important;
                            }
                        }

                    }

                    .card-body {
                        color: var(--main-color) !important;

                        .card-text {
                            margin-bottom: 10px !important;
                        }

                        .line-bottom {
                            width: 80%;
                            height: 2px;
                            background-color: #80808075;
                            margin-top: 10px !important;
                        }
                    }

                }

                .card:hover {
                    transform: translateY(-10px) !important; 
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                }
            }
    }

    .row-pro-service {
        padding : 3rem 0;
        color: white;
        background-color: var(--main-color);

        .main-text { 
            font-size: 2rem;
            font-weight: 500;
        }

        .card { 
            transition: all 0.3s;
            background-color: inherit;
            color: white;
            border-color: #ffffffa1;
            border-radius: 15px;
            margin: 0 0.7rem;
            
            .card-body {
                img {
                    height: 140px;
                    width: 140px;
                }

                padding: 2rem 1rem;
            }
        }


        .card:hover {
            transform: translateY(-10px) !important; 
            box-shadow: 0px 6px 20px -6px rgba(255,255,255,1) !important;
            border-color: #ffffff2e;
        }

        .sub-text {
            font-size: 1.25rem;
            font-weight: 500;
            margin-top: 5px;
        }
    }

    .col-why-us {
        padding: 0 160px !important;

        .why-us-item {
            font-weight: 500;
            margin-bottom: 40px;
            width: 206px;

            & img {
                height: 10rem;
                width: auto;
                border-radius: 50%;
            }

            & .text-en {
                color: var(--main-color)
            }

            & .text-th {
                font-size: 1.1rem;
            }
        }
    }

    .col-why-us-item {
        .item {
            width: 255px;

            .image-frame {
                height: 150px;
                width: 150px;
                background-size: cover;
                background-repeat: no-repeat;
                border-radius: 50%;
            }

        }
    }

    .intro-sec {
        font-weight: 500;
        font-size: 1.5rem;
    }

    .col-why-us-text {
        :nth-child(1) {
            font-size: 2.4rem;
            font-weight: 500;
        }
    }

    .col-intro {
        background-image: url('/contents/banner/intro.png');
        background-size: cover;
        position: relative;
        /* background-attachment: fixed; */
        height: 350px;
        color:white;
    }

    .row-intro {
        :nth-child(1) {
            font-size: 2.8rem;
            text-transform: uppercase;
            font-weight: 600;
            margin-bottom: 10px;

            @media only screen and (max-width: 600px) {
                font-size: 2rem;
            }
        }
    }

    .col-timeline {
        @media only screen and (min-width: 900px) {
            .card:not(:last-child) {
                border-right: 1px dotted !important;
                border-radius: 0;
                margin: 0 1rem;
            }
        }

        img {
            height: 100px;
        }
    }


</style>
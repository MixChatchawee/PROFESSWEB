@extends('layout')
@section('content')
    <div class="container-fluid" data-aos="fade" data-aos-easing="ease-in-out" data-aos-duration="700">
        <div class="hero-image d-flex align-items-center justify-content-center">
            <div class="content text-center text-white">
                <img class="logo-gold" src="{{ asset('contents/icons/logo-gold.png') }}" alt="Icon" >
            </div>
            <div class="bottom-right-items text-white icon-contact-parent" data-aos="zoom-in-left" data-aos-delay="700">
                <div>
                    <img class=" fb-link-icon" src="{{ asset('contents/icons/fb.png') }}" alt="icon">
                </div>
                <div>
                    <img class=" line-link-icon" src="{{ asset('contents/icons/line.png') }}" alt="icon">
                </div>
                <div>
                    <img class=" call-link-icon" src="{{ asset('contents/icons/call.png') }}" alt="icon">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center section-heading ">
                <span class="main-color">Smart Model</span> Development

            </div>
        </div>

        @php
            $model_line1 = [
                ['text_en' => 'Service Mine', 'text_th' => 'จิตบริการ ทัศนคติ', 'image' => 'contents/others/model-1.png'],
                ['text_en' => 'Knowledge', 'text_th' => 'ความรู้ในวิชาชีพ', 'image' => 'contents/others/model-2.png'],
                ['text_en' => 'Sefety', 'text_th' => 'ความปลอดภัย', 'image' => 'contents/others/model-3.png'],
                ['text_en' => 'Hohesty', 'text_th' => 'ซื่อสัตย์ไว้วางใจ', 'image' => 'contents/others/model-4.png'],
            ];

            $model_line2 = [
                ['text_en' => 'Healthy', 'text_th' => 'สุขภาพร่างกายที่ดี', 'image' => 'contents/others/model-5.png'],
                ['text_en' => 'Communication', 'text_th' => 'ภาษาการสื่อสาร', 'image' => 'contents/others/model-6.png'],
            ];
        @endphp

        <div class="row mt-4">
            <div class="col-12 d-flex flex-wrap justify-content-center">
                @foreach ($model_line1 as $item)
                    <div class="smart-model-parent text-center mx-3 mx-lg-5" ">
                        <img data-aos="zoom-in" src="{{ asset($item['image']) }}" alt="">
                        <div data-aos="fade-up" class="mt-2 text-en">{{ $item['text_en'] }}</div>
                        <div data-aos="fade-up" class="text-th">{{ $item['text_th'] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 d-flex flex-wrap justify-content-center">
                @foreach ($model_line2 as $item)
                <div class="smart-model-parent text-center mx-3 mx-lg-5">
                    <img data-aos="zoom-in" src="{{ asset($item['image']) }}" alt="">
                    <div data-aos="fade-up" class="mt-2 text-en">{{ $item['text_en'] }}</div>
                    <div data-aos="fade-up" class="text-th">{{ $item['text_th'] }}</div>
                </div>
            @endforeach
            </div>
        </div>
        
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center section-heading ">
                <span class="main-color">Services</span>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3 service-con">
        <div class="row g-0">
            <div class="col-12 service-parent driver-parent heading-service  text-white  d-flex flex-column align-items-center justify-content-center">
                <img  class="mb-4" src="{{ asset('contents/icons/driver-white.png') }}" alt="Icon">
                <div > Driver </div>
                <div > Car Service </div>
                <a href="{{ route('profess_rent') }}" class="read-more">อ่านเพิ่มเติม</a>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-6 col-12 text-center service-parent it-parent heading-service  text-white  d-flex flex-column align-items-center justify-content-center">
                <img  class="mb-4" src="{{ asset('contents/icons/it-white.png') }}" alt="Icon">
                <div> It outsources </div>
                <div> Software & Development</div>
                <a href="https://www.professtech.co.th/" target="_blank" class="read-more">อ่านเพิ่มเติม</a>
            </div>
            <div class="col-md-6 col-12 service-parent clean-parent heading-service  text-white  d-flex flex-column align-items-center justify-content-center">
                <img  class="mb-4" src="{{ asset('contents/icons/house-white.png') }}" alt="Icon">
                <div> Housekeeper </div>
                <div> Cleaning Services </div>
                <a href="{{ route('profess_rent') }}" class="read-more">อ่านเพิ่มเติม</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center section-heading ">
                <span class="main-color">
                    ได้รับการรับรอง
                </span>
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
        <div class="row mt-4 d-flex justify-content-center row-reward">
            @foreach ($reward as $item)
                <div class="card-reward-parent">
                    <div class="card h-100" data-aos="fade-up">
                        <div class="img-reward">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['title'] }}</h5>
                            <p class="card-text">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 section-heading text-center">
                <div class="section-heading text-center">
                    <span class="main-color">We Are</span> Professional
                </div>
            </div>
            <div class="col-12 section-heading">
                <div class="sub-section-heading text-center">
                    "Good Service <span class="main-color">Experience For you</span>"
                </div>
            </div>
        </div>

        <div class="row mt-4 d-flex justify-content-center row-customer-review">
            @for ($y = 0; $y < 3; $y++)
                <div class="card-customer-review">
                    <div class="card h-100" data-aos="fade-up">
                        <div class="img-customer text-center">
                            <img src="contents/others/model-1.png" alt="{{ $item['title'] }}">
                        </div>
                        <div class="card-body text-center">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa fa-star main-color"></i>
                            @endfor
                            <h6 class="card-title sec-color">Best Take Care</h6>
                            <p class="card-text main-color">{{ $item['desc'] }}</p>
                            <div class="">Ampapan Chaiya</div>
                            <div class="">รีวิวจากผู้ใช้จริง</div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>

@include('includes.footer')
@endsection
<style>

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-image {
        height: 680px;
        background-image: url('/contents/banner/index.png');
        background-size: cover;
        position: relative;
        background-attachment: fixed;

        /* @media only screen and (min-width: 600px) {
            background-size: 100% auto;
        } */

        .icon-contact-parent img {
            height: 30px;
            transition: transform 0.3s ease;
            margin-bottom: 10px;
        }

        .icon-contact-parent img:hover {
            transform: scale(1.4);
            cursor: pointer;
        }

        .bottom-right-items {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }

        .content {
            .logo-gold {
                width: auto;
                height: 200px;

                opacity: 0; 
                animation: fadeInUp 1s ease-in-out 0.5s forwards; 
            }
        }
    }

    .smart-model-parent {
        font-weight: 500;
        margin-bottom: 40px;

        & img {
            height: 8rem;
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

    .service-con {
        .row {
            .service-parent {
                font-weight: 500;
                font-size: 1.2rem;
                text-transform: uppercase;

                & img {
                    width: 70px;
                    height: 70px;
                    margin-bottom: 10px;
                }
            }

            .driver-parent {
                height: 450px;
                background-image: url('/contents/others/bg-driver.jpg');
                background-size: cover;
                position: relative;
            }

            .it-parent {
                height: 400px;
                background-image: url('/contents/others/bg-it.jpg');
                background-size: cover;
                position: relative;
            }

            .clean-parent {
                height: 400px;
                background-image: url('/contents/others/bg-house.jpg');
                background-size: cover;
                position: relative;
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
                border-radius: 20px;
                border:none !important;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

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
                }
            }
        }
    }

    .card-customer-review {
        width: 300px !important;
        margin: 20px 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        min-height: 370px;

        .card {
            border-radius: 17px;

            .img-customer img{
                height: 135px;
                margin-top:20px;
            }

            .card-title{
                color: var(--sec-color) !important;    
                font-weight: 400;
                font-style: italic;
            }
        }
    }

    .read-more {
        margin-top: 10px;
        font-size:0.8rem;
        width: 160px;
        height: 32px;
        display: flex !important;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: inherit;
        background: var(--main-color);
        transition: all 0.3s ease-in-out;

        &:hover {
            background: #04091e;
        }
    }

</style>

@extends('layout')
@section('content')

@php
    $why_us = [
        [
            'image' => 'contents/icons/why_us_1.png',
            'title' => 'ควบคุมมาตฐาน',
            'text' => 'ควบคุมมาตรฐาน ด้วยระเบียบปฏิบัติงาน standard Operating Procedure การสรรหาพนักงาน'
        ],
        [
            'image' => 'contents/icons/why_us_2.png',
            'title' => 'เพิ่มความรู้',
            'text' => 'ควบคุมมาตรฐานงานบริการด้วยการเพิ่มความรู้ ความสามารถ เพื่อความปลอดภัย ของผู้ใช้บริการอยู่เสมอ'
        ],
        [
            'image' => 'contents/icons/why_us_3.png',
            'title' => 'ความปลอดภัย',
            'text' => 'การสุ่มตรวจสอบ อบรมประจำปี ตรวจสุขสาพพนักงานประจำปีเสมอ'
        ],
    ];
@endphp
<div class="container-fluid" data-aos="fade" data-aos-easing="ease-in-out" data-aos-duration="700">
    <div class="row g-0">
        <div class="col-12">
            <div class="hero-image d-flex justify-content-center">
                <span class="content-hero">
                    <div class="text-th">ทำไมต้องเลือกเรา</div>
                    <div class="text-en">PROFESS RENT AND SERVICE</div>
                </span>
                {{-- <div class="icon-contact-parent">
                    <div><img class=" fb-link-icon" src="{{ asset('contents/icons/fb.png') }}" alt="icon"></div>
                    <div><img class=" line-link-icon" src="{{ asset('contents/icons/line.png') }}" alt="icon"></div>
                    <div><img class=" call-link-icon" src="{{ asset('contents/icons/call.png') }}" alt="icon"></div>
                </div> --}}
            </div>
        </div>

        <div class="col-12 mt-4 d-flex justify-content-center col-timeline flex-wrap" >
            @foreach ($why_us as $data)
                <div class="card border-0" style="width: 20rem;">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset($data['image']) }}" alt="timeline">
                        </div>
                        <h5 class="card-title mt-3 main-color">{{ $data['title'] }}</h5>
                        <p class="card-text">{{ $data['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid mt-5 main-card-con">
    <div class="row g-0 main-card-row ">
        <div class="col-lg-6 col-12 position-relative">
            <div class="bg-1">
                <div class="wrap-text">
                    <div>คัดกรองพนักงาน</div>
                    <div class="go-to-section" data-section="screening-section">อ่านเพิ่มเติม</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12 position-relative">
            <div class="bg-2">
                <div class="wrap-text">
                    <div>อบรมพนักงาน</div>
                    <div class="go-to-section" data-section="training-section">อ่านเพิ่มเติม</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12 position-relative">
            <div class="bg-3">
                <div class="wrap-text">
                    <div>Audit พนักงาน</div>
                    <div>อ่านเพิ่มเติม</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="screening-section" class="container mt-5 screening-con">
    <div class="row d-flex justify-content-center"">
        <div class="col-12 text-center text-head">
            การคัดกรองพนักงานขับรถ
        </div>
        <div class="col-12 text-desc">
            ในขั้นตอนการสรรหาบุคลากรให้ตรงกับความต้องการของลูกค้า บริษัทจำเป็นจะต้องมีการทดสอบคุณสมบัติต่างๆ เช่น ความเชี่ยวชาญในเส้นทางต่างๆ ทักษะทางด้านภาษาต่างประเทศ ตรวจสุขสภาพ และ รวมถึงตรวจสอบประวัติอาชญากรด้วย
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center">
            <img class="emp-img" src="{{ asset('contents/others/emp.png') }}" alt="emp">
        </div>
    </div>

    <div class="row mt-5 row-process">
        <div class="col-12 text-center text-head">
            ขั้นตอนการคัดกรอง
        </div>
    </div>

    @php
        $process = [
            [
                'image' => 'contents/icons/process-1.png',
                'title' => 'Seacrch/Walk-in',
                'desc' => 'ผู้ที่มีประสบการณ์ในการขับรถผู้บริหาร และมีใจบริการ'
            ],
            [
                'image' => 'contents/icons/process-2.png',
                'title' => 'Interview',
                'desc' => 'สัมภาษณ์งานด้วยเจ้าหน้าที่คัดกรอง ที่มีประสบการณ์'
            ],
            [
                'image' => 'contents/icons/process-3.png',
                'title' => 'Health Examination',
                'desc' => 'ตรวจร่างการและสารเสพติด'
            ],
            [
                'image' => 'contents/icons/process-4.png',
                'title' => 'Criminal Record',
                'desc' => 'ตรวจสอบประวัติอาชญากร'
            ],
            [
                'image' => 'contents/icons/process-5.png',
                'title' => 'Defensive Driving',
                'desc' => 'Test Drive และทำแบบทดสอบเพื่อวัดความรู้ด้านต่างๆ เช่น กฏหมายจราจร , การขับขี่อย่างปลอดภัย , เส้นทาง , สถานที่'
            ],
            [
                'image' => 'contents/icons/process-6.png',
                'title' => 'Orientation',
                'desc' => 'อบรมก่อนส่งพนักงานไปบริการลูกค้า'
            ],
            [
                'image' => 'contents/icons/process-7.png',
                'title' => 'Audit',
                'desc' => 'กรณีลูกค้าต้องการสัมภาษณ์ ให้ลูกค้าแจ้งความประสงค์ดังกล่าว เพื่อจัดส่งพนักงานเข้าสัมภาษณ์ก่อนเริ่มงานได้'
            ],
        ];
    @endphp

    <div class="row g-0 row-process">
        <div class="col-12 d-flex flex-wrap justify-content-center mt-4">
            @for ($i = 0; $i <= 3; $i++)
                <div class="div-process d-flex align-items-center flex-column">
                    <div class="frame-process mt-3">
                        <img src="{{ $process[$i]['image'] }}">
                    </div>
                    <div class="wrap-text-title">
                            {{ $process[$i]['title'] }}
                    </div>
                    <div class="px-1">
                        {{ $process[$i]['desc'] }}
                    </div>
                </div>
            @endfor
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-center">
            @for ($i = 4; $i <= 7; $i++)
            <div class="div-process d-flex align-items-center flex-column line-2">
                    @if($i != 7)
                        <div class="frame-process mt-3">
                            <img src="{{ $process[$i]['image'] }}">
                        </div>
                        <div class="wrap-text-title">
                            {{ $process[$i]['title'] }}
                        </div>
                        <div class="px-1">
                            {{ $process[$i]['desc'] }}
                        </div>
                    @endif
                </div>
            @endfor
        </div>
    </div>
</div>

<div class="container-fluid screening-select-con py-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  col-12">
                <div class="text-center text-head">
                    การสรรหาและคัดเลือกพนักงาน
                </div>
                <div class="text-head mt-2">
                    RECRUITMENT
                </div>
                <ul>
                    <li>Search/Walk-in</li>
                    <li>Interview</li>
                    <li>Health Eaxmination</li>
                    <li>Crimanal Record</li>
                </ul>

                <div class="text-head mt-2">
                    TRAINING & AUDIT
                </div>
                <div>Refresh Training</div>
                <ul>
                    <li>Defensive Driving</li>
                    <li>Service mind</li>
                </ul>

                <div>Orientation</div>
                <ul>
                    <li>Orientation introduction company</li>
                    <li>Basic driving</li>
                </ul>

                <div>Audit</div>
                <ul>
                    <li>twice a year</li>
                </ul>
            </div>
            <div class="col-lg-6 col-12 d-flex align-items-center">
                <img class="driver-img" src="{{ asset('contents/others/2-men.png') }}">
            </div>
        </div>
    </div>
</div>

@php

    $testing = [
        [
            'title' => 'การสอบข้อเขียน', 
            'image' => 'contents/icons/testing-1.png'
        ],
        [
            'title' => 'ทดสอบเส้นทาง', 
            'image' => 'contents/icons/testing-2.png'
        ],
        [
            'title' => 'ทดสอบสถานที่', 
            'image' => 'contents/icons/testing-3.png'
        ],
        [
            'title' => 'ทดสอบการขับขี่', 
            'image' => 'contents/icons/testing-4.png'
        ],
        [
            'title' => 'ทดสอบตาบอดสี', 
            'image' => 'contents/icons/testing-5.png'
        ],
        [
            'title' => 'ตรวจสอบประวัติอาชญากร', 
            'image' => 'contents/icons/testing-6.png'
        ],
        [
            'title' => 'ตรวจหาสารเสพติด', 
            'image' => 'contents/icons/testing-7.png'
        ],
    ]
@endphp
<div class="container testing-con mt-5">
    <div class="row">
        <div class="col-12 text-head text-center">
            การทดสอบ
        </div>
        <div class="wrap-content d-flex flex-wrap mt-2 ">
            @foreach ($testing as $test)
            <div class="card shadow-sm m-2">
                <img src="{{ asset($test['image']) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title text-center">{{ $test['title'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div id="training-section" class="container training-con mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-12 text-head text-center">
            การอบรมพนักงานขับรถ
        </div>
        <div class="col-12 text-desc">
            อบรมประจำปี ในหัวข้อต่างๆ ที่เกี่ยวข้องกับการขับขี่ และงานบริการ อย่างน้อยปีละ 1-2 ครั้ง (หรือตามที่ตกลง) ทั้งรูปแบบที่เข้าไปอบรมให้ในหน่วยงานของลูกค้าและนอกสถานที่
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 col-course mt-4 d-flex justify-content-center">
            <div class="card shadow border-0 mb-2 mb-lg-0">
                <div class="card-body">
                    <h5 class="card-title main-color">
                        รายชื่อหลักสูตร / วิชา
                    </h5>

                    <div class="d-flex flex-wrap">
                        <div class="card-text me-lg-5">
                            <div>การขับขี่เชิงป้องกันอุบัติเหตุ (Defensive Driving)</div>
                            <div>การมีหัวใจบริการของพนักงานขับรถ (Service Mind For Chauffeur)</div>
                            <div>การตรวจสภาพรถให้พร้อมใช้งาน</div>
                            <div>การปฐมพยาบาลฉุกเฉินสำหรับพนักงานขับรถ</div>
                            <div>กฎหมายที่เกี่ยวข้องกับการขับขี่</div>
                            <div>ความรู้ประกันภัย และ พ.ร.บ. ผู้ประสบภัยจากรถ</div>
                            <div>ระบบทางด่วน ถนน ป้ายจราจรต่างๆ ทางหลวงหมายเลขต่างๆ ในประเทศไทย</div>
                        </div>
    
                        <div class="card-text">
                            <div>ภาษาอังกฤษสำหรับพนักงานขับรถ</div>
                            <div>หน้าที่และความรับผิดชอบของพนักงานขับรถ</div>
                            <div>จรรยาบรรณการประกอบวิชาชีพพนักงานขับรถ</div>
                            <div>การบริหารการเงิน และหนี้สิน</div>
                            <div>ข้อร้องเรียนพนักงานขับรถที่พบบ่อย</div>
                            <div>หัวข้ออื่นๆ ตามสถานการณ์ปัจจุบัน</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-center mt-4">
            <div class="line-end-section"></div>
        </div>
    </div>
    
</div>


<div class="container-fluid best-emp-con mt-5">
    <div class="row best-emp-row">
        <div class="col-lg-6 col-12 d-none d-lg-flex"></div>
        <div class="col-lg-6 col-content col-12 d-flex flex-column justify-content-center" style="">
            <div class="text-head">พนักงานขับรถที่พึงประสงค์</div>
            <div>อาชีพพนักงานขับรถเป็นอาชีพที่ต้องการใช้ทักษะ ความรู้ ความสามารถที่หลากหลาย และ รอบด้าน (Multiskill) และเกิดจากภายในตนเอง (ใช้ทฤษฏีในภายนอก)</div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 slide-wraper">
            <div class="text-center header-slide">
                บรรยากาศการอบรม
            </div>
            @php
                $images = [
                    'slide-1.png',
                    'slide-2.png',
                    'slide-3.png',
                    'emp.png',
                ];
            @endphp
            <section id="image-carousel" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($images as $image)
                            <li class="splide__slide">
                                <img src="{{ asset('contents/others/' . $image) }}" alt="">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="container-fluid audit-con">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="text-center">
                <img src="{{ asset('contents/others/audit.png') }}" class="img-fluid" alt="">
            </div>
        </div>
         <div class="col-lg-6 col-12 ">
            <div class="mx-5">
                <div class="text-head">การ Audit พนักงานขับรถ</div>
                <div>ด้วยความใส่ใจลูกค้า ทางบริษัท ๆ ที่ไปประจำกับลูกค้าปีละ 2 ครั้ง และรายงานผลเพื่อให้ลูกค้ารับทราบอย่างเป็นระบบ ทั้งนี้เพื่อความมั่นใจในคุณภาพงานบริการของเรา</div>
                <div class="mt-3"> <i class="fa fa-solid fa-circle"></i> <b>ตรวจแอลกอฮอร์</b> พนักงานกองกลางที่เตรียมทดแทนงาน 100% ทุกวันก่อนเริ่มงาน</div>
                <div class="mt-3"> <i class="fa fa-solid fa-circle"></i> <b>อบรมประจำปี</b> กลุ่มพนักงานที่ให้บริการลูกค้า หลักสูตรการเป็นพนักงานขับรถประสิทธิภาพสูง</div>
                <div class="mt-3"> <i class="fa fa-solid fa-circle"></i> <b>Surprises-Check</b> พนักงานที่ให้บริการลูกค้าจากนั้นส่งผลให้ลูกค้าลงนามรับทราบ</div>
            </div>
        
        </div>
    </div>
</div>
@php

    $process = [
        [
            'title' => 'ตรวจสารเสพติด', 
            'image' => 'contents/others/audit-p1.png'
        ],
        [
            'title' => 'ตรวจวัดระดับแอลกอฮอล์', 
            'image' => 'contents/others/audit-p2.png'
        ],
        [
            'title' => 'ตรวจการแต่งกาย', 
            'image' => 'contents/others/audit-p3.png'
        ],
        [
            'title' => 'ตรวจสอบพรบ. ประกันภัย เพื่อให้พนักงานใส่ใจ และมีการแจ้งเตือนลูกค้ากรณีใกล้ถึงรอบต่ออายุ', 
            'image' => 'contents/others/audit-p4.png'
        ],
        [
            'title' => 'ตรวจสอบสภาพรถ เช่น เครื่องยนต์  , รอบการเปลี่ยนยาง , น้ำมันเครื่อง และความสะอาดของเครื่องยนต์', 
            'image' => 'contents/others/audit-p5.png'
        ],
    ]
@endphp
<div class="container audit-process-con mt-5">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center text-head">
            <span class="line"></span> รายการ Audit <span class="line"></span>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="wrap-content d-flex justify-content-center  flex-wrap mt-2 ">
                @foreach ($process as $item)
                <div class="card border-0 m-2" style="width: 18rem">
                    <div class="shadow-sm">
                        <img src="{{ asset($item['image']) }}" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <p class="card-title text-center">{{ $item['title'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>




<script>

    document.addEventListener("DOMContentLoaded", function() {
        var goToSectionLinks = document.querySelectorAll('.go-to-section');

        goToSectionLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                var sectionId = link.getAttribute('data-section');

                var section = document.getElementById(sectionId);

                var navbarHeight = document.getElementById('navbar').offsetHeight;

                window.scrollTo({
                    top: section.offsetTop - navbarHeight,
                    behavior: 'smooth'
                });
            });
        });
    });


    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-carousel', {
            type : 'loop',
            perPage: 3,
            breakpoints: {
                640: {
                    perPage: 1,
                },
            },
            perMove: 1,
            autoplay: true,
            // autoScroll: {
            //     speed: 1,
            // },
            gap : '1.3rem',
        } ).mount();
    } );
</script>

<style>


    .audit-process-con {
        .text-head{
            color : var(--main-color);
            font-size: 1.7rem;
            font-weight: 600;

            .line {
                display: inline-block;
                width: 30%;
                border-top: 2px solid #cecece;
                margin: 0 35px;

                @media only screen and (max-width: 601px) {
                    width: 10%;
                    margin: 0 28px;
                }
            }

        }
        .wrap-content {
            @media only screen and (min-width: 601px) {
                margin:0 10rem;
            }
        }
    }



    .best-emp-con {
        background-color:var(--main-color);
        padding: 25px 109px;
        @media only screen and (max-width: 600px) {
            padding: 10px 10px;
        }
        .best-emp-row {
            min-height: 448px;
            background-image: url('/contents/others/bg-best.png');
            background-size: cover;
            .text-head {
                font-size: 1.7rem;
                font-weight: 600;
                color: var(--main-color);
            }
            .col-content {
                width: 30%;
                @media only screen and (max-width: 600px) {
                    width: 100%;
                }
            }
        }
    }

    .audit-con {
        margin-top: 6rem !important;
        .text-head {
            color : var(--main-color);
            font-size: 1.7rem;
            font-weight: 600;
        }

        i {
            color: var(--main-color);
        }
    }



    .slide-wraper {
        padding: 10px;
        background-color: #b8b8b8;
        .splide__slide img {
            width: auto;
            height: 300px;
            object-fit: cover;
            width: 100%;
        }

        .header-slide {
            font-size: 1.6rem;
            font-weight: 500;
            margin: 10px auto;
        }
    }
            
    .hero-image {
        height: 620px;
        background-image: url('/contents/banner/why-us.png');
        background-size: cover;
        position: relative;
        background-attachment: fixed;
        
        @media only screen and (max-width: 601px) {
            .text-th {
                font-size: 3rem !important;
                text-align: center;
            }

            .text-en {
                font-size: 1.5rem !important;
                text-align: center;
            }
        }

        span.content-hero {

            @media only screen and (min-width: 601px) {
                position: absolute;
                bottom: 15%;
                right: 20%;
            }

            @media only screen and (max-width: 600px) {
                margin:auto !important;
            }
        }

        div {
            color:white;
            text-transform: uppercase;
            font-size: 4rem;
            font-weight: 500;
            width:100%;
        }

        .text-en {
            font-size: 2.2rem;
        }

        /* .icon-contact-parent {
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
        } */

    }

    .testing-con {
        div.text-head {
            color : var(--main-color);
            font-size: 1.7rem;
            font-weight: 600;
        }

        .wrap-content {

            @media only screen and (max-width: 600px) {
                justify-content: center;
            }

            .card {
                border: none;
                width: 18rem;
                @media only screen and (max-width: 600px) {
                    width: 9rem;
                }

                .card-title {
                    font-size: 1.3rem;
                    font-weight: 500;
                    color : var(--main-color);
                    @media only screen and (max-width: 600px) {
                        font-size: 1rem;
                    }
                }
            }
        }
    }

    .line-end-section {
        width: 50px;
        height: 4px;
        background-color: var(--main-color);
    }

    .col-course {
        .card {
            /* width: 27rem; */
            display: inline-block;
            border-radius: 14px;
            margin-left: 15px;
            padding: 20px;
            @media only screen and (max-width: 600px) {
                padding: 6px;
                width: auto;
            }

            .card-body {
                .card-text div {
                    margin-bottom: 7px;
                    position: relative;
                    padding-left: 30px;
                }

                .card-text div::before {
                    content: "";
                    position: absolute;
                    left: 0;
                    top: 50%;
                    transform: translateY(-50%);
                    width: 30px; 
                    height: 20px;
                    background-image: url('{{ asset('contents/icons/checked.png') }}'); 
                    background-size: contain;
                    background-repeat: no-repeat;
                }

                .card-text img {
                    height: 23px;
                }

                a {
                    border-radius: 17px;
                }
            }
        }
    }

    .training-con {
        div.text-head {
            color : var(--main-color);
            font-size: 1.7rem;
            font-weight: 600;
        }

        div.text-desc {
            color : var(--sec-color);
            @media only screen and (min-width: 900px) {
                width: 50%;
            }
        }
    }


    .screening-select-con {
        background-color: #c6c6c6;
        
        .driver-img {
            height: 18rem;

            @media only screen and (max-width: 600px) {
                width: 100%;
                height: auto;
            }

        }

        .text-head {
            font-size: 1.5rem;
            font-weight: 500;
        }
    }

    .row-process {
        .div-process {
            text-align: center;
            text-transform: uppercase;
            height: 289px;
            width: 178px;
            border-right: 1px dotted black;
            border-bottom: 1px dotted black;

            @media only screen and (max-width: 600px) {
                border:none;
                width: 150px;
            }
        }

        .frame-process {
            width: 90px; 
            height: 90px; 
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .frame-process img {
            max-width: 100%; 
            max-height: 100%; 
        }

        .wrap-text-title {
            height: 56px;
            display: flex;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .div-process:last-child {
            border-right: none;
        }

        .div-process.line-2{
            border-bottom: none;
        }
    }

    .screening-con {
        div.text-head {
            color : var(--main-color);
            font-size: 1.7rem;
            font-weight: 600;
        }

        .emp-img {
            height: 360px;
            @media only screen and (max-width: 900px) {
                width: 100%;
                height: auto;
            }
        }

        div.text-desc {
            color : var(--sec-color);
            @media only screen and (min-width: 900px) {
                width: 50%;
            }
        }
    }

    .main-card-con {

        .main-card-row {
            padding:  1.4rem;
            background-color : #c6c6c6;
            color: white;
 
            .bg-1 { 
                height: 550px;
                background-image: url('/contents/others/main-card-1.png');
                background-size: cover;

                .wrap-text {
                    position: absolute;
                    bottom: 15%;
                    left: 50%;
                    transform: translate(-50%,0);
                    text-align: center;

                    :first-child {
                        font-size: 1.7rem;
                        font-weight: 500;
                    }
                    :last-child{
                        text-decoration: none;
                        display: inline-block;
                        margin-top:10px;
                        border:2px solid white;
                        color: white;
                        padding: 3px;
                        padding: 3px 30px;
                    }
                }
            }

            .bg-2 {
                height: 550px;
                background-image: url('/contents/others/main-card-2.png');
                background-size: cover;

                .wrap-text {
                    position: absolute;
                    bottom: 15%;
                    left: 20%;
                    text-align: center;

                    :first-child {
                        font-size: 1.7rem;
                        font-weight: 500;
                    }
                    :last-child{
                        text-decoration: none;
                        display: inline-block;
                        margin-top:10px;
                        border:2px solid white;
                        color: white;
                        padding: 3px;
                        padding: 3px 30px;
                    }
                }
            }
            .bg-3 {
                height: 550px;
                background-image: url('/contents/others/main-card-3.png');
                background-size: cover;

                .wrap-text {
                    position: absolute;

                    bottom: 15%;
                    left: 20%;
                    text-align: center;

                    :first-child {
                        font-size: 1.7rem;
                        font-weight: 500;
                    }
                    :last-child{
                        text-decoration: none;
                        display: inline-block;
                        margin-top:10px;
                        border:2px solid white;
                        color: white;
                        padding: 3px;
                        padding: 3px 30px;
                    }
                }
            }

            .wrap-text :nth-child(2){
                transition: all 0.2s ease-out;
            }

            .wrap-text :nth-child(2):hover{
                cursor: pointer;
                background-color: white;
                color: var(--main-color);
                /* color: rgba(0, 0, 0, 0.9); */
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
@include('includes.footer-light')
@endsection
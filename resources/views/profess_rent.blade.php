@extends('layout')
@section('content')
    <div class="container" style="max-width:720px">
        <div class="row text-center">
            <div class="col-12 mt-5 ">
                <span class="text main-text main-color"></span>
                <div class="mt-2">
                    เรามุ่งเน้นพัฒนาพนักงานและการใช้บริการอย่างต่อเนื่องโดยคัดเลือกจัดแบ่ง มาตรฐานพนักงานขับรถตามความสามารถของพนักงาน 
                    เราคำนึงเสมอว่า เราจะพัฒนาพนักงานขับรถ และบริการให้ตรงกับความต้องการของลูกค้า 
                    และได้รับประสบการณ์การใช้บริการที่เป็นเลิศ อันจะนำมาสู่ ความสำเร็จที่ตั้งใจไว้
                </div>

                <div class="mt-3 main-color">
                    <div>"โปรเฟส เร้นท์ เป็นผู้นำด้านงานบริการ สร้างคุณภาพชีวิติที่ดีให้กับพนักงาน</div>
                    <div>เพื่อการส่งมอบบริการที่ดี และการเติบโตอย่างยั่งยืน"</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row row-driver-service mt-5 g-0">
            <div class="col-lg-6 col-12 text-driver-parent mb-4 mb-lg-0">
                <div class="d-flex flex-row align-items-center">
                    <img class="icon-driver me-3" src="{{ asset('contents/icons/driver-small.png') }}" alt="car">
                    <h3>DRIVER</h3>
                </div>
                <div>
                    บริการพนักงานขับรถ
                </div>
                <div>Profess Rent And Service</div>
                <div>
                    เราคัดสรรพนักงานขับรถ ที่มีคุณสมบัติตรงตามความต้องการของลูกค้า เรามีบริการรถเช่ารายวัน และรายเดือนหรือบริการรถตู้วีไอพี พร้อมคนขับ มืออาชีพที่เชี่ยวชาญเส้นทาง และบริการของเรายังรวมถึงบริการรับที่สนามบิน และบริการสำหรับ โรงแรม 
                </div>
                <a href="{{ route('profess_rent') }}" class="read-more">อ่านเพิ่มเติม</a>
            </div>
            <div class="col-lg-6 col-12 col-contact-img">
                <img class="car-s1" src="{{ asset('contents/others/car-s1.png') }}" alt="service">
                <div class="icon-contact-parent d-flex flex-column">
                    <img class=" fb-link-icon" src="{{ asset('contents/icons/fb.png') }}" alt="icon">
                    <img class=" line-link-icon" src="{{ asset('contents/icons/line.png') }}" alt="icon">
                    <img class=" call-link-icon" src="{{ asset('contents/icons/call.png') }}" alt="icon">
                </div>
            </div>
        </div>

        <div class="row row-driver-service-line2 g-0">
            <div class="col-lg-4 col-12 m-0 p-0 text-center d-flex flex-column align-items-center mb-3 mb-lg-0">
                <img class="" src="{{ asset('contents/others/car-s1.jpg') }}">
                <div class="mt-2">พนักงานขับรถผู้บริหาร</div>
                <a href="{{ route('profess_rent') }}#driver-manager" class="read-more">อ่านเพิ่มเติม</a>
            </div>
            <div class="col-lg-4 col-12 m-0 p-0 text-center d-flex flex-column align-items-center mb-3 mb-lg-0">
                <img class="" src="{{ asset('contents/others/car-s2.jpg') }}">
                <div data-aos-delay="200" class="mt-2">รถเช่าพร้อมพนักงานขับรถ</div>
                <a href="{{ route('profess_rent') }}#rent-car" class="read-more">อ่านเพิ่มเติม</a>
            </div>
            <div class="col-lg-4 col-12 m-0 p-0 text-center d-flex flex-column align-items-center mb-3 mb-lg-0">
                <img class="" src="{{ asset('contents/others/car-s3.jpg') }}">
                <div data-aos-delay="300" class="mt-2">บริการพิเศษ</div>
                <a href="{{ route('profess_rent') }}#additional-service" class="read-more">อ่านเพิ่มเติม</a>
            </div>
        </div>
    </div>

    <div id="driver-manager"  class="container-fluid driver-manager-con  d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row row-driver-manager g-0">
                <div class="col-12 col-driver-manager d-flex flex-column justify-content-center">
                    <div class="content" data-aos="fade-up-right">
                        <div>พนักงานขับรถผู้บริหาร</div>
                        <div>
                            เราคัดสรรพนักงานขับรถ ที่มีคุณสมบัติตรงตามความต้องการของลูกค้า เพียงท่านแจ้งความประสงค์ ลักษณะพนักงานขับรถที่ต้องการ นอกจากนี้เรายังสามารถปรับเปลี่ยนวันและเวลาทำงานให้เหมาะสม ตรงกับองค์กร บริษัทฯ ของท่าน หรือตามที่ท่านต้องการได้
                        </div>
                        <div class="my-3">
                            "เราพร้อมดูแลลูกค้า <span class="bigger-text">ตลอด 24 ชั่วโมง</span> ไม่เว้นวันหยุดราชการ"
                        </div>
                        <a href="{{ route('profess_rent') }}" class="read-more mt-1">สอบถามข้อมูลเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row mt-5 g-0">
            <section class="col-12 text-center">
                <span class="main-color">เราทุ่มเทและใส่ใจ</span> ทุกรายละเอียดในการให้บริการกับ </br>
                คุณลูกค้าทุกท่าน ส่งมอบ <span class="main-color">งานบริการที่เหนือระดับ</span>
            </header>
        </div>
        <?php
            $process = [
                [
                    'title' => 'ตรวจหาสารเสพติด', 
                    'desc' => 'การตรวจหาสารเสพติดและ ตรวจปริมาณแอลกอฮอล์ การตรวจแบบ Surprise Check', 
                    'image' => 'contents/icons/p1.png'
                ],
                [
                    'title' => 'การอบรมประจำปี', 
                    'desc' => 'อบรมประจำปี ในหัวข้อต่างๆ ที่เกี่ยวข้องกับการขับขี่ และงานบริการ อย่างน้อยปีละ 1-2 ครั้ง ', 
                    'image' => 'contents/icons/p2.png'
                ],
                [
                    'title' => 'อำนวยความสะดวก', 
                    'desc' => 'เรามีพนักงานกองกลาง เพื่อรองรับเหตุฉุกเฉินในการทดแทนงานเร่งด่วน สามารถรับข้อร้องเรียน และให้คำปรึกษาได้', 
                    'image' => 'contents/icons/p3.png'
                ],
                [
                    'title' => 'ระบบประเมิน', 
                    'desc' => 'เรามีระบบประเมินความพึงพอใจจากลูกค้าทั้งแบบสอบถามส่งทางอีเมล์,Call Center, Online ', 
                    'image' => 'contents/icons/p4.png'
                ],
            ];
        ?>

        <div class="row mt-3 g-0">
            <div class="col-12 col-process">
                <?php foreach ($process as $item): ?>
                    <div class="card shadow border-0 mb-2 mb-lg-0" style="width: 18rem;">
                        <div class="card-body text-center">
                            <div class="d-flex justify-content-center">
                                <img class="" src="{{ asset($item['image']) }}">
                            </div>
                            <h5 class="card-title mt-3 main-color">{{ $item['title'] }}</h5>
                            <p class="card-text">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="col-12 d-flex justify-content-center mt-4">
                <div class="line-end-section"></div>
            </div>
        </div>

    </div>

    <div class="container mt-5">
        <div class="row g-0">
            <section class="col-12 main-color">
                บริการที่มีมาตรฐานที่ดีที่สุด
            </section>
            <div class="col-12">
                บริการพนักงานขับรถผู้บริหารระดับพรีเมี่ยม ด้วยคุณภาพมาตรฐานระดับสากล มีความรู้ <br>ความเชียวชาญในเส้นทาง และการขับรถ รวมถึงมีทักษะด้านการสื่อสารภาษาอังกฤษ
            </div>

            <div class="col-12 col-good-service mt-4">
                <div class="card shadow border-0 mb-2 mb-lg-0">
                    <div class="card-body">
                        <h5 class="card-title ">
                            เพื่อการส่งมอบ " <span class="main-color">บริการที่ดีที่สุด</span> "
                        </h5>

                        <div class="card-text">
                            <div>เราส่งมอบงานบริการที่สะดวกสบาย</div>
                            <div>พนักงานขับรถระดับ Premium Luxury</div>
                            <div>เน้นความปลอดภัยตลอดการให้บริการ</div>
                            <div>เน้นย้ำคุณภาพการให้บริการที่ดีที่สุด</div>
                            <div>มีการสุ่มตรวจสารเสพติด และแอลกอฮอล์ก่อนให้บริการทุกครั้ง</div>
                        </div>
                        
                        <a href="{{ route('profess_rent') }}" class="read-more mt-4">สอบถามข้อมูลเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="rent-car"  class="container-fluid ready-for-drive-con d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row row-ready-for-drive">
                <div class="col-12 col-ready-for-drive ">
                    <div class="content" data-aos="fade-up-right">
                        <div>รถเช่าพร้อมพนักงานขับรถ</div>
                        <div>เรามีบริการรถเช่ารายวัน และรายเดือนหรือบริการรถตู้วีไอพี<br>
                            พร้อมคนขับมืออาชีพที่เชี่ยวชาญเส้นทาง และสามารถสื่อสาร ภาษาอังกฤษได้</div>
                        <a href="{{ route('profess_rent') }}" class="read-more mt-3">สอบถามข้อมูลเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid rent-detail-con d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 text-center">
                    <div class="heading">
                        รถเช่าพร้อมพนักงานขับรถ
                    </div>
                    <div>
                        เรามีรถยนต์ให้เช่าพร้อมพนักงานขับรถในลักษณะการบริการที่หลากหลาย และรถยนต์หลายประเภท อีกทั้งยังคิดค่าบริการได้หลายรูปแบบ รวมน้ำมัน ทางด่วน หรืออื่นๆ เรามีบริการรถเช่ารายวัน และรายเดือนหรือบริการรถตู้วีไอพี พร้อมคนขับมืออาชีพที่เชี่ยวชาญเส้นทาง และสามารถสื่อสารภาษาอังกฤษได้
                    </div>
                </div>

                <div class="col-12 mt-5"  data-aos="fade-right"> 
                    โดยเพียงท่านแจ้งความประสงค์มายังเรา เราสามารถบริการจัดให้ท่านได้
                    <div>1. งานประจำ / งานเป็นครั้งคราว</div>
                    <div>2. แบบรายวัน / รายเดือน / หรือรายปี</div>
                    <div>3. เพื่อบริการท่านในรูปแบบงานต่างๆ (Limusine/Chauffeur-Drive)</div>
                    <div>4. รถเช่าขับเอง</div>
                </div>

                <div class="col-12 mt-4" data-aos="fade-left" data-aos-delay="400">
                    บริการนี้จะช่วยท่าน...
                    <ul class="service-help">
                        <li>แบ่งเบาภาระงานของท่าน</li>
                        <li>แบ่งเบางานจัดรถยนต์วิ่งงาน</li>
                        <li>เพียงท่านมอบหมายกำหนดการต่างๆ ในการรับ – ส่งลูกค้า ให้เราดูแลแทนท่าน</li>
                        <li>กำหนดให้ค่าเช่ารวมค่าใช้จ่ายอื่นได้ (ค่าน้ำมัน ค่าทางด่วน ค่าจอดรถ)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 con-select-car-type">
        <div class="col-12 text-center col-select-car-type">
            <span id="business-type" class="car-type active" onclick="toggleActive('business-type')">BUSINESS</span>
            <span class="mx-3 separate">|</span>
            <span id="luxury-type" class="car-type" onclick="toggleActive('luxury-type')">LUXURY</span>
        </div>

        @php
            $businessCar = [
                [
                    'name' => 'toyota camry', 
                    'model' => '2.0 AT ปี 2019', 
                    'gear' => 'ออโต้',
                    'gas' => 'เบนซิน',
                    'image' => 'contents/others/car1.png'
                ],
                [
                    'name' => 'toyota altis', 
                    'model' => '1.6 G ปี 2019', 
                    'gear' => 'ออโต้',
                    'gas' => 'เบนซิน',
                    'image' => 'contents/others/car2.png'
                ],
                [
                    'name' => 'toyota fortuner', 
                    'model' => '2.5 ปี 2020', 
                    'gear' => 'ออโต้',
                    'gas' => 'เบนซิน',
                    'image' => 'contents/others/car3.png'
                ],
            ];

            $luxCar = [
                [
                    'name' => 'toyota commuter', 
                    'model' => 'commuter 2.8 ปี 2020', 
                    'gear' => 'ออโต้',
                    'gas' => 'เบนซิน',
                    'image' => 'contents/others/car4.png'
                ],
                [
                    'name' => 'toyota alphard', 
                    'model' => 'Alphard 2.5 ปี 2020', 
                    'gear' => 'ออโต้',
                    'gas' => 'เบนซิน',
                    'image' => 'contents/others/car5.png'
                ],
                [
                    'name' => 'toyota hyundai', 
                    'model' => 'Hyundai 2.5 ปี 2020', 
                    'gear' => 'ออโต้',
                    'gas' => 'เบนซิน',
                    'image' => 'contents/others/car6.png'
                ],
            ];
        @endphp
        <div class="col-12 mt-4 col-select-car-type">
            <div id="section-business" class="section-car-type  d-flex justify-content-center flex-wrap" data-aos="zoom-in">
                @foreach ($businessCar as $item)
                    <div class="card border-0" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img class="" src="{{ asset($item['image']) }}">
                            </div>
                            <h5 class="card-title text-center mt-3 text-uppercase">{{ $item['name'] }}</h5>
                            <div class="card-text">รุ่น {{ $item['model'] }}</div>
                            <div class="card-text">ระบบเกียร์ : {{ $item['gear'] }}</div>
                            <div class="card-text">น้ำมันเชื้อเพลิง : {{ $item['gas'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div id="section-luxury" class="section-car-type  d-flex justify-content-center flex-wrap d-none">
                @foreach ($luxCar as $item)
                    <div class="card border-0" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img class="" src="{{ asset($item['image']) }}">
                            </div>
                            <h5 class="card-title text-center mt-3 text-uppercase">{{ $item['name'] }}</h5>
                            <div class="card-text">รุ่น {{ $item['model'] }}</div>
                            <div class="card-text">ระบบเกียร์ : {{ $item['gear'] }}</div>
                            <div class="card-text">น้ำมันเชื้อเพลิง : {{ $item['gas'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div id="additional-service" class="container-fluid con-special-service d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12 d-flex ">
                <h1>บริการพิเศษ</h1>
            </div>
        </div>
    </div>

    <div  class="container-fluid rent-detail-con d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 text-center">
                    <div class="heading">
                        บริการพิเศษ
                    </div>
                    <div>
                        บริการของเรายังรวมถึง  บริการรับที่สนามบิน  และ  บริการสำหรับ โรงแรม บริษัท และองค์กรในเขตนิคมอุตสาหกรรมในภาคตะวันออกและ  กรุงเทพฯ  มั่นใจได้ในมาตรฐานของเรา  และ  บริการด้านความปลอดภัย
                    </div>
                </div>

                <div class="col-12 mt-2"  data-aos="fade-right"> 
                    <ul>
                        <li>Valet Parking</li>
                        <li>Drive For Drink</li>
                        <li>Profess Taxi</li>
                    </ul>
                </div>

                <div class="col-12 mt-4" data-aos="fade-left" data-aos-delay="400">
                    บริการรับ - ส่ง
                    <ul class="service-help">
                        <li>ฉีดพ่นฆ่าเชื้อ ไวรัสและแบคทีเรีย ก่อนให้บริการเสมอ</li>
                        <li>เราตรวจคัดกรองพนักงาน ทุกครังก่อนให้บริการ (ตรวจวัดอุณหภูมิ, ล้างมือด้วยเจลแอลกอฮอล์)</li>
                        <li>เรามีบริการตรวจวัดอุณหภูมิ และมีเจลล้างมือขณะให้บริการ</li>
                        <li>เราพร้อมดูแลคุณตลอดการเดินทาง</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    @php
        $otherService = [
            [
                'name' => 'บริการรับ - ส่งสนามบิน', 
                'image' => 'contents/others/other-1.png',
                'details' => [
                    'การขับขี่อย่างปลอดภัย',
                    'เชี่ยวชาญชำนาญในเส้นทาง',
                    'มีทักษะการสื่อสารที่ดี'
                ]
            ],
            [
                'name' => 'Valet Parking', 
                'image' => 'contents/others/other-2.png',
                'details' => [
                    'บริการรับจอดรถยนต์',
                    'พนักงานพร้อมรถ ณ จุดรับรถ',
                    'พร้อมดูแล และอำนวยความสะดวก'
                ]
            ],
            [
                'name' => 'Messenger ส่งเอกสาร', 
                'image' => 'contents/others/other-3.png',
                'details' => [
                    'จัดส่งเอกสารรวดเร็วทันใจ',
                    'สะดวกและปลอดภัย',
                    'เชี่ยวชาญชำนาญในเส้นทาง'
                ]
            ],
        ];
    @endphp

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="other-service d-flex justify-content-center flex-wrap" data-aos="zoom-in">
                    @foreach ($otherService as $index => $item)
                    <div class="card border-0" style="width: 18rem;">
                        <div class="card-body">
                            <div class="image-frame" 
                                style="background-image: url('{{ asset($item['image']) }}');">
                            </div>
                            <h5 class="card-title text-center mt-3 text-uppercase">{{ $item['name'] }}</h5>
                            <hr>
                            <a class="more-detail" data-bs-toggle="collapse" href="#more-detail-{{$index}}" role="button"  aria-expanded="false" aria-controls="more-detail-{{$index}}">
                                <i class="fa fa-solid fa-angle-down"></i> อ่านรายละเอียดเพิ่มเติม
                            </a>
                            <div class="card-text collapse mt-3" id="more-detail-{{$index}}">
                                <ul>
                                    @foreach ($item['details'] as $detail)
                                        <li>{{ $detail }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row mt-4 mb-5 text-center row-improve-standard">
            <div class="col-12 improve-standard">
                "ยกระดับมาตรฐานการให้บริการอย่างเหนือระดับ <br>ด้วยพนักงานขับรถคุณภาพ"
            </div>

            <div class="col-12 mt-1">
                พร้อมยกระดับการบริการพนักงานขับรถระดับ Premium  ด้วยคุณภาพที่เหนือระดับ ในมาตรฐานความปลอดภัย <br>
                พร้อมทั้งยึดมั่นมาตรฐานการให้บริการ เพื่อลูกค้าคนสำคัญของเรา
            </div>

            <div class="col-12 mt-4 d-flex justify-content-center">
                <a href="{{ route('profess_rent') }}" class="read-more">สอบถามข้อมูลเพิ่มเติม</a>
            </div>
        </div>
    </div>
    
@include('includes.footer-light')
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        new Typed('.main-text', {
            strings: ['บริการพนักงานขับรถ', 'PROFESS RENT AND SERVICE'],
            typeSpeed: 30, // Adjust typing speed (in milliseconds) for a more natural pace
            backSpeed: 30, // Adjust backspacing speed (in milliseconds) if needed
            backDelay: 2000, // Add a delay (in milliseconds) before backspacing starts
            smartBackspace: true, // Enable smart backspacing to delete only the characters added by typing
            loop: true // Loop through the strings continuously
        });


        // if (window.location.hash === "#driver-manager") {
        //     var targetElement = document.getElementById("driver-manager");
        //     if (targetElement) {
        //         targetElement.scrollIntoView({ behavior: "smooth" });
        //     }
        // }
    })

    function toggleActive(id) {
        const thisElement = document.getElementById(id);
        const sectionBusiness = document.getElementById('section-business');
        const sectionLuxury = document.getElementById('section-luxury');

        // Hide all section-car-type elements
        document.querySelectorAll('.section-car-type').forEach(item => {
            item.classList.add('d-none');
        });

        // Remove 'active' class from all car-type elements
        document.querySelectorAll('.car-type').forEach(item => {
            item.classList.remove('active');
        });

        if (id === 'business-type') {
            sectionBusiness.classList.remove('d-none');
            setTimeout(function() {
                sectionBusiness.classList.add('aos-animate');
            }, 500); // Adjust delay as needed (500 milliseconds in this example)
        } else {
            sectionLuxury.classList.remove('d-none');
            setTimeout(function() {
                sectionLuxury.classList.add('aos-animate');
            }, 500); // Adjust delay as needed (500 milliseconds in this example)
        }

        // Add 'active' class to the clicked element
        thisElement.classList.add('active');
    }



</script>

<style>
    section {
        font-size: 1.5rem;
        font-weight: 600;
    }

    .row-improve-standard {
        a {
            height: 35px;
        }
        div:nth-child(1) {
            color : var(--main-color);
            font-size: 1.5rem;
            font-weight: 500;
            font-style: italic;
        }
    }


    .other-service {
        .image-frame {
            height: 150px;
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .card-text {
            ul {
                padding-left: 1rem;
                li {
                    margin-bottom: 8px;
                }
            }
        }

        a {
            color: #000;
            text-decoration: none;
        }

        i {
            font-size :1.2rem;
            color: #797979;
            margin-right: 5px;
        }

        hr {
            margin-bottom : 5px;
            color: #797979;
        }
    }

    .con-special-service {
            height: 400px;
            background-image: url('{{ asset('contents/others/man-with-bag.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: white;

            h1 {
                font-size: 3rem !important;
            }
    }

    .con-select-car-type {
        min-height: 450px;
    }

    .col-select-car-type {
        /* min-height: 300px; */
        .section-car-type {
            .card-body {
                img {
                    height: 140px;
                    width: 100%;
                    object-fit: cover;
                }
            }
        }

    }


    .col-select-car-type {
        color:#b3b3b3;

        .separate {
            font-weight: 200;
        }

        .car-type {
            transition: all 0.1s;
        }
        .car-type:hover {
            cursor: pointer;
        }

        .car-type.active {
            color : black;
        }
    }

    ul.service-help {
        list-style-type: none;
        padding-left: 0;

        li {
            position: relative;
            padding-left: 20px;
        }

        li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 15px;
            height: 15px;
            background-image: url("{{ asset('contents/icons/checked-white.png') }}");
            background-size: contain;
            background-repeat: no-repeat; 
        }
    }

    .rent-detail-con {
        color: white;
        background-color: var(--main-color);

        .heading {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.4rem;
        }
    }

    .col-good-service {
        .card {
            width: 27rem;
            border-radius: 14px;
            margin-left: 15px;
            padding: 20px;
            @media only screen and (max-width: 600px) {
                padding: 6px;
                width: 23rem;
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

    .line-end-section {
        width: 50px;
        height: 4px;
        background-color: var(--main-color);
    }

    .col-process {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

        img {
            height: 80px;
        }

        .card {
            margin:0 10px;
            width: 15rem !important;
            border-radius: 14px;

            .card-body {
            
            }
        }

    }

    .driver-manager-con {
        margin-top:5rem !important; 
        color:white;
        margin-top:20px;
        background-image: url('{{ asset('contents/others/car-s5.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 640px;
        width: 100%;
        background-attachment: fixed;

        .row-driver-manager { 
            .col-driver-manager {
        
                    .content {
                        width: 500px;
                        
                        @media only screen and (max-width: 600px) {
                            width: auto !important;
                            margin-left: 20px;
                            margin-right: 20px;
                        }
                        :nth-child(1) {
                            font-size:2rem;
                            font-weight: 500;
                        }

                        .bigger-text {
                            font-size: 1.2rem;
                        }
                    }
                
            }
        }

    }

    .ready-for-drive-con {
        margin-top:5rem !important; 
        margin-top:20px;
        background-image: url('{{ asset('contents/others/ready-1.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 490px;
        width: 100%;
        color:white;
        background-attachment: fixed;

        .row-ready-for-drive { 
            .col-ready-for-drive {

                    .content {
                        width: 500px;

                        @media only screen and (max-width: 600px) {
                                width: auto !important;
                                margin-left: 20px;
                                margin-right: 20px;
                        }

                        :nth-child(1) {
                            font-size: 2rem;
                            font-weight: 500;
                        }

                        .bigger-text {
                            font-size: 1.2rem;
                        }
                    }
                
            }
        }
    }

    .row-driver-service-line2 {
        img {
            height: 500px;
            width: 100%;
            object-fit: cover;

            @media only screen and (max-width: 600px) {
                height: 350px;
            }
        }

        div {
            color: var(--main-color);
            font-weight: 500;
        }

        a {
            width: 115px;
        }
    }

    .read-more {
        margin-top: 10px;
        font-size:0.8rem;
        width: 160px;
        height: 30px;
        display: flex !important;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: inherit;
        background: var(--main-color);
        transition: all 0.3s ease-in-out;
        color:white;

        &:hover {
            background: #04091e;
        }
    }

    .text-driver-parent {
        padding: 0 130px !important;

        @media only screen and (max-width: 600px) {
            padding: 0 50px !important;
        }

        div:nth-child(2) {
            color: var(--main-color);
            font-size: 1.7rem;
            font-weight: 600;
            margin:10px 0;
        }

        div:nth-child(3) {
            font-weight: 500;
            margin-bottom:5px;
        }

    }
    .row-driver-service {
        .col-contact-img {
            position: relative;

            .car-s1 {
                height: 490px;
                width: 100%;
                object-fit: cover;
                position: relative;

                @media only screen and (max-width: 600px) {
                    height: 350px;
                }
            }

            .icon-contact-parent{
                position:absolute !important;
                right: 5;
                top: 50%;
                transform: translate(-50%, -50%);

                img {
                    height: 30px;
                    margin-bottom: 6px;
                }
            }
        }

        .icon-driver {
            height: 5rem;
            width: auto; 
        }

    }
    .main-text {
        font-size: 2rem;
        font-weight: 600;
    }

    .typed-cursor {
        font-size: 2rem;
        font-weight: 600;   
    }

</style>
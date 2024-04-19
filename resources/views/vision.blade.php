@extends('layout')
@section('content')

<div class="container-fluid" data-aos="fade" data-aos-easing="ease-in-out" data-aos-duration="700">
    <div class="row g-0">
        <div class="col-12">
            <div class="hero-image d-flex align-items-center justify-content-center text-center" >
                <div>vision and mission</div>
            </div>
        </div>

        <div class="wrap-vision my-4">
            <div class="col-12 text-center text-vision">
                วิสัยทัศน์
            </div>
    
            <div class="col-12 text-center mt-1 text-desc">
                <span class="main-color">"โปรเฟส เร้นท์ เป็นผู้นำด้านงานบริการ สร้างคุณภาพชีวิตที่ดีให้กับพนักงาน<br>
                    เพื่อการส่งมอบบริการที่ดี และเติบโตอย่างยั่งยืน"</span> <br>
                ด้วยหลักการพนักงานขับรถมืออาชีพ หรือ Smart Model Development 
            </div>

            <div class="icon-contact-parent">
                <div><img class=" fb-link-icon" src="{{ asset('contents/icons/fb.png') }}" alt="icon"></div>
                <div><img class=" line-link-icon" src="{{ asset('contents/icons/line.png') }}" alt="icon"></div>
                <div><img class=" call-link-icon" src="{{ asset('contents/icons/call.png') }}" alt="icon"></div>
            </div>
        </div>

        <div class="col-12 text-center text-vision ">
            พันธกิจ
        </div>

        @php
            $mission = [
                [
                    'image' => 'contents/icons/m-1.png',
                    'text' => 'มุ่งมั่นสู่ความเป็นเลิศในด้านมาตรฐานการให้บริการพนักงานขับรถและรถเช่าพร้อมคนขับแบบครบวงจร '
                ],
                [
                    'image' => 'contents/icons/m-2.png',
                    'text' => 'พัฒนาบุคลากรในทุกด้าน เพื่อสร้างรากฐานที่แข็งแกร่งรองรับการเติบโตของธุรกิจให้เติบโตอย่างต่อเนื่องและยั่งยืนตลอดไป '
                ],
                [
                    'image' => 'contents/icons/m-3.png',
                    'text' => 'สร้างรายได้และคุณภาพชีวิตที่เหมาะสมให้กับพนักงานทุกระดับ เพื่อการส่งมอบบริการให้กับลูกค้าที่เหนือความคาดหวัง'
                ],
            ];
        @endphp
        <div class="col-12 mt-4 d-flex align-items-center justify-content-center col-mission flex-wrap" >
            @foreach ($mission as $data)
                <div class="card border-0" style="width: 15rem;">
                    <div class="card-body text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset($data['image']) }}" alt="mission">
                        </div>
                        <p class="card-text mt-4">{{ $data['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid con-main-content p-3">
    <div class="row g-0 row-main-content ">
        <div class="col-12 cover-img position-relative">
            <div class="container">
                <div class="content position-absolute text-white" data-aos="zoom-in">
                    " เริ่มจากการทำงานในการบริหารทรัพยากรมนุษย์ <br>
                    ในหลากหลายหน้าที่และหลากหลายสายงานธุรกิจ "
                </div>
            </div>
        </div>
            <div class="col-12 content-text-col">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12 text-head">
                            Core Value ค่านิยมองค์กร
                        </div>
                        <div class="text-intro">
                            SMART คือ พฤติกรรมของพนักงาน 5 ประการ ที่จะช่วยสนับสนุนให้พนักงานปฏิบัติงานได้สำเร็จตามที่ตนเองต้องการและตามองค์กรที่คาดหวัง
                        </div>
                        <div class="text-desc mt-1">
                            1. S = Service Mind & Safety บริการอย่างเต็มใจนอบน้อม ซื่อสัตย์สุจริต, เน้นการให้บริการอย่างปลอดภัย <br>
                            2. M = Mind Set & Attitude มีวิธีคิดและทัศนคติที่ดีในการทำงาน, เคารพและให้เกียรติซึ่งกันและกัน, มีวิธีการคิดอย่างเป็นระบบครอบคลุมทุกมิติ <br>
                            3. A = Active Learning มีความกระตือรือร้นในการเรียนรู้และพัฒนาตนเองอยู่เสมอ <br>
                            4. R = Responsibility & Leadership มีความรับผิดชอบต่อลูกค้า คู่ค้า ตนเอง และผู้อื่น, มีภาวะผู้นำในการทำงาน <br>
                            5. T = Teamwork ทำงานร่วมกันอย่างชัดเจน, ช่วยเหลือซึ่งกันและกันไม่แบ่งแยก <br>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12 text-head">
                            หลักบรรษัทภิบาล
                        </div>
                        <div class="text-intro">
                            บริษัทจะปฏิบัติและดูแลให้เจ้าหน้าที่ที่เกี่ยวข้องกับการดำเนินธุรกิจโดยถือปฏิบัติตามจริยธรรมธุรกิจ ดังต่อไปนี้
                        </div>
                        <div class="text-desc mt-1">
                            1. ประกอบธุรกิจด้วยความซื่อสัตย์ สุจริต และดำเนินงานธุรกิจอย่างมีความรับผิดชอบต่อสังคม ทั้งทางกฎหมาย จรรยาบรรณ และมุ่งมั่นทำความดีต่อบุคคล กลุ่มชุมชน สังคมและสิ่งแวดล้อม <br>
                            2. ปฏิบัติต่อลูกค้าอย่างเป็นธรรมในเรื่องของสินค้าและบริการ และไม่เลือกปฏิบัติ <br>
                            3. ประกอบธุรกิจโดยมีระบบการดำเนินงานที่มีมาตรฐานและมีการควบคุมที่ดีมีหลักฐานสามารถอ้างอิงได้รวมทั้งถือ ปฏิบัติตามข้อกฎหมาย และข้อกำหนดที่เกี่ยวข้องอย่างเคร่งครัด <br>
                            4. รักษาความลับ ไม่เปิดเผยข้อมูลของลูกค้าที่ตนได้ล่วงรู้มา เว้นแต่ เป็นการเปิดเผยตามหน้าที่และกฎหมาย <br>
                            5. ปฏิบัติตามข้อตกลงและเงื่อนไขต่างๆ กับลูกค้าอย่างเป็นธรรม หากปฏิบัติตามข้อตกลงหรือเงื่อนไขไม่ได้ต้องรีบแจ้งให้ลูกค้าทราบ เพื่อหาทางออกร่วมกัน <br>
                            6. ไม่ใช้ตำแหน่งหน้าที่ในการแสวงหาผลประโยชน์ เพื่อตนเองและเพื่อผู้อื่นโดยมิชอบ <br> 
                            7. ให้ลูกค้าสามารถร้องเรียนได้หากพบว่างานบริการไม่เป็นไปตามมาตรฐานที่ได้กำหนด หรือตามที่ตกลงกันไว้ <br>
                            8. ยึดหลักการปฏิบัติตาม PDPA  พระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562 <br>
                            9. ประกอบธุรกิจโดยการคำนึงถึงผู้ที่มีส่วนได้ส่วนเสีย และตอบสนองต่อความต้องและการความเข้าใจในความต้องการและความคาดหวังของผู้มีส่วนได้ส่วนเสียเสมอ <br>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 text-head">
                            ความขัดแย้งทางผลประโยชน์
                        </div>
                        <div class="text-intro">
                            คณะกรรมการบริษัทได้กำหนดนโยบายเกี่ยวกับความขัดแย้งทางผลประโยชน์บนหลักการที่ว่าการตัดสินใจใดๆในการดำเนินกิจกรรมทางธุรกิจ จะต้องทำเพื่อผลประโยชน์สูงสุดของบริษัทและเป็นไปตามอำนาจอนุมัติที่ทางบริษัทกำหนดไว้เท่านั้น รวมไปถึงควรหลีกเลี่ยงการกระทำที่ก่อให้เกิดความขัดแย้งทางผลประโยชน์หรือหากพบว่ามีความขัดแย้งทางผลประโยชน์เกิดขึ้นก็ควรจัดให้มีกระบวนการไกล่เกลี่ยที่เป็นธรรม และมีการเปิดเผยข้อมูลที่สำคัญอย่างครบถ้วน
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 text-head">
                            ความรับผิดชอบต่อพนักงาน
                        </div>
                        <div class="text-intro">
                            บริษัทตระหนักถึงความสำคัญของพนักงานบริษัทซึ่งเป็นทรัพยากรที่มีค่ายิ่ง บริษัทจึงกำหนดนโยบายให้มีการปฏิบัติที่เป็นธรรมทั้งในด้านโอกาสผลตอบแทน การแต่งตั้ง โยกย้าย ตลอดจนการพัฒนาศักยภาพโดยยึดหลักปฏิบัติ ดังต่อไปนี้
                        </div>
                        <div class="text-desc mt-1">
                            1. ปฏิบัติต่อพนักงานด้วยความเคารพในเกียรติ ศักดิ์ศรี และสิทธิส่วนบุคคล <br>
                            2. รักษาสภาพแวดล้อมในการทำงานให้มีความปลอดภัยต่อชีวิตและทรัพย์สินของพนักงานอยู่เสมอ <br>
                            3. การแต่งตั้งและโยกย้ายรวมถึงการให้รางวัลและการลงโทษพนักงานกระทำด้วยความสุจริตใจและตั้งอยู่บนพื้นฐานของความรู้ความสามารถและความเหมาะสมของพนักงานนั้น <br>
                            4. ให้ความสำคัญต่อการพัฒนาความรู้ความสามารถของพนักงานโดยมีการพัฒนาอย่างสม่ำเสมออาทิการจัดอบรม สัมมนา การฝึกอบรม และให้โอกาสอย่างทั่วถึงกับพนักงานทุกคน กำหนดค่าตอบแทนแก่พนักงาน อย่างเป็นธรรมตามสภาพตลาดการแข่งขันทางธุรกิจลักษณะของงานผลการ ปฏิบัติและความสามารถของบริษัทในการจ่ายค่าตอบแทนดังกล่าว <br>
                            5. หลีกเลี่ยงการกระทำใดๆ ที่ไม่เป็นธรรม ซึ่งอาจมีผลกระทบต่อความมั่นคงในหน้าที่การงานของพนักงานจัดประชาสัมพันธ์, จัดทำคู่มือต่างๆ ให้พนักงานทุกคนรับทราบนโยบายและสวัสดิการระเบียบ ข้อบังคับการการทำงาน <br>
                            6. เปิดโอกาสให้พนักงานเสนอแนะหรือร้องทุกข์เกี่ยวกับการทำงานและกำหนดวิธีการแก้ไขและสร้างความสัมพันธ์อันดี กับพนักงาน <br>
                            7. เปิดโอกาสให้กลุ่มผู้ด้อยโอกาสเข้ามาทำงาน และ มีการจ้างงานที่ไม่กีดกันหรือเลือกปฏิบัติเนื่องจากเพศ ศาสนา สภาพทางกาย <br>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 text-head">
                            ความรับผิดชอบต่อลูกค้า
                        </div>
                        <div class="text-intro">
                            บริษัทคำนึงถึงความพึงพอใจสูงสุดของลูกค้า ซึ่งเป็นผู้ที่ซื้อสินค้าและบริการจากบริษัทด้วยราคาที่เป็นธรรม มีคุณภาพ และมีความรับผิดชอบต่อลูกค้าดังแนวทางปฏิบัติดังนี้
                        </div>
                        <div class="text-desc mt-1">
                            1. บริษัทมุ่งมั่นพัฒนาสินค้าและบริการให้ครบวงจรบริการรวดเร็วมีคุณภาพ เพื่อตอบสนองความต้องการของลูกค้าและผู้บริโภคอย่างเต็มที่ด้วยราคาที่สมเหตุสมผลทันต่อสถานการณ์ มีคุณภาพไม่จำกัดสิทธิของผู้บริโภค และมีเงื่อนไขที่เป็นธรรมสำหรับผู้บริโภค <br>
                            2. บริษัทต้องไม่ทำการใดอันเป็นการหลอกลวงหรือทำให้หลงเชื่อในคุณภาพสินค้าและบริการของบริษัท <br>
                            3. บริษัทมุ่งมั่นพัฒนาความปลอดภัยในการใช้บริการของผู้บริโภค และจัดให้มีความสำคัญมีการตรวจสอบพร้อม รณรงค์และอบรมพนักงานในเรื่องความปลอดภัยสำหรับผู้บริโภคอย่างเคร่งครัดต่อเนื่อง <br>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 text-head">
                            การรับผิดชอบต่อคู่ค้าและเจ้าหนี้
                        </div>
                        <div class="text-intro">
                            คู่ค้า : บริษัทปฏิบัติต่อคู่ค้าตามกรอบการค้าที่สุจริตโดยยึดถือการปฏิบัติตามสัญญาและคำมั่นที่ให้ไว้กับคู่ค้าอย่างเคร่งครัด พร้อมทั้งคัดเลือกคู่ค้าด้วยความยุติธรรมภายใต้หลักเกณฑ์ในการประเมินและคัดเลือกคู่ค้าของบริษัท เพื่อป้องกันการทุจริตและประพฤติมิชอบในทุกขั้นตอนของกระบวนการจัดหา
                        </div>
                        <div class="text-desc mt-1">
                            เจ้าหนี้: บริษัทยึดมั่นในการดำเนินธุรกิจอย่างมีหลักการและวินัย เพื่อสร้างความเชื่อถือให้กับเจ้าหนี้โดยยึดหลักในการปฏิบัติดังต่อไปนี้  <br>
                            1. ปฏิบัติตามเงื่อนไขต่างๆ ตามสัญญาหรือที่ได้ตกลงกันไว้อย่างเคร่งครัด <br>
                            2. หากเกิดกรณีที่ไม่สามารถปฏิบัติตามเงื่อนไขที่ตกลงกันไว้ได้ บริษัทจะแจ้งให้ทราบเพื่อหาทางออกร่วมกันป้องกันมิให้ผิดเงื่อนไขที่ได้ตกลงกันไว้ในข้างต้น <br>
                        </div>
                    </div>

                    <div class="row mt-4 mb-5">
                        <div class="col-12 text-head">
                            การรับเรื่องร้องเรียนเกี่ยวกับหลักบรรษัทภิบาล <br>
                            และจริยธรรมธุรกิจและงานบริการ
                        </div>
                        <div class="text-intro">
                            บริษัทฯจัดให้มีแนวทางในการแจ้งเบาะแสหรือข้อร้องเรียนการไม่ปฏิบัติตามจรรยาบรรณหรือการกระทำผิดกฎหมาย หรือพฤติกรรมที่อาจส่อถึงการทุจริตหรือประพฤติมิชอบของบุคคลในบริษัทรวมถึงความบกพร่องของระบบควบคุมภายในจากพนักงาน และผู้มีส่วนได้เสียอื่นโดยสามารถแจ้งเบาะแสหรือข้อร้องเรียนได้ตามช่องทางอีเมล์ที่ Email : surutsawadee.p@professrent.co.th
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    .hero-image {
        height: 450px;
        background-image: url('/contents/banner/vision.png');
        background-size: cover;
        background-attachment: fixed;
        /* @media only screen and (min-width: 600px) {
            background-size: 100% auto;
        } */

        div {
            color:white;
            text-transform: uppercase;
            font-size: 3.7rem;
            font-weight: 500;

            @media only screen and (max-width: 600px) {
                font-size: 2.2rem !important;
            }
        }

    }

    .wrap-vision {
        position: relative;

        .icon-contact-parent {

            @media only screen and (max-width: 600px) {
                display: flex !important;
                flex-direction: row !important;
                justify-content: center;
                margin-top: 15px;
            }

            @media only screen and (min-width: 601px) {
                position: absolute;
                top: 50%;
                transform: translate(-50%, -50%) !important;
                right: 0;
            }

            img {
                width: 30px;
                height: 30px;
                margin-right: 10px;
                margin-bottom: 5px;
            }
        }

        .text-desc {
            font-size: 1.2rem;
            font-weight: 500;
        }
    }

    .con-main-content {
        .row-main-content {
            background-color: #949494;
            color: #343434;

            .text-head {
                color: var(--main-color);
                font-size: 1.6rem;
                font-weight: 500;
                margin-bottom: 8px;
            }

            .text-intro {
                text-indent: 50px;
            }
    
            .cover-img {
                height:400px;
                background-image: url('/contents/banner/sign.png');
                background-size: cover;
                /* background-attachment: fixed; */

                .content {
                    bottom: 50px;
                    font-size: 1.5rem;
                }
            }
        }
    }

    .text-vision {
        font-size: 1.8rem;
        font-weight: 500;
    }

    .col-mission {
        @media only screen and (min-width: 900px) {
            .card:not(:last-child) {
                border-right: 1px dotted !important;
                border-radius: 0;
                margin: 0 1rem;
            }
        }

        .card-body {
            transition:all 0.3s;
        }

        .card-body:hover {
            /* transform: translateY(-10px) !important;  */
            /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
        }

        img {
            height: 140px;
        }
    }

</style>

@include('includes.footer')
@endsection
<footer>
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 col-12 main-logo-footer-parent">
                <img src="{{ asset('contents/icons/profess-logo.png') }}" alt="profess-logo">
                <span class="comp-name-en">PROFESS RENT</span>
                <div class="comp-name-th">บริษัท โปรเฟส เร้นท์ แอนด์ เซอร์วิส จำกัด</div>
                <div class="main-color">สำนักงานหลักสี่</div>
                <div class="text-gray">10 / 43 ชั้น  1  ชวนชื่นวิภาวดีรังสิต ถนนวิภาวดีรังสิต แขวงสนามบิน <br> เขตดอนเมือง กทม. 10210</div>
            </div>
            <div class="col-lg-4 col-8">
                <div class="row row-contact mt-3 mt-lg-0">
                    <div class="col-auto pe-0">
                        <div class="icon-contact" style="background-image: url('contents/icons/call.png')"></div>
                    </div>
                    <div class="col ps-1">
                        <div><span class="tel-text">โทร :</span>02-197-2693-4</div>
                        <div class="tel-ohter-line">098-808-7554</div>
                        <div class="tel-ohter-line">062-487-1133</div>
                        <div class="tel-ohter-line">098-274-2507</div>
                        <div class="text-gray">เวลาติดต่อ จันทร์ - ศุกร์ เวลา 08:00 น. - 17.00 น.</div>
                    </div>
                </div>

                <div class="row row-contact mt-3 ">
                    <div class="col-auto pe-0">
                        <div class="icon-contact" style="background-image: url('contents/icons/fb.png')"></div>
                    </div>
                    <div class="col ps-1">
                        <div>Facebook : Profess Rent And Service</div>
                        <div class="text-gray">เวลาติดต่อ จันทร์ - ศุกร์ เวลา 08:00 น. - 17.00 น.</div>
                    </div>
                </div>

                <div class="row row-contact mt-3">
                    <div class="col-auto pe-0">
                        <div class="icon-contact" style="background-image: url('contents/icons/mail.png')"></div>
                    </div>
                    <div class="col ps-1">
                        <div>Email - sale@professrent.co.th</div>
                        <div class="text-gray">เวลาติดต่อ จันทร์ - ศุกร์ เวลา 08:00 น. - 17.00 น.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-4 d-flex justify-content-center">
                <div>
                    <img class="qr-code" src="{{ asset('contents/icons/qr.png') }}" alt="qr-code">
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center col-all-service">
                <div class="profess-icon">
                    <img src="{{ asset('contents/icons/profess-logo.png') }}" alt="Icon">
                </div>
                <div class="icon-footer-parent">
                    <img src="{{ asset('contents/icons/driver-small.png') }}" alt="Icon">
                    <div>DRIVER</div>
                </div>
                <div class="icon-footer-parent">
                    <img data-aos-delay="50" src="{{ asset('contents/icons/it-small.png') }}" alt="Icon">
                    <div>SOFTWARE</div>
                </div>
                <div class="icon-footer-parent">
                    <img data-aos-delay="100" src="{{ asset('contents/icons/house-small.png') }}" alt="Icon">
                    <div>CLEANING</div>
                </div>
            </div>

            <div class="col-12 gray-icon-contact-parent text-center">
                <img class="fb-link-icon" src="{{ asset('contents/icons/fb-gray.png') }}" alt="icon">
                <img class="line-link-icon" src="{{ asset('contents/icons/line-gray.png') }}" alt="icon">
                <img src="{{ asset('contents/icons/mail-gray.png') }}" alt="icon">
                <img class="map-link-icon" src="{{ asset('contents/icons/map-gray.png') }}" alt="icon">
            </div>

            <div class="col-12">
                {{-- <img class="qr-code" src="{{ asset('contents/icons/qr.png') }}" alt="qr"> --}}
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-12 col-copy-right">
                Copyright 2024 &copy; Profess Rent And Service co.,Ltd.
            </div>
        </div>
    </div>
</footer>

<style>
    footer {
        margin-top: 5rem;
        font-size: 0.85rem;
        font-weight: 400;

        .col-all-service {
            margin-top: 3.3rem;
        }

        .gray-icon-contact-parent {
            margin-top: 1.2rem;
            margin-bottom: 1rem;
            img {
                height: 20px;
            }
        }


        .profess-icon {
            margin:0 20px;

            @media only screen and (max-width: 600px) {
                /* margin: 0 10px; */
                display:none;
            }

            img {
                width: 50px;
                height: 50px;
            }
        }

        .icon-footer-parent {
            display: flex;
            justify-content: center !important;
            align-items: center !important;
            margin:0 20px;
            font-weight: 500;

            @media only screen and (max-width: 600px) {
                margin: 0 10px;
            }
            
            img {
                height: 30px;
                margin-right:5px;
            }
        }

        .col-copy-right {
            font-weight: 400;
            font-size: 0.75rem;
            height: 40px;
            background-color: var(--main-color);
            color: white;
            display: flex;
            justify-content: center !important;
            align-items: center !important;
        }

        .text-gray {
            color: #6c6c6c !important;
        }

        .qr-code {
            width: 100px;
            height: auto !important;
        }

        .main-logo-footer-parent {
            .comp-name-en { 
                font-size: 1.5rem;
                font-weight: 600;
            }

            .comp-name-th { 
                font-weight: 500;
                margin-top : 10px;
            }

            div:nth-child(4) {
                font-weight: 400;
            }

            img {
                height: 75px;
                margin-right: 10px; 
            }

        }

        .row-contact:not(:nth-child(1)){
            display:flex;
            justify-content: center !important;
            align-items: center !important;
        }

        .row-contact {
            color : var(--main-color);
            .icon-contact {
                height: 40px;
                width: 40px;
                margin-right: 10px;
                /* background-color: red; */
                border-radius: 50%;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            .tel-text {
                width: 36px;
                display: inline-block;
            }

            .tel-ohter-line {
                margin-left:36px;
            }
        }
    }
</style>
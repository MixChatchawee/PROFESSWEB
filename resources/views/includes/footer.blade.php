<footer class=" pt-4 pb-2">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
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
        </div>
        <div class="row mt-5">
            <div class="col-md-4 col-12 text-center main-logo-footer-parent">
                <div><img class="main-logo-footer" src="{{ asset('contents/icons/profess-logo.png') }}" alt="Icon"></div>
                <div class="mt-2">PROFESS RENT</div>
                <div>AND SERVICE</div>
            </div>
            <div class="col-md-4 col-12">
                <div>
                    <div>สำนักงานหลักสี่</div>
                    <div>10/43 ชั้น 1 ถนนวิภาวดีรังสิต</div>
                    <div>แขวงสนามบิน เขตดอนเมือง</div>
                    <div>กทม.10210</div>
                </div>
                <div class="mt-3">
                    <div>สำนักงานตึกชาญอิสสระ 2</div>
                    <div>2922 / 73 ห้อง 207A อาคารชาญ</div>
                    <div>อิสสระทาวเวอร์ 2 ถนนเพรชบุรีตัดใหม่</div>
                    <div>แขวงบางกะปิ เขตห้วยขวาง กทม. 10310</div>
                </div>
                <div class="mt-3">
                    <div>สำนักงานศรีราชา ดีแลนด์คอมเพล็กซ์</div>
                    <div>87 / 97 หมู่ที่ 10 ตำบลหนองขาม อำเภอศรีราชา</div>
                    <div>จังหวัดชลบุรี 20230</div>
                </div>
          
            </div>
            <div class="col-md-4 col-12 site-map-parent">
                <div class="main-color">หน้าหลัก</div>
                <div>บริการของเรา</div>
                <div>เกี่ยวกับเรา</div>
                <div>ทำไมต้องเลือกเรา</div>
                <div>ติดต่อเรา</div>

                <div class="main-color">Job</div>
                <div>ร่วมงานกับเรา</div>
                
            </div>
      
        </div>
        <div class="row mt-5">
            <div class="col-12 gray-icon-contact-parent text-center">
                <img class="fb-link-icon" src="{{ asset('contents/icons/fb-gray.png') }}" alt="icon">
                <img class="line-link-icon" src="{{ asset('contents/icons/line-gray.png') }}" alt="icon">
                <img src="{{ asset('contents/icons/mail-gray.png') }}" alt="icon">
                <img class="map-link-icon" src="{{ asset('contents/icons/map-gray.png') }}" alt="icon">
            </div>
            <div class="col-12 text-center copyright mt-2">
                Copyright 2024 &copy; Profess Rent And Service Co,. Ltd.
            </div>
        </div>
    </div>
</footer>

<style>
    footer {
        background-color: #919191;
    }

    .main-logo-footer-parent {
        font-size: 12px;
        font-weight: 600;

        .main-logo-footer {
            width: auto;
            height: 85px;
        }
    }

    .gray-icon-contact-parent img {
        height: 33px;
        width: auto;
        margin: 5px 1px;
    }

    .site-map-parent div{
        padding: 8px;
    }

    .site-map-parent > div:not(.main-color):not(:last-child) {
        border-bottom: solid 2px #7979795c;
    }

    .copyright {
        color :#797979;
    }

    .icon-footer-parent {
        display: flex;
        flex-direction: row;
        margin: 0 20px;
        font-weight: 600;
        justify-content: center !important;
        align-items: center !important;

        @media only screen and (max-width: 600px) {
            margin: 0 10px;
        }

        img {
            height: 40px;
            margin-right:10px;
            border-radius: 50%;

            @media only screen and (max-width: 600px) {
                height: 30px;
                margin-right:5px;
            }
        }
    }
</style>



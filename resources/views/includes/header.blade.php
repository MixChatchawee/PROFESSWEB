<header class="mb-auto">
    <nav id="navbar" class="navbar navbar-expand-md navbar-light fixed-top bg-light ">
        <div class="container-fluid px-3">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('contents/icons/profess-logo.png') }}" alt="Icon" style="height: 30px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('profess_rent') ? 'active' : '' }}" href="#" id="dropdown09" data-bs-toggle="dropdown"
                            aria-expanded="false">บริการของเรา </a>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="{{ route('profess_rent') }}#driver-manager">พนักงานขับรถผู้บริหาร</a></li>
                            <li><a class="dropdown-item" href="{{ route('profess_rent') }}#rent-car">รถเช่าพร้อมพนักงานขับรถ</a></li>
                            <li><a class="dropdown-item" href="{{ route('profess_rent') }}#additional-service">บริการพิเศษ</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('about_us', 'vision')  ? 'active' : '' }}" href="#" id="dropdown09" data-bs-toggle="dropdown"
                            aria-expanded="false">เกี่ยวกับเรา</a>
                        <ul class="dropdown-menu border-0">
                            <li><a class="dropdown-item" href="{{ route('about_us') }}">AB0UT US</a></li>
                            <li><a class="dropdown-item" href="{{ route('vision') }}">VISION AND MISSION</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('why_us') ? 'active' : '' }}" href="{{ route('why_us') }}">ทำไมต้องเลือกเรา</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact_us') ? 'active' : '' }}" href="{{ route('contact_us') }}">ติดต่อเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<style>
    header {
        nav {
            .nav-item {
                padding-left:10px;

                .dropdown-item:hover {
                    --bs-dropdown-link-active-bg: #192458 !important;
                }
            }

            .navbar-nav .nav-link.active {
                color: var(--main-color);
                font-weight: 500;
            }

            .navbar-toggler {
                border: none;
            }
        }
    }
</style>
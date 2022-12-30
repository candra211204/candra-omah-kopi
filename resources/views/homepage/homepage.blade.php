<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    
    <!-- CSS For Homepage -->
    <link rel="stylesheet" href="{{ asset('css/homepage/homepage.css') }}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>
<body>

    <!-- Homepage Background -->
    <img class="homepage-background" src="{{ asset('aset/home/background-home.jpg') }}" alt="Homepage-background">
    <!-- Homepage Background End -->

    <!-- Header -->
    <header class="container-fluid homepage-header">
        <div class="row">
            <div class="col-2">
                <div class="header-logo">
                    <a href=""><img class="logo-omah-kopi" src="{{ asset('aset/home/logo.png') }}" alt="Logo-omah-kopi" width="100"></a>
                </div>
            </div>
            <div class="col-8">
                <div class="header-menu">
                    <a class="menu-1" href="">Home</a>
                    <a class="menu-2" href="">About</a>
                    <a class="menu-3" href="">Services</a>
                    <a class="menu-4" href="">Menu</a>
                    <a class="menu-5" href="">Contact</a>
                </div>
            </div>
            <div class="col-2 d-flex">
                <div class="header-login-register">
                    @guest
                        @if (Route::has('login'))
                        <a class="header-login" href="{{ route('login') }}">Login</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="header-register" href="{{ route('register') }}">Register</a>
                        @endif

                        @else

                    @endguest
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Section Home -->
    <section class="container-fluid home">
        <div class="section-home-title-tagline-owner">
            
            {{-- Title Tagline Owner --}}
            <h1 class="section-home-title">OMAH KOPI</h1>
            <h5 class="section-home-tagline">Good Serve Good Teste!</h5>
            <p class="section-home-owner">Owner, Candra Putra.</p> 
            {{-- Title Tagline Owner End --}}

            {{-- Store --}}
            <div class="container-fluid section-home-store">
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col-1">
                        <a class="section-home-store-cart" href="">
                            <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                            <h6 class="section-home-store-cart-text">Cart</h6>
                        </a>
                    </div>
                    <div class="col-1">
                        <a class="section-home-store-market" href="">
                            <i class="fa-solid fa-store fa-2xl"></i>
                            <h6 class="section-home-store-market-text">Store</h6>
                        </a>
                    </div>
                    <div class="col-5"></div>
                </div>
            </div>
            {{-- Store End --}}

        </div>
    </section>
    <!-- Section Home End -->

    {{-- Main Content --}}
    <main>

        {{-- Section About --}}
        <section class="container-fluid section-about">
            <div class="row about-us">
                <div class="col-6">
                    <h2 class="about-us-title">About Us.</h2>
                    <p class="about-us-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quasi laboriosam animi expedita magnam obcaecati quo impedit fugit numquam quas quisquam reprehenderit maiores unde modi labore blanditiis! Non delectus natus dolores molestias temporibus magnam ipsum id consequatur minus alias accusantium optio, voluptates dicta eum quo aspernatur quas fugit ea? Quas nesciunt dicta et culpa officiis, fugit saepe repellendus necessitatibus reiciendis, consequatur veniam ullam quisquam maiores maxime explicabo deserunt blanditiis voluptates. Maxime, totam. Dolor, ullam tenetur similique ad architecto incidunt inventore repellat voluptatem unde eos tempora sapiente nihil. Numquam obcaecati iure molestiae earum. Inventore non laborum voluptatem totam soluta aperiam laudantium.</p>
                </div>
                <div class="col-6">
                    <img class="about-us-picture" src="{{ asset('aset/about/about-us.jpg') }}" alt="About-us-picture" width="550">
                </div>
            </div>
            <div class="row about-coffee">
                <div class="col-6">
                    <img class="about-coffee-picture" src="{{ asset('aset/about/about-coffee.jpg') }}" alt="About-coffe-picture" width="550">
                </div>
                <div class="col-6">
                    <h2 class="about-coffee-title">About Coffee.</h2>
                    <p class="about-coffee-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit totam placeat qui, unde omnis suscipit officiis libero dolorum eos, tempora laudantium quo beatae delectus, sequi saepe quasi repellendus sunt vitae? Non, deleniti hic. Tenetur sed inventore expedita soluta dolorem natus, sequi exercitationem ipsam at ut voluptatum quo assumenda, saepe minima earum iusto a? Ipsa, fugiat neque sequi necessitatibus nobis accusantium? Beatae quas nostrum sapiente blanditiis vero, similique rerum quos autem ex hic quaerat temporibus natus, deserunt qui doloremque veniam accusantium suscipit laborum. Porro amet eligendi asperiores atque adipisci soluta voluptatem! Saepe dolore in corporis nesciunt quo obcaecati nisi delectus alias?</p>
                </div>
            </div>
        </section>
        {{-- Section About End --}}

        {{-- Section Services --}}
        <section class="container-fluid section-services">
            <h2 class="section-services-title">CHECK OUR SERVICES</h2>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-3">
                    <a class="section-services-call-center" href="">
                        <img class="section-services-call-center-logo" src="{{ asset('aset/services/call-center.png') }}" alt="Logo-service-center" width="50">
                        Call Center
                    </a>
                </div>
                <div class="col-4">
                    <a class="section-services-call-center" href="">
                        <img class="section-services-call-center-logo" src="{{ asset('aset/services/cash-on-delivery.png') }}" alt="Logo-cash-on-delivery" width="50">
                        Cash On Delivery
                    </a>
                </div>
                <div class="col-3">
                    <a class="section-services-call-center" href="">
                        <img class="section-services-call-center-logo" src="{{ asset('aset/services/shipment.png') }}" alt="Logo-shipment" width="50">
                        Shipment
                    </a>
                </div>
                <div class="col-1"></div>
            </div>
            <p class="section-services-tagline">Customers Are Priority!</p>
        </section>
        {{-- Section Services End --}}

        {{-- Section Menu --}}

        {{-- Section Menu End --}}

    </main>
    {{-- Main Content End --}}

    {{-- Footer --}}
    <footer>
        <div class="footer-copyright">
            <p>© Copyright <strong class="footer-copyright-omah-kopi">Omah Kopi</strong>. All Rights Reserved</p>
        </div>
    </footer>
    {{-- Footer End --}}

    {{-- Bootsrap 5 JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
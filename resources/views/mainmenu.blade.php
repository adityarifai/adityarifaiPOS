<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="twitter:site" content="@metroui">
    <meta name="twitter:creator" content="@pimenov_sergey">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Metro 4 Components Library">
    <meta name="twitter:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
    <meta name="twitter:image" content="https://metroui.org.ua/images/m4-logo-social.png">

    <meta property="og:url" content="https://metroui.org.ua/v4/index.html">
    <meta property="og:title" content="Metro 4 Components Library">
    <meta property="og:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://metroui.org.ua/images/m4-logo-social.png">
    <meta property="og:image:secure_url" content="https://metroui.org.ua/images/m4-logo-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="968">
    <meta property="og:image:height" content="504">

    <meta name="author" content="Sergey Pimenov">
    <meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
    <meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">

    <link rel="shortcut icon" href="assets/images/icons8-windows-8-ecommerce-pos-terminal-1.ico" type="image/x-icon">

    <link href="metromini/docs/metro/css/metro-all.css?ver=@@b-version" rel="stylesheet">
    <link href="metromini/docs/start/start.css" rel="stylesheet">

    <title>POS-ADR | Main Menu</title>
    <style type="text/css">
    .a-color{
        /*background-color: #9FBFA3;*/
        background-image: url(img/11.jpg);
        background-size: cover;
        /*background-color: #cccccc;*/
    }
</style>
</head>
<body class="a-color fg-white h-vh-100 m4-cloak">

    <div class="container-fluid start-screen h-100">
        <h1 class="start-screen-title"><a href="{{url('home')}}"></a>&nbsp;Main Menu</h1>

        <div class="container tiles-area clear">
            <div class="tiles-grid tiles-group size-2 fg-white">
                @if(Auth::user()->akses == "SuperAdmin")
                <div data-role="tile" data-size="wide" data-effect="animate-slide-left">
                    <a href="{{route('toko.all')}}" data-role="tile" class="slide bg-indigo fg-white">
                        <div data-role="tile" class="bg-cyan fg-white" data-size="wide">
                            <span class="mif-table icon"></span>
                            <span class="branding-bar">Master</span>
                            <span class="badge-bottom">Add User & Store</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(Auth::user()->akses == "SuperAdmin" || Auth::user()->akses == "Kasir")
                <div data-role="tile" data-size="wide" data-effect="animate-slide-left">
                    <a href="{{route('pos.index')}}" data-role="tile" class="slide bg-indigo fg-white">
                        <div data-role="tile" class="bg-green fg-white" data-size="wide">
                            <span class="mif-cart icon"></span>
                            <span class="branding-bar">Point Of Sale</span>
                            <span class="badge-bottom">Use POS</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(Auth::user()->akses == "SuperAdmin" || Auth::user()->akses == "Admin" || Auth::user()->akses == "Kasir")
                <div data-role="tile" data-size="wide" data-effect="animate-slide-left">
                    <a href="{{ url('/') }}" data-role="tile" class="slide bg-indigo fg-white">
                        <div data-role="tile" class="bg-red fg-white" data-size="wide">
                            <span class="mif-arrow-left icon"></span>
                            <span class="branding-bar">Back</span>
                            <span class="badge-bottom">Back to Home</span>
                        </div>
                    </a>
                </div>
                @endif
            </div>

            <div class="tiles-grid tiles-group size-2 fg-white">
                @if(Auth::user()->akses == "Admin" || Auth::user()->akses == "SuperAdmin")
                <div data-role="tile" data-size="wide" data-effect="animate-slide-left">
                    <a href="{{route('inventory.index')}}" data-role="tile" class="slide bg-indigo fg-white">
                        <div data-role="tile" class="bg-lightIndigo fg-white" data-size="wide">
                            <span class="mif-pencil icon"></span>
                            <span class="branding-bar">Inventory</span>
                            <span class="badge-bottom">Manage & Config Product</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(Auth::user()->akses == "SuperAdmin" || Auth::user()->akses == "Kasir")
                <div data-role="tile" data-size="wide" data-effect="animate-slide-left">
                    <a href="{{route('barangmasuk.all')}}" data-role="tile" class="slide bg-indigo fg-white">
                        <div data-role="tile" class="bg-darkAmber fg-white" data-size="wide">
                            <span class="mif-open-book icon"></span>
                            <span class="branding-bar">Report Cashier</span>
                            <span class="badge-bottom">Report In & Out Products</span>
                        </div>
                    </a>
                </div>
                @endif
                @if(Auth::user()->akses == "SuperAdmin" || Auth::user()->akses == "Admin" || Auth::user()->akses == "Kasir")
                <div data-role="tile" data-size="wide" data-effect="animate-slide-left">
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-role="tile" class="slide bg-indigo fg-white">
                        <div data-role="tile" class="bg-darkCrimson fg-white" data-size="wide">
                            <span class="mif-exit icon"></span>
                            <span class="branding-bar">Logout</span>
                            <!-- <span class="badge-bottom">Out of Main Menu</span> -->
                        </div>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>


    <script src="metromini/docs/js/jquery-3.3.1.min.js"></script>
    <script src="metromini/docs/metro/js/metro.js"></script>
    <script src="metromini/docs/start/start.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}">
    <title>
       ffffffffffffffffff
    </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Nucleo Icons -->
    <link href="{{asset('./assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('./assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('assets/css/argon-dashboard.css')}}" rel="stylesheet" />

</head>

<body class="{{ $class ?? '' }}">

    {!! NoCaptcha::renderJs() !!}


    @if(Auth::guard('admin')->check())
        @if (in_array(request()->route()->getName(), ['sign-in-static', 'sign-up-static', 'login', 'register', 'recover-password', 'rtl', 'virtual-reality']))
            @yield('content')
        @else
            @if (!in_array(request()->route()->getName(), ['profile', 'profile-static']))
                <div class="min-height-300 bg-primary position-absolute w-100"></div>
            @elseif (in_array(request()->route()->getName(), ['profile-static', 'profile']))
                <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                    <span class="mask bg-primary opacity-6"></span>
                </div>
            @endif
            @include('admin.layouts.navbars.auth.sidenav')
                <main class="main-content border-radius-lg">
                    @yield('content')
                </main>
            @include('admin.components.fixed-plugin')
        @endif
    @else
    @yield('content')
    @endif


    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets/js/argon-dashboard.js')}}"></script>
    @stack('js');
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    @yield('scripts');
    {{-- <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
   <script>
    navigator.serviceWorker.register("{{asset('sw.js')}}");
    function requestPermission() {
            Notification.requestPermission().then((permission) => {
                if (permission === 'granted') {
                     // get service worker
                     navigator.serviceWorker.ready.then((sw) =>{

// subscribe
                            sw.pushManager.subscribe({
                                userVisibleOnly: true,
                                applicationServerKey:"BHAlSEA8SRgdrtk7x5jSgNaRB-gOaF-5eDfss9qjlPyBjc8eElZPZR0RNsBIEqngFe6K9MZdMExhii4iF9WPc-k"
                            }).then((subscription) => {

                                // subscription successful
                                fetch("/api/push-subscribe", {
                                    method: "post",
                                    body:JSON.stringify(subscription)
                                }).then( alert("ok") );
                            });
                            });

                }
            });
        }
   </script>
      <button onclick="requestPermission()">Enable Notification</button> --}}

</body>

</html>

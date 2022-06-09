<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    {{-- Vali --}}
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('vali/css/main.css') }}">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />
    <div class="app sidebar-mini">

        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">

            <div class="m-full text-white font-bold text-lg uppercase mb-5 text-center mt-1">
                <p class="text-">{{ Auth()->user()->name }}</p>
            </div>
            <ul class="app-menu">
                @if (auth()->user()->perfil == 'Admin')
                    <li><a class="app-menu__item " :active="request() - > routeIs('dashboard')" href="/crud"><i
                                class="app-menu__icon fa fa-dashboard"></i><span
                                class="app-menu__label">Usuários</span></a>
                    </li>
                @endif
                <li class="treeview"><a class="app-menu__item" href="/temas"><i
                            class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Sugestões de
                            Temas</span>
                        </></a>
                </li>
                <li class="treeview"><a class="app-menu__item" href="/upload"><i
                            class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Monografia</span>
                        </></a>
                </li>
                @if (auth()->user()->perfil == 'Admin')
                    <li class="treeview"><a class="app-menu__item" href="/actividade"><i
                                class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Actividades</span>
                            </></a>
                    </li>
                @endif

               


            </ul>
        </aside>
        <main class="app-content">

            <div class="app-title">
                <div>
                    {{-- <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
                    aria-label="Hide Sidebar"></a> --}}
                    <h1><i class="fa fa-dashboard"></i> Painel Administrativo</h1>

                </div>
                <ul class="flex items-center">
                    <div>
                        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                        <li class="breadcrumb-item"><a href="/home">Página Inicial (Lado do Cliente)</a></li>
                    </div>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Sair') }}
                        </x-jet-dropdown-link>
                    </form>
                </ul>
            </div>
            @livewire('count')


            {{-- MEU CONTEÚDO DINÂMICO --}}
            {{-- @livewire('user-crud') --}}
            {{ $slot }}

        </main>r
    </div>



    @stack('modals')

    @livewireScripts


    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


    <script src="vali/js/jquery-3.3.1.min.js"></script>
    <script src="vali/js/popper.min.js"></script>
    <script src="jvali/s/bootstrap.min.js"></script>
    <script src="vali/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="vali/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="vali/js/plugins/chart.js"></script>
    <script type="text/javascript">
        var data = {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [{
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86]
                }
            ]
        };
        var pdata = [{
                value: 300,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Complete"
            },
            {
                value: 50,
                color: "#F7464A",
                highlight: "#FF5A5E",
                label: "In-Progress"
            }
        ]

        var ctxl = $("#lineChartDemo").get(0).getContext("2d");
        var lineChart = new Chart(ctxl).Line(data);

        var ctxp = $("#pieChartDemo").get(0).getContext("2d");
        var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
</body>

</html>

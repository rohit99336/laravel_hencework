<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Plain Admin</title>

    <!-- Fonts -->
    

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/LineIcons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <!--  sidebar-nav start  -->
        <aside class="sidebar-nav-wrapper">
            <div class="navbar-logo">
                <a href="index.html">
                    <img src="assets/images/logo/logo.svg" alt="logo" />
                </a>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li class="nav-item nav-item-has-children">
                        <a href="#0" data-bs-toggle="collapse" data-bs-target="#ddmenu_1" aria-controls="ddmenu_1"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon"><i class="lni lni-dashboard"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                        <ul id="ddmenu_1" class="collapse show dropdown-nav">
                            <li>
                                <a href="index.html" class="active">
                                    <i class="lni lni-arrow-right"></i> e-Commerce
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-has-children">
                        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
                            aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon"><i class="lni lni-layout"></i></span>
                            <span class="text">Pages</span>
                        </a>
                        <ul id="ddmenu_2" class="collapse dropdown-nav">
                            <li>
                                <a href="settings.html">
                                    <i class="lni lni-arrow-right"></i> Settings
                                </a>
                            </li>

                            <li>
                                <a href="blank-page.html">
                                    <i class="lni lni-arrow-right"></i> Blank Page
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="invoice.html">
                            <span class="icon"><i class="lni lni-credit-cards"></i></span>
                            <span class="text">Invoice</span>
                        </a>
                    </li>

                    <li class="nav-item nav-item-has-children">
                        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3"
                            aria-controls="ddmenu_3" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon"><i class="lni lni-users"></i></span>
                            <span class="text">Auth</span>
                        </a>
                        <ul id="ddmenu_3" class="collapse dropdown-nav">
                            <li>
                                <a href="signin.html">
                                    <i class="lni lni-arrow-right"></i> Sign In
                                </a>
                            </li>
                            <li>
                                <a href="signup.html">
                                    <i class="lni lni-arrow-right"></i> Sign Up
                                </a>
                            </li>
                        </ul>
                    </li>
                    <span class="divider">
                        <hr /></span>
                    <li class="nav-item nav-item-has-children">
                        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_4"
                            aria-controls="ddmenu_4" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon"><i class="lni lni-layout"></i></span>
                            <span class="text">UI Elements </span>
                        </a>
                        <ul id="ddmenu_4" class="collapse dropdown-nav">
                            <li>
                                <a href="alerts.html">
                                    <i class="lni lni-arrow-right"></i> Alerts
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <i class="lni lni-arrow-right"></i> Buttons
                                </a>
                            </li>
                            <li>
                                <a href="cards.html">
                                    <i class="lni lni-arrow-right"></i> Cards
                                </a>
                            </li>

                            <li>
                                <a href="typography.html">
                                    <i class="lni lni-arrow-right"></i> Typography
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-has-children">
                        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_55"
                            aria-controls="ddmenu_55" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon"><i class="lni lni-package"></i></span>
                            <span class="text">Icons</span>
                        </a>
                        <ul id="ddmenu_55" class="collapse dropdown-nav">
                            <li>
                                <a href="icons.html">
                                    <i class="lni lni-arrow-right"></i> LineIcons
                                </a>
                            </li>
                            <li>
                                <a href="mdi-icons.html">
                                    <i class="lni lni-arrow-right"></i> MDI Icons
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-has-children">
                        <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_5"
                            aria-controls="ddmenu_5" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon"><i class="lni lni-check-box"></i></span>
                            <span class="text"> Forms </span>
                        </a>
                        <ul id="ddmenu_5" class="collapse dropdown-nav">
                            <li>
                                <a href="form-elements.html">
                                    <i class="lni lni-arrow-right"></i> From Elements
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="tables.html">
                            <span class="icon"><i class="lni lni-grid-alt"></i></span>
                            <span class="text">Tables</span>
                        </a>
                    </li>
                    <span class="divider">
                        <hr /></span>

                    <li class="nav-item">
                        <a href="notification.html">
                            <span class="icon"><i class="lni lni-alarm"></i></span>
                            <span class="text">Notifications</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="overlay"></div>
        <!--  sidebar-nav end -->

        <!--  main-wrapper start  -->
        <main class="main-wrapper">
            <!--  header start  -->
            <header class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-6">
                            <div class="header-left d-flex align-items-center">
                                <div class="menu-toggle-btn mr-20">
                                    <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                        <i class="lni lni-chevron-left me-2"></i> Menu
                                    </button>
                                </div>
                                <div class="header-search d-none d-md-flex">
                                    <form action="#">
                                        <input type="text" placeholder="Search..." />
                                        <button><i class="lni lni-search-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-6">
                            <div class="header-right">
                                <!-- notification start -->
                                <div class="notification-box ml-15 d-none d-md-flex">
                                    <button class="dropdown-toggle" type="button" id="notification"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="lni lni-alarm"></i>
                                        <span>2</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                                        <li>
                                            <a href="#0">
                                                <div class="image">
                                                    <img src="assets/images/lead/lead-6.png" alt="" />
                                                </div>
                                                <div class="content">
                                                    <h6>
                                                        John Doe
                                                        <span class="text-regular">
                                                            comment on a product.
                                                        </span>
                                                    </h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consect etur adipiscing
                                                        elit Vivamus tortor.
                                                    </p>
                                                    <span>10 mins ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0">
                                                <div class="image">
                                                    <img src="assets/images/lead/lead-1.png" alt="" />
                                                </div>
                                                <div class="content">
                                                    <h6>
                                                        Jonathon
                                                        <span class="text-regular">
                                                            like on a product.
                                                        </span>
                                                    </h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consect etur adipiscing
                                                        elit Vivamus tortor.
                                                    </p>
                                                    <span>10 mins ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- notification end -->
                                <!-- message start -->
                                <div class="header-message-box ml-15 d-none d-md-flex">
                                    <button class="dropdown-toggle" type="button" id="message" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="lni lni-envelope"></i>
                                        <span>3</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                                        <li>
                                            <a href="#0">
                                                <div class="image">
                                                    <img src="assets/images/lead/lead-5.png" alt="" />
                                                </div>
                                                <div class="content">
                                                    <h6>Jacob Jones</h6>
                                                    <p>Hey!I can across your profile and ...</p>
                                                    <span>10 mins ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0">
                                                <div class="image">
                                                    <img src="assets/images/lead/lead-3.png" alt="" />
                                                </div>
                                                <div class="content">
                                                    <h6>John Doe</h6>
                                                    <p>Would you mind please checking out</p>
                                                    <span>12 mins ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0">
                                                <div class="image">
                                                    <img src="assets/images/lead/lead-2.png" alt="" />
                                                </div>
                                                <div class="content">
                                                    <h6>Anee Lee</h6>
                                                    <p>Hey! are you available for freelance?</p>
                                                    <span>1h ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- message end -->
                                <!-- filter start -->
                                <div class="filter-box ml-15 d-none d-md-flex">
                                    <button class="" type="button" id="filter">
                                        <i class="lni lni-funnel"></i>
                                    </button>
                                </div>
                                <!-- filter end -->
                                <!-- profile start -->
                                <div class="profile-box ml-15">
                                    <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="profile-info">
                                            <div class="info">
                                                <h6>John Doe</h6>
                                                <div class="image">
                                                    <img src="assets/images/profile/profile-image.png" alt="" />
                                                    <span class="status"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <i class="lni lni-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                        <li>
                                            <a href="#0">
                                                <i class="lni lni-user"></i> View Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0">
                                                <i class="lni lni-alarm"></i> Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                                        </li>
                                        <li>
                                            <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                                        </li>
                                        <li>
                                            {{-- <a href="#0" > <i class="lni lni-exit"></i> Sign Out </a> --}}
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <i class="lni lni-exit"></i> Sign Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                        </li>
                                    </ul>
                                </div>
                                <!-- profile end -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--  header end -->

            <!--  section start  -->
            <section class="section">
                @yield('content')
                <!-- end container -->
            </section>
            <!-- section end  -->

            <!-- footer start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 order-last order-md-first">
                            <div class="copyright text-center text-md-start">
                                <p class="text-sm">
                                    Designed and Developed by
                                    <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                                        PlainAdmin
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- end col-->
                        <div class="col-md-6">
                            <div class="terms d-flex justify-content-center justify-content-md-end">
                                <a href="#0" class="text-sm">Term & Conditions</a>
                                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </footer>
            <!-- footer end  -->
        </main>
        <!--  main-wrapper end -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/world-merc.js') }}"></script>
    <script src="{{ asset('assets/js/polyfill.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        // ======== jvectormap activation
        var markers = [{
                name: "Egypt",
                coords: [26.8206, 30.8025]
            },
            {
                name: "Russia",
                coords: [61.524, 105.3188]
            },
            {
                name: "Canada",
                coords: [56.1304, -106.3468]
            },
            {
                name: "Greenland",
                coords: [71.7069, -42.6043]
            },
            {
                name: "Brazil",
                coords: [-14.235, -51.9253]
            },
        ];

        var jvm = new jsVectorMap({
            map: "world_merc",
            selector: "#map",
            zoomButtons: true,

            regionStyle: {
                initial: {
                    fill: "#d1d5db",
                },
            },

            labels: {
                markers: {
                    render: (marker) => marker.name,
                },
            },

            markersSelectable: true,
            selectedMarkers: markers.map((marker, index) => {
                var name = marker.name;

                if (name === "Russia" || name === "Brazil") {
                    return index;
                }
            }),
            markers: markers,
            markerStyle: {
                initial: {
                    fill: "#2F80ED"
                },
                selected: {
                    fill: "#ff5050"
                },
            },
            markerLabelStyle: {
                initial: {
                    fontWeight: 400,
                    fontSize: 14,
                },
            },
        });
        // ====== calendar activation
        document.addEventListener("DOMContentLoaded", function () {
            var calendarMiniEl = document.getElementById("calendar-mini");
            var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
                initialView: "dayGridMonth",
                headerToolbar: {
                    end: "today prev,next",
                },
            });
            calendarMini.render();
        });
        // =========== chart one start
        var ctx1 = document.getElementById("Chart1").getContext("2d");
        var chart1 = new Chart(ctx1, {
            // The type of chart we want to create
            type: "line", // also try bar or other graph types

            // The data for our dataset
            data: {
                labels: [
                    "Jan",
                    "Fab",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                // Information about the dataset
                datasets: [{
                    label: "",
                    backgroundColor: "transparent",
                    borderColor: "#2F80ED",
                    data: [
                        600,
                        700,
                        750,
                        800,
                        760,
                        820,
                        690,
                        740,
                        720,
                        890,
                        776,
                        900,
                    ],
                    pointBackgroundColor: "transparent",
                    pointHoverBackgroundColor: "#2F80ED",
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 5,
                    pointBorderWidth: 5,
                    pointRadius: 8,
                    pointHoverRadius: 8,
                }, ],
            },

            // Configuration options
            options: {
                tooltips: {
                    callbacks: {
                        labelColor: function (tooltipItem, chart) {
                            return {
                                backgroundColor: "#ffffff",
                            };
                        },
                    },
                    intersect: false,
                    backgroundColor: "#f9f9f9",
                    titleFontColor: "#8F92A1",
                    titleFontColor: "#8F92A1",
                    titleFontSize: 12,
                    bodyFontColor: "#171717",
                    bodyFontStyle: "bold",
                    bodyFontSize: 16,
                    multiKeyBackground: "transparent",
                    displayColors: false,
                    xPadding: 30,
                    yPadding: 10,
                    bodyAlign: "center",
                    titleAlign: "center",
                },

                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },

                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 500,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    }, ],
                },
            },
        });
        // =========== chart one end

        // =========== chart two start
        var ctx2 = document.getElementById("Chart2").getContext("2d");
        var chart2 = new Chart(ctx2, {
            // The type of chart we want to create
            type: "bar", // also try bar or other graph types
            // The data for our dataset
            data: {
                labels: [
                    "Jan",
                    "Fab",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                // Information about the dataset
                datasets: [{
                    label: "",
                    backgroundColor: "#2F80ED",
                    barThickness: 6,
                    maxBarThickness: 8,
                    data: [
                        600,
                        700,
                        1000,
                        700,
                        650,
                        800,
                        690,
                        740,
                        720,
                        1120,
                        876,
                        900,
                    ],
                    borderRadius: 100,
                    pointBackgroundColor: "#F3F6F8",
                    pointHoverBackgroundColor: "#5243AA",
                    pointBorderColor: "#F3F6F8",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 5,
                    pointBorderWidth: 5,
                    pointRadius: 8,
                    pointHoverRadius: 8,
                }, ],
            },
            // Configuration options
            options: {
                borderColor: "#F3F6F8",
                borderWidth: 15,
                backgroundColor: "#F3F6F8",
                tooltips: {
                    callbacks: {
                        labelColor: function (tooltipItem, chart) {
                            return {
                                backgroundColor: "rgba(104, 110, 255, .0)",
                            };
                        },
                    },
                    backgroundColor: "#F3F6F8",
                    titleFontColor: "#8F92A1",
                    titleFontSize: 12,
                    bodyFontColor: "#171717",
                    bodyFontStyle: "bold",
                    bodyFontSize: 16,
                    multiKeyBackground: "transparent",
                    displayColors: false,
                    xPadding: 30,
                    yPadding: 10,
                    bodyAlign: "center",
                    titleAlign: "center",
                },

                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },

                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 0,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    }, ],
                },
            },
        });
        // =========== chart two end

        // =========== chart three start
        var ctx3 = document.getElementById("Chart3").getContext("2d");
        var chart3 = new Chart(ctx3, {
            // The type of chart we want to create
            type: "line", // also try bar or other graph types

            // The data for our dataset
            data: {
                labels: [
                    "Jan",
                    "Fab",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                // Information about the dataset
                datasets: [{
                        label: "Revenue",
                        backgroundColor: "transparent",
                        borderColor: "#5243AA",
                        data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
                        pointBackgroundColor: "transparent",
                        pointHoverBackgroundColor: "#5243AA",
                        pointBorderColor: "transparent",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 3,
                        pointBorderWidth: 5,
                        pointRadius: 5,
                        pointHoverRadius: 8,
                    },
                    {
                        label: "Profit",
                        backgroundColor: "transparent",
                        borderColor: "#686EFF",
                        data: [
                            120,
                            160,
                            150,
                            140,
                            165,
                            210,
                            135,
                            155,
                            170,
                            140,
                            130,
                            200,
                        ],
                        pointBackgroundColor: "transparent",
                        pointHoverBackgroundColor: "#686EFF",
                        pointBorderColor: "transparent",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 3,
                        pointBorderWidth: 5,
                        pointRadius: 5,
                        pointHoverRadius: 8,
                    },
                    {
                        label: "Order",
                        backgroundColor: "transparent",
                        borderColor: "#FF8730",
                        data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
                        pointBackgroundColor: "transparent",
                        pointHoverBackgroundColor: "#FF8730",
                        pointBorderColor: "transparent",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 3,
                        pointBorderWidth: 5,
                        pointRadius: 5,
                        pointHoverRadius: 8,
                    },
                ],
            },

            // Configuration options
            options: {
                tooltips: {
                    callbacks: {
                        labelColor: function (tooltipItem, chart) {
                            return {
                                backgroundColor: "rgba(104, 110, 255, .0)",
                            };
                        },
                    },
                    intersect: false,
                    backgroundColor: "#fbfbfb",
                    titleFontColor: "#8F92A1",
                    titleFontSize: 16,
                    titleFontFamily: "Inter",
                    titleFontStyle: "400",
                    bodyFontColor: "#171717",
                    bodyFontSize: 16,
                    multiKeyBackground: "transparent",
                    displayColors: false,
                    xPadding: 30,
                    yPadding: 15,
                    borderColor: "rgba(143, 146, 161, .1)",
                    borderWidth: 1,
                    title: false,
                },

                title: {
                    display: false,
                },

                layout: {
                    padding: {
                        top: 0,
                    },
                },

                legend: false,

                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 300,
                            min: 50,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    }, ],
                },
            },
        });
        // =========== chart three end

        // ================== chart four start
        var ctx4 = document.getElementById("Chart4").getContext("2d");
        var chart4 = new Chart(ctx4, {
            // The type of chart we want to create
            type: "bar", // also try bar or other graph types
            // The data for our dataset
            data: {
                labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
                // Information about the dataset
                datasets: [{
                        label: "",
                        backgroundColor: "#2F80ED",
                        barThickness: "flex",
                        maxBarThickness: 8,
                        data: [600, 700, 1000, 700, 650, 800],
                        pointBackgroundColor: "#F3F6F8",
                        pointHoverBackgroundColor: "#5243AA",
                        pointBorderColor: "#F3F6F8",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 5,
                        pointBorderWidth: 5,
                        pointRadius: 8,
                        pointHoverRadius: 8,
                    },
                    {
                        label: "",
                        backgroundColor: "#EB5757",
                        barThickness: "flex",
                        maxBarThickness: 8,
                        data: [690, 740, 720, 1120, 876, 900],
                        pointBackgroundColor: "#F3F6F8",
                        pointHoverBackgroundColor: "#5243AA",
                        pointBorderColor: "#F3F6F8",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 5,
                        pointBorderWidth: 5,
                        pointRadius: 8,
                        pointHoverRadius: 8,
                    },
                ],
            },
            // Configuration options
            options: {
                borderColor: "#F3F6F8",
                borderWidth: 15,
                backgroundColor: "#F3F6F8",
                tooltips: {
                    callbacks: {
                        labelColor: function (tooltipItem, chart) {
                            return {
                                backgroundColor: "rgba(104, 110, 255, .0)",
                            };
                        },
                    },
                    backgroundColor: "#F3F6F8",
                    titleFontColor: "#8F92A1",
                    titleFontSize: 12,
                    bodyFontColor: "#171717",
                    bodyFontStyle: "bold",
                    bodyFontSize: 16,
                    multiKeyBackground: "transparent",
                    displayColors: false,
                    xPadding: 30,
                    yPadding: 10,
                    bodyAlign: "center",
                    titleAlign: "center",
                },

                title: {
                    display: false,
                },
                legend: {
                    display: false,
                },

                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawTicks: false,
                            drawBorder: false,
                        },
                        ticks: {
                            padding: 35,
                            max: 1200,
                            min: 0,
                        },
                    }, ],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: "rgba(143, 146, 161, .1)",
                            zeroLineColor: "rgba(143, 146, 161, .1)",
                        },
                        ticks: {
                            padding: 20,
                        },
                    }, ],
                },
            },
        });
        // =========== chart four end

    </script>
</body>

</html>

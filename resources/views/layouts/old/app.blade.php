<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Plain Admin</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/LineIcons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
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

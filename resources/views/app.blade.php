<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

{{--    <link rel="stylesheet" href="fonts/icomoon/style.css">--}}

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=a01d9e64-7061-4d85-a1ac-32e2c4abbbd7" type="text/javascript"></script>
    <script src="{{ asset('js/info.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/security_cameras.js') }}" type="text/javascript"></script>
    <script src="https://yastatic.net/s3/mapsapi-jslibs/heatmap/0.0.1/heatmap.min.js" type="text/javascript"></script>


    <title>@yield('title')</title>
  </head>
<body>
    <aside class="sidebar">
      <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
      </div>
      <div class="side-inner">

        <div class="profile">
            <img src="{{ asset('public/images/logo.png') }}" alt="logo" class="img-fluid">
        </div>

        <div class="nav-menu">
            <ul class="list-unstyled components mb-5">
                <li class="active"><a href="{{ route('index') }}"><span class="icon-home mr-3"></span>Карта</a></li>
                <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="icon-home mr-3"></span>Общее количество бедности</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li><a href="{{ route('invalids_and_population') }}"><span class="fa fa-chevron-right mr-2"></span>Количество инвалидов относительно бедных</a></li>
                        <li><a href="{{ route('total_amount_of_poverty') }}"><span class="fa fa-chevron-right mr-2"></span>Число бедности</a></li>
                        <li><a href="{{ route('unemployed_and_population') }}"><span class="fa fa-chevron-right mr-2"></span>Число безработных относительно всего населения</a></li>
{{--                        <li><a href="{{ route('service')  }}"><span class="fa fa-chevron-right mr-2"></span>Услуги</a></li>--}}
                    </ul>
                </li>
            </ul>
        </div>
      </div>
    </aside>

    <main>@yield('content')</main>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>



<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet')}}" rel="stylesheet">
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row h-100">
        <nav id="menu" class="bg-white">
          <div class="col px-4 pt-3">
            <p class=" m-0 h3 font-weight-bold mx-1">Hi! User</p>
          </div>
            <div class="col py-5">
              <div class="col  my-5">
                <p class="h5 font-weight-bold"><a href="/dashboard" class="text-muted text-decoration-none">My Profile</a><p>
                <hr width="50%" class="navm">
              </div>
              <div class="col my-5">
                <p class="h5 font-weight-bold"><a href="/dashboard/portfolio" class="text-muted text-decoration-none">Portfolio</a></p>
                <hr width="45%" class="navm">
              </div>
              <div class="col my-5">
                <p class="h5 font-weight-bold"><a href="/dashboard/orderBook" class="text-muted text-decoration-none">Order Book</a></p>
                <hr width="60%" class="navm">
              </div>
              <div class="col my-5">
                <p class="h5 font-weight-bold"><a href="/dashboard/transaction" class="text-muted text-decoration-none">Transaction</a></p>
                <hr width="60%" class="navm">
              </div>
            </div>
        </nav>

        <main id="panel" class="w-100 mainPanel ">
          <header>
            <div class="row m-0">
              <div class="col-9 ">
                <button class="toggle-button h1 text-white side border-0">☰</button>

              </div>
              <div class="col-3 d-flex justify-content-end">
              <a class="text-white h3 px-3 pt-2 font-weight-bold anchor" href="#">Logout</a>
              </div>
            </div>
          </header>
          <div class="col  p-5 ">
            <p class="text-white h2">Stocks</p>
          </div>
          <div class="row m-0">
            <div class="col-md-4 border border-white m-5 p-0">
              <div class="dropdown dropright">
                <button class="btn btn-lg dropdown-toggle text-white rounded-0 font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose Your Stock Name!!!
                </button>
                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item h4 font-weight-bold" href="/stocks/Infosys">Infosys</a>
                  <a class="dropdown-item h4 font-weight-bold" href="#">Apple</a>
                  <a class="dropdown-item h4 font-weight-bold" href="#">Hewlett Pakard</a>
                </div>
              </div>
            </div>

          </div>
        </main>



      </div>
    </div>
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js') }}"></script>
    <script src="dist/slideout.min.js"></script>
    <script>
      var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70
      });

      // Toggle button
      document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
      });
    </script>
  </body>
</html>

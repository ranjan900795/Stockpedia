<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Crimson+Text&display=swap" rel="stylesheet')}}" rel="stylesheet">
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/dashboard.css')}}">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-2  p-0 ">
          <div class="pos-f-t">
            <nav class="navbar navbar-dark ">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
            <div class="collapse" id="navbarToggleExternalContent">
              <div class="col px-5">
                <p class="navbar-brand m-0 h4 text-white font-weight-bold mx-1">Hi! User</p>
              </div>
              <div class=" p-4">

                <div class="col border-right ">


                  <div class="col  my-5">
                    <p class="text-muted h5 font-weight-bold">Portfolio<p>
                    <hr width="50%" class="navm">
                  </div>
                  <div class="col my-5">
                    <p class="text-muted h5 font-weight-bold">Alloted Funds</p>
                    <hr width="70%" class="navm">
                  </div>
                  <div class="col my-5">
                    <p class="text-muted h5 font-weight-bold">Order Book</p>
                    <hr width="60%" class="navm">
                  </div>
                  <div class="col my-5">
                    <p class="text-muted h5 font-weight-bold">Transaction</p>
                    <hr width="60%" class="navm">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <div class="col-10 p-0 ">
          <nav class="navbar navbar-expand-lg  w-100 p-2">
            <div class="col d-flex justify-content-end">
              <a class="text-muted h4 font-weight-bold anchor" href="#">Logout</a>
            </div>
          </nav>
          <div class="col  px-5 pb-5">
            <p class="text-white h4">User's Alloted Funds</p>
          </div>
          <div class="col">
            <div class="row px-5">
              <div class="col-4 border-top border-bottom border-light p-2">
                <p class="m-0 text-center text-muted h5 m-1">Total Money</p>
                <p class="m-0 text-center text-white h6 m-1">10000000</p>
              </div>
              <div class="col-4 border-top border-bottom p-2">
                <p class="m-0 text-center text-muted h5 m-1">Today's Gain/Loss</p>
                <p class="m-0 text-center text-white h6 m-1">0.00%</p>
              </div>
              <div class="col-4 border-top border-bottom p-2">
                <p class="m-0 text-center text-muted h5 m-1">Overall Gain/Loss</p>
                <p class="m-0 text-center text-white h6 m-1">0.00%</p>
              </div>
            </div>
          </div>
          <div class="col p-5">
            <div class="row">
              <div class="col-6 border-right">
                <p class="m-0 text-center text-muted h5 m-1 text-underline">Stock's bought</p>
                <hr width="30%">
              </div>
              <div class="col-6 ">
                <p class="m-0 text-center text-muted h5 m-1">Stock's sold</p>
                <hr width="30%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"></script>
  </body>
</html>

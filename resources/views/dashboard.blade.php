<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body class="bg-dark">
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg  w-100 p-2">
          <div class="col-3">
            <p class="navbar-brand m-0 h4 text-white font-weight-bold">Hi! User</p>
          </div>
          <div class="col-9 d-flex justify-content-end">
            <a class="text-muted h4 font-weight-bold" href="#">Logout</a>
          </div>
        </nav>

        <div class="col-2  p-0 py-5">
          <div class="col border-right ">
            <div class="col  my-5">
              <p class="text-muted h5 font-weight-bold">Portfolio<p>
              <hr width="30%">
            </div>
            <div class="col my-5">
              <p class="text-muted h5 font-weight-bold">Alloted Funds</p>
              <hr width="30%">
            </div>
            <div class="col my-5">
              <p class="text-muted h5 font-weight-bold">Order Book</p>
              <hr width="30%">
            </div>
            <div class="col my-5">
              <p class="text-muted h5 font-weight-bold">Transaction</p>
              <hr width="30%">
            </div>
          </div>
        </div>
        <div class="col-10 p-0 ">
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
    <script type="text/javascript" src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"></script>
  </body>
</html>

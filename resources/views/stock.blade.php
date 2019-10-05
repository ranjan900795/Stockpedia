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
    <link rel="stylesheet" href="{{asset('/css/stock.css')}}">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-3 ">
          <p class="font-weight-bold text-muted m-0 h4 pt-4 pb-2 pl-3">Hi!<span class="text-white"> User</span></p>
        </div>
        <div class="col-6  p-0">
          <div class="col ">
          <p class="font-weight-bold text-muted m-0 h2 text-capitalize text-center py-3" ><?php print_r($data); ?></p>
          </div>
          <div class="col border-top-0 border-bottom-0 border border-dark">
            dfsd
          </div>
        </div>
        <div class="col-3 d-flex justify-content-end">
          <p class="font-weight-bold text-muted m-0 h4 pt-4 pb-2 pr-5">Logout</span></p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 p-3 ">
          <p class="text-decoration font-weight-bold text-white h4 pl-3">Bid here</p>
        </div>
        <div class="col-12 px-5">
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <p class=" text-center m-0 h4 text-muted m-2">Qty.</p>
              <input type="text" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark">
            </div>
            <div class="col-md-4 mb-3">
              <p class=" text-center m-0 h4 text-muted m-2">Bid Type</p>
              <select id="inputState" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark">
                <option selected class="text-dark font-weight-bold">Choose...</option>
                <option class="text-dark font-weight-bold">Current Price</option>
                <option class="text-dark font-weight-bold">List Price</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <p class=" text-center m-0 h4 text-muted m-2">Price</p>
              <input type="text" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark">
            </div>
            <button type="submit" class="btn btn-transparent w-25 font-weight-bold h2 border-dark text-white m-auto ">BUY</button>
          </div>
        </div>
      </div>

      <div class="row ">
        <div class="col-12 p-3  ">
          <p class="text-decoration font-weight-bold text-white h4 pl-3">Sell here</p>
        </div>
        <div class="col-12 px-5">
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <p class=" text-center m-0 h4 text-muted m-2">Qty.</p>
              <input type="text" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark">
            </div>
            <div class="col-md-4 mb-3">
              <p class=" text-center m-0 h4 text-muted m-2">Offer Type</p>
              <select id="inputState" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark">
                <option selected class="text-dark font-weight-bold">Choose...</option>
                <option class="text-dark font-weight-bold">Current Price</option>
                <option class="text-dark font-weight-bold">List Price</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <p class=" text-center m-0 h4 text-muted m-2">Price</p>
              <input type="text" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark">
            </div>
            <button type="submit" class="btn btn-transparent w-25 font-weight-bold border-dark text-white m-auto ">SELL</button>
          </div>
        </div>
      </div>


    </div>
  </body>








</html>

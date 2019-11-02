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
          <form  method="post" id="bidForm" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <p class=" text-center m-0 h4 text-muted m-2">Qty.</p>
                <input type="text" name="quantity" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark">
              </div>
              <div class="col-md-4 mb-3">
                <p class=" text-center m-0 h4 text-muted m-2">Bid Type</p>

                <div class="dropdown d-flex justify-content-center">
                  <button class="w-75 d-flex  justify-content-start rounded-0 h4 py-1 px-2 text-white bg-transparent border border-dark" type="button" id="typeBid" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    Select
                  </button>
                  <div class="text-dark w-75 font-weight-bold dropdown-menu" aria-labelledby="type">
                    <a class="text-dark font-weight-bold dropdown-item" id="currentPriceBid">Current Price</a>
                    <a class="text-dark font-weight-bold dropdown-item" id="listPriceBid" >List Price</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <p class=" text-center m-0 h4 text-muted m-2">Price</p>
                <input type="text" name="price" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark " id="priceBid" disabled>
              </div>
              <button type="submit" class="btn btn-transparent w-25 font-weight-bold h2 border-dark text-white m-auto " id="bid">BUY</button>
            </div>
          </form>
        </div>
      </div>

      <div class="row ">
        <div class="col-12 p-3  ">
          <p class="text-decoration font-weight-bold text-white h4 pl-3">Sell here</p>
        </div>
        <div class="col-12 px-5">
          <form  method="post" id="offerForm"   enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <p class=" text-center m-0 h4 text-muted m-2">Qty.</p>
                <input type="text" name="quantity" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark">
              </div>
              <div class="col-md-4 mb-3">
                <p class=" text-center m-0 h4 text-muted m-2">Offer Type</p>
                <div class="dropdown d-flex justify-content-center">
                  <button class="w-75 d-flex  justify-content-start rounded-0 h4 py-1 px-2 text-white bg-transparent border border-dark" type="button" id="typeOffer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    Select
                  </button>
                  <div class="text-dark w-75 font-weight-bold dropdown-menu" aria-labelledby="type">
                    <a class="text-dark font-weight-bold dropdown-item" id="currentPriceOffer">Current Price</a>
                    <a class="text-dark font-weight-bold dropdown-item" id="listPriceOffer" >List Price</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <p class=" text-center m-0 h4 text-muted m-2">Price</p>
                <input type="text" name="price" class="form-control w-75 m-auto rounded-0 text-white bg-transparent border border-dark " id="priceOffer" value="" disabled>
              </div>
              <button type="submit" class="btn btn-transparent w-25 font-weight-bold border-dark text-white m-auto " id="offer">SELL</button>
            </div>
          </form>
        </div>
      </div>


    </div>
    <script type="text/javascript" src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}"></script>

    <script>
      var stockName = "<?php print_r($data); ?>";

    </script>
    <script type="text/javascript" src="{{asset('/js/stock.js')}}" ></script>
  </body>








</html>

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
    <link href="{{ asset('https://stackpath.botstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" rel="stylesheet">

  </head>

  <body>
    <form  method="post" action="admin/add"   enctype="multipart/form-data">
      @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Stock Name</label>
          <input type="name" name="name" class="form-control" id="name" placeholder="Infosys">
        </div>
        <div class="form-group col-md-2">
          <label for="share">Shares</label>
          <input type="text" name="share" class="form-control" id="share" placeholder="total amount of shares">
        </div>
        <div class="form-group col-md-2">
          <label for="cPrice">Current Price</label>
          <input type="text" name="cPrice" class="form-control" id="cPrice" placeholder="Current price per share">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>

  </body>


</html>

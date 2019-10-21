<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" rel = stylesheet>
    <link href="{{asset('css/style.css')}}" rel = stylesheet>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat&display=swap')}}" rel=stylesheet>

    <title>Stockpedia</title>
</head>
<body>
    <div class="container-fluid">

        @include('header')
        <!--------------------hero section------------------->
        <div class="hero row mx-0">
            <div class="left col-lg-8">
                <div class="row mx-0"><p>A simple initiation to make a virtual stock  market platform where we can buy and sell stocks just like the real world.</p></div>
                <div class="row mx-0"><a href=""><p>click here to see all the available stocks</p></a></div>
            </div>

            <div class="right col-lg-4">
                <div class="col border-left overlapping-wrapper">
                       <div class="row one border justify-content-center align-items-center">
                           <h5>What is this all about ?</h5>
                           <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, facilis alias voluptatem quisquam expedita quo in minima vel omnis aliquam.</p>
                       </div>
                       <div class="row two m-0 border justify-content-center align-items-center">
                           <h5>How to play ?</h5>
                           <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, facilis alias voluptatem quisquam expedita quo in minima vel omnis aliquam.</p>
                       </div>
                       <div class="row three m-0 border justify-content-center align-items-center">
                           <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, facilis alias voluptatem quisquam expedita quo in minima vel omnis aliquam.</p>
                       </div>
                      <!-- <div class="row four m-0 border justify-content-center align-items-center">
                           <p class="info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, facilis alias voluptatem quisquam expedita quo in minima vel omnis aliquam.</p>
                       </div>-->
                   </div>
            </div>
        </div>
        <!--------------------end of hero section------------------->
        @include('footer')

<script src="asset{{('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="asset{{('https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js')}}"></script>
<script src="asset{{('js/home.js')}} type="text/javascript" "></script>


</body>
</html>

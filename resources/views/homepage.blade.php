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
    <div class="contaienr-fluid">

        <!---------------------login----------------------
            <div class="login-page">
                <form id="dashboard_update" method = "post" action = "dashboard_submit.php">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name ="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCollege1">College</label>
                            <input type="text" name ="college" class="form-control" id="exampleInputCollege1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhoneNumber1">Phone number</label>
                            <input type="int" name ="phone_number" class="form-control" id="exampleInputPhoneNumber1">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
            </div>
        <!---------------------end---------------------->

        <!------------------------Navbar----------------------->
        <nav class="row-lg-12 nav">
            <div class="logo col-lg-9">
                <!--<h1>Stockpedia</h1>-->
                <div class="row logo mx-0">
                    <div class="col mx-0">
                        <div class="row mx-0"><h1 class=" stock border-bottom mb-0">STOCK</h1></div>
                        <div class="row mx-0"><h1 class=" pedia">PEDIA</h1></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <!--<span class ="login">Login |</span>-->
                <div class="row wrapper">
                    <div class=" col-lg-3 login p-0"><a class ="login_anchor"href="login.php">login</a></div>
                    <div class="col-lg-1 p-0 vertical_line"><span>|</span></div>
                    <div class=" <col-lg-8></col-lg-8> registration p-0"><a href="registration.php">registration</a></div>
                </div>
            </div>
        </nav>
        <!--------------------end of navbar----------------->

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

        <!--------------------footer--------------------->
        <!--------------------end of footer--------------------->

    </div>

    <!-------------------Loading animation----------------
    <div id="loader-wrapper">
        <h2>
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>
        </h2>
    </div>
    <!-------------------Ending of loading animation---------------->

    <script src="asset{{('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="asset{{('https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js')}}"></script>
    <script src="asset{{('js/home.js')}} type="text/javascript" "></script>


</body>
</html>

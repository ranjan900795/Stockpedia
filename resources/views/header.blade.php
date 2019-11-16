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
        <---------------------end---------------------->

       <!------------------------Navbar----------------------->
       <nav class="row nav">
            <div class="logo col-md-3 col-sm-9 col-xs-9 ">
                <div class="row logo">
                    <div class="col">
                        <div class="row mx-0"><h1 class=" stock border-bottom mb-0">STOCK</h1></div>
                        <div class="row mx-0"><h1 class=" pedia">PEDIA</h1></div>
                    </div>
                </div>
            </div>
            <!--login form-->
            <div class="col-md-7">
                <div class = "popup"><a data-toggle="modal" data-target="#exampleModalCenter" style="font-size:1.7rem"class="a">Sign In</a></div>
                 
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Sign in</h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form" action="{{url('/home')}}" method = "post">
                            <div class="form-group">
                                <label for="email/username">Email/Username</label> 
                                <input type="text" name="email" placeholder="" class="form-control mr-2">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label> 
                                <input type="password" class="form-control" name="password" placeholder="">
                            </div> 
                            <div class="form-group"> 
                                <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}" placeholder="">
                            </div> 
                            <button type="submit" name = "button" class = "btn btn-success ">Submit</button>
                        </form>
                        <!-- <div style="margin:0 auto"><p>Or you can sign in with</p></div> -->
                    </div>
                    <div class="modal-footer"style="margin:0 auto;">
                        <p>Or you can sign in with</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!--end of login form-->
            <div class="col-md-2 col-sm-3 col-xs-3">
                    <div class="pt-5 reg_link"><a href="/home/registration">Sign up</a></div>
                </div>
            </div>
        </nav>
        <!--------------------end of navbar----------------->
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
            <div class="col-md-7">
                <form class="form-inline pt-5 flex-row-reverse">
                    <div class="form-group order-1">
                        <!-- <label for="email/username">Email/Username</label> -->
                        <input type="text" name="uid" placeholder="Email/username" class="form-control mr-2">
                    </div>
                    <div class="form-group order-2">
                        <!-- <label for="password">Password</label> -->
                        <input type="password" class="form-control mr-2" name="password" placeholder="password">
                    </div>
                    <button type="submit" class = "btn btn-success ">Submit</button>
                </form>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3">
                    <div class="pt-5 reg_link"><a href="/home/registration">Sign up</a></div>
                </div>
            </div>
        </nav>
        <!--------------------end of navbar----------------->
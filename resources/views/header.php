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
                    <div class=" col-lg-3 login p-0"><a class ="login_anchor"href="/home/login">login</a></div>
                    <div class="col-lg-1 p-0 vertical_line"><span>|</span></div>
                    <div class="registration p-0"><a href="/home/registration">registration</a></div>
                </div>
            </div>
        </nav>
        <!--------------------end of navbar----------------->
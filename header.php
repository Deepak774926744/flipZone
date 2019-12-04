<!--header begin-->
   

<header>
     <?php include("navbar.php"); ?>
    <!--model begin-->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- modal header begin-->
                    <h5 class="modal-title mx-auto text-capitalize" id="exampleModalLabel">welcome to <span>
                            <a href="#" class="navbar-brand logo-big">flipZone</a>
                        </span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!-- modal header end-->
                <!-- modal body begin-->
                <ul class="nav nav-tabs mx-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="true">Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
                    </li>

                </ul>
                <div class="tab-content mx-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <!-- signup form begin -->
                        <form action="">

                            <div class="form-group text-capitalize">
                                <label for="uname">name:</label>
                                <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter your name...">
                                <label for="mnumber">mobile no.:</label>
                                <input type="text" class="form-control" id="unumber" name="unumber" placeholder="Enter your mobile no...">
                                <label for="uemail">email:</label>
                                <input type="email" class="form-control" id="uemail" name="uemail" placeholder="Enter your email...">
                                <label for="pwd">password:</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password..."><br>
                                <input type="checkbox" class="text-lowercase"> agree with tearm and condition<br><br>
                                <input type="submit" class="btn btn-primary text-capitalize form-control" value="signup" name="submit" id="submit">
                            </div>
                        </form>


                    </div>
                    <!-- signup form end-->
                    <!-- login form begin-->

                    <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form action="">

                            <div class="form-group text-capitalize">

                                <label for="mnumber">mobile no.:</label>
                                <input type="text" class="form-control" id="unumber" name="unumber" placeholder="Enter your mobile no...">

                                <label for="pwd">password:</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password..."><br>
                                 <input type="checkbox" class="text-lowercase"> remember me<br><br>
                                <input type="submit" class="btn btn-primary text-capitalize form-control" value="login" name="submit" id="submit">
                            </div>
                        </form>


                    </div>

                    <!-- login form end-->

                </div>
                <!-- modal body end-->
                <!-- modal footer begin-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                <!-- modal footer end-->
            </div>
        </div>
    </div>
    <!--model end-->
    <!--second nav start-->
    <nav class="navbar second-nav-top navbar-expand-sm ">
        <div class="collapse navbar-collapse">
            <div class="container-fluid second-nav">
                <div class="row text-capitalize text-center">
                    <ul class="nav ">
                        <li class="drop-container"><a href="#" class="nav-link">electronics</a>
                            <ul class="drop-menu1">
                                <li><a href="#" class="drop-link">mobiles</a></li>
                                <li><a href="#" class="drop-link">laptop</a></li>
                                <li><a href="#" class="drop-link">earphoone</a></li>
                                <li><a href="#" class="drop-link">freeze</a></li>
                                <li><a href="#" class="drop-link">sounds</a></li>
                                <li><a href="#" class="drop-link">cooler</a></li>
                                <li><a href="#" class="drop-link">headphone</a></li>
                                <li><a href="#" class="drop-link">speaker</a></li>
                                <li><a href="#" class="drop-link">fan</a></li>
                                <li><a href="#" class="drop-link">bulb</a></li>
                                <li><a href="#" class="drop-link">dc motor</a></li>
                                <li><a href="#" class="drop-link">wires</a></li>
                                <li><a href="#" class="drop-link">fan</a></li>
                                <li><a href="#" class="drop-link">full pack</a></li>
                            </ul>

                        </li>
                        <li class="drop-container"><a href="#" class="nav-link">tv & applications</a>

                            <ul class="drop-menu2">

                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                            </ul>
                        </li>
                        <li class="drop-container"><a href="#" class="nav-link">men</a>

                            <ul class="drop-menu3">

                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                            </ul>
                        </li>
                        <li class="drop-container"><a href="#" class="nav-link">women</a>


                            <ul class="drop-menu4">

                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                            </ul>
                        </li>
                        <li class="drop-container"><a href="#" class="nav-link">baby & kids</a>

                            <ul class="drop-menu5">

                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                            </ul>
                        </li>
                        <li class="drop-container"><a href="#" class="nav-link">home & furniture</a>

                            <ul class="drop-menu6">

                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                            </ul>
                        </li>
                        <li class="drop-container"><a href="#" class="nav-link">sports,books & more</a>

                            <ul class="drop-menu7">

                                <li><a href="#" class="drop-link"><span class="li-7"></span>home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                                <li><a href="#" class="drop-link">home</a></li>
                            </ul>

                        </li>
                        <li class="drop-container"><a href="#" class="nav-link">offer zone</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--second nav end-->
</header>

<!--header end-->

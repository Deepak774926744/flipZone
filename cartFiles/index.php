<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--bootstrape css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!--font awesome css-->
    <link rel="stylesheet" href="../fonts/css/all.css" />
    <!--main css-->
    <link rel="stylesheet" href="cartStyle.css" />
    <title>flipZone | cart</title>
</head>

<body>
    <?php include("../header.php"); ?>

    <div class="container-fluid main-container ">
        <div class="row ">
            <!--filter begin-->
            <div class="navbar navbar-expand-sm ">
                <div class="collapse col-sm-2 navbar-collapse ">
                    <div class="col-12 col-sm-2  filter bg-dange">

                        <div class="card card-left">
                            <h3 class="text-center text-capitalize">filter
                            </h3>
                            <hr>
                          <h6  href="#" class="text-uppercase px-3">categories</h6>
                          <div class="dropdown">
                          <a href="#" class="text-capitalize px-4 dropdown-toggle nav-link" data-toggle="dropdown">all</a>
                          <ul class="dropdown-menu mx-3">
                              
                              <li><a href="#" class="nav-link px-4">brand</a></li>
                              <li><a href="#" class="nav-link px-4">color</a></li>
                              <li><a href="#" class="nav-link px-4">audio & video</a></li>
                              <li><a href="#" class="nav-link px-4">recorder</a></li>
                              
                              
                              
                          </ul>
                           
                          </div>    
                     
                        </div>
                    </div>
                </div>
            </div>


            <!--filter end-->
            <!--cart-item begin-->
            <div class="col-12 col-sm-10 cart-item">

                <div class="container-fluid bg-primar my-3">

                    <div class="row ">
                        <!-- item start-->

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-1.jpeg" class="card-img-top store-img img-responsive" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 6999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">shoes</p>
                                <div class="img-container">
                                    <a href="#"><img src="../img/mobile/f-1.jpg" class="card-img-top store-img img-responsive" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">laptop</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/l-1.jpg" class="card-img-top store-img img-responsive" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 32999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">laptop</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/e-1.jpeg" class="card-img-top store-img img-responsive" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 36999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">watch</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/f-10.jpeg" class="card-img-top store-img img-responsive" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 899</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-3.jpeg" class="card-img-top store-img img-responsive" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 5999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">laptop</p>
                                <div class="img-container">
                                    <a href="#"><img src="../img/mobile/l-10.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 46999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">watch</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/f-10.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 1199</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">watch</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/e-4.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">speaker</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/e-7.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 2999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-8.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 56999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">shoes</p>
                                <div class="img-container">
                                    <a href="#"><img src="../img/mobile/f-21.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 1999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-2.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 4999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-9.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 76999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-3.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 4999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">shoes</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/f-11.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">watch</p>
                                <div class="img-container">
                                    <a href="#"><img src="../img/mobile/f-10.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 1699</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">laptop</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/l-14.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 38999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">laptop</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/l-11.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 29999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-2.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 4999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">speaker</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/e-6.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 2199</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"><img src="../img/mobile/m-10.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>
                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 67999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">shoes</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/f-2.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 2999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">laptop</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/l-14.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 36999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">shoes</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/f-13.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 799</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                           
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">shoes</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/f-11.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 1299</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">laptop</p>
                                <div class="img-container">
                                    <a href="#"><img src="../img/mobile/l-9.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 33999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3  store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">watch</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/f-19.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 1399</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">laptop</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/l-10.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 27999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-3.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 4999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">mobile</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/m-11.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 8999</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>
                        

                        <div class="col-12 col-sm-3 col-lg-3 mx-auto my-1 py-3 store-item sweets" data-item="sweets">
                            <div class="card single-item">
                                <p class="text-center text-capitalize  bg-primary">watch</p>
                                <div class="img-container">
                                    <a href="#"> <img src="../img/mobile/e-4.jpeg" class="card-img-top store-img" alt=""></a>

                                </div>

                                <div class="card-body text-capitalize bg-info">

                                    <div class="d-flex justify-content-between">
                                        <div class="item-info">discription</div>
                                        <div class="item-price" id="item-price">&#8377; 1299</div>
                                    </div>
                                    <hr>

                                    <div class="card-text d-flex justify-content-between text-capitalize">

                                        <button type="button" class="btn btn-danger">Add to Cart</button>
                                        <button type="button" class="btn btn-danger">Buy now</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                    <!-- item end-->
               
                 </div>
                </div>
                <!--mobile item end-->

            </div>
            <!--cart-item end-->
        </div>
    </div>
    <div class="footer-php">
        <?php include("../footer.php"); ?>

    </div>




    <!--j query-->
    <script src="../js/jquery-3.3.1.js"></script>
    <!--bootstrape js-->
    <script src="../js/bootstrap.min.js"></script>
    <!--main js-->
    <script src="cart.js"></script>

</body>

</html>

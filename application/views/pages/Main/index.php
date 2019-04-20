<?php include('header.php'); ?>


    <!-- ========================= SECTION INTRO ========================= -->
    <section class="section-intro bg-secondary text-white text-center ">


        <div class="container d-flex flex-column" style="min-height:80vh;">

            <div class="row mt-auto">
                <div class="col-lg-8 col-sm-12 text-center mx-auto">
                    <h1 class="display-4 mb-3">FOODSHALA</h1>
                    <p class="lead mb-5">FoodShala is restaurant search and discovery service</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 mx-auto text-center">
                    <form class="form-noborder" method="get" action="http://127.0.0.1:70/FoodShala/home/food">
                        <div class="form-row mb-5">
                            <div class="col-lg-6 col-sm-12 form-group">
                                <input class="form-control form-control-lg" placeholder="Search keyword" type="text"
                                       name="inputFood" id="inputFood">
                            </div>
                            <div class="col-lg-3 col-sm-12 form-group">
                                <select class="custom-select form-control-lg" name="Foodchoice" id="Foodchoice">
                                    <option value="all"> All category</option>
                                    <option value="V"> Veg</option>
                                    <option value="N"> Non Veg</option>

                                </select>
                            </div>
                            <div class="col-lg-3 col-sm-12 form-group">
                                <button class="btn btn-warning btn-block btn-lg" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <p class="small">FoodShala is restaurant search and discovery service
                    </p>
                    <ul class="list-inline my-5">
                        <li class="list-inline-item">
                            <a class="h4 text-light p-2" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h4 text-light p-2" href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h4 text-light p-2" href="#">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="h4 text-light p-2" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div> <!-- col.// -->
            </div> <!-- row.// -->

        </div>
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->


<?php include('footer.php'); ?>
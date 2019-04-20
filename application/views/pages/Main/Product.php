<?php include('header.php'); ?>
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content bg-secondary padding-y-sm">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-border">
                                <div class="form-row row-sm " style="width:100%">
                                    <div class="col-lg-6 col-sm-12 form-group">
                                        <input class="form-control form-control-lg" style=";width:100%"
                                               placeholder="Search keyword" type="text" id="inputFood">
                                    </div>
                                    <div class="col-lg-3 col-sm-12 form-group">
                                        <select class="custom-select form-control-lg" id="Foodchoice">
                                            <option value="all"> All category</option>
                                            <option value="V"> Veg</option>
                                            <option value="N"> Non Veg</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-sm-12 form-group">
                                        <button class="btn btn-warning btn-block btn-lg" id="FoodSearch"><i
                                                    id="spinEnd">Search</i> <i class="fas fa-spinner fa-pulse" id="spin"
                                                                               style="display:none"></i></button>
                                    </div>
                                </div>
                            </form>


                        </div>


                    </div> <!-- row.// -->
                </div> <!-- card-body .// -->
            </div> <!-- card.// -->
            <div class="padding-y-sm" align="center">
            </div>

            <div class="row-sm" id="foodlists">

            </div> <!-- row.// -->

        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION CONTENT .END// ========================= -->

<?php include('footer.php'); ?>
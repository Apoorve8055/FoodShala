<!-- Modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center card-header ">
                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body mx-3">

                <div class="card">
                    <article class="card-body">
                        <form>
                            <div class="form-group">
                                <select class="form-control" id="signupCata">
                                    <option>Choose</option>
                                    <option value="Customer">Customer</option>
                                    <option value="restaurant">Restaurant</option>
                                </select>

                            </div> <!-- form-group end.// -->

                            <div class="form-row">

                                <div class="col form-group">
                                    <label> name</label>
                                    <input type="text" class="form-control" placeholder="" id="signupfname">
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="" id="signupemail">
                                <small class="form-text text-muted">We'll never share your email with anyone else.
                                </small>
                            </div> <!-- form-group end.// -->


                            <div class="form-group">
                                <label>Create password</label>
                                <input class="form-control" type="password" id="signuppass">
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <label class="btn btn-success">
                                    <input class="" type="checkbox" name="myradio" value="V" id="signupveg">
                                    <span class="form-check-label">Vegetarian</span>
                                </label>

                                <label class="btn btn-danger">
                                    <input class="" type="checkbox" name="myradio" value="N," id="signupNonveg">
                                    <span class="form-check-label">Non Vegetarian</span>
                                </label>
                            </div> <!-- form-group end.// -->


                            <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our
                                <br> Terms of use and Privacy Policy.
                            </small>
                        </form>
                    </article> <!-- card-body end .// -->
                </div> <!-- card.// -->


            </div>

            <div class="modal-footer d-flex justify-content-center">
                <div class="form-group">
                    <button type="submit" style="width:300px" class="btn btn-primary btn-block" id="signupBTN">
                        Register
                    </button>
                </div> <!-- form-group// -->
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div style="width:100%" class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cart List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <div class="col-md-12 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-center">Your cart</span>
                    </h4>
                    <ul class="list-group mb-3" id="cartview">

                    </ul>
                    <p id="loginchk" align="center" style="color:red;display:none"> Please Login First </p>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="middlware();">CheakOut</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cheakoutlist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center card-header ">
                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body mx-3">

                <div class="card">
                    <article class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>First name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>Last name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="">
                                <small class="form-text text-muted">We'll never share your email with anyone else.
                                </small>
                            </div> <!-- form-group end.// -->


                            <div class="form-group">
                                <label>Create password</label>
                                <input class="form-control" type="password">
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <label class="btn btn-success">
                                    <input class="" type="checkbox" name="myradio" value="">
                                    <span class="form-check-label">Vegetarian</span>
                                </label>

                                <label class="btn btn-danger">
                                    <input class="" type="checkbox" name="myradio" value="">
                                    <span class="form-check-label">Non Vegetarian</span>
                                </label>
                            </div> <!-- form-group end.// -->


                            <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our
                                <br> Terms of use and Privacy Policy.
                            </small>
                        </form>
                    </article> <!-- card-body end .// -->
                </div> <!-- card.// -->


            </div>

            <div class="modal-footer d-flex justify-content-center">
                <div class="form-group">
                    <button type="submit" style="width:300px" class="btn btn-primary btn-block"> Register</button>
                </div> <!-- form-group// -->
            </div>
        </div>
    </div>
</div>

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-dark white " id="footer">
    <div class="container">

        <section class="footer-bottom row">
            <div class="col-sm-12">
                <center><p class="text-sm-center">Made by Apoorve Kumar Verma <br>
                        All Right Reserved
                    </p>
                </center>

            </div>
        </section> <!-- //footer-top -->
    </div><!-- //container -->
</footer>
<script>
    function middlware() {
        var chk = 0;
        chk = '<?php echo $this->session->id; ?>';
        if (chk) {
            var person = prompt("Please enter your Address", " ");
            if (person != null) {
                //             document.getElementById("demo").innerHTML =
//                   "Hello " + person + "! How are you today?";
                alert('Order Successfully ');
            }
        } else {
            $('#loginchk').show('slow');
        }
    }
</script>
<!-- main ajax -->
<script src="<?php echo base_url('assets/ajax/main.js'); ?> " type="text/javascript"></script>
<script src="<?php echo base_url('assets/ajax/food.js'); ?> " type="text/javascript"></script>
<script src="<?php echo base_url('assets/ajax/addToCart.js'); ?> " type="text/javascript"></script>
<!-- ========================= FOOTER END // ========================= -->

</body>
</html>
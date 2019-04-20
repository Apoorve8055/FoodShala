<?php include('header.php'); ?>
    <div class="container">
        <BR>
        <section class="section-content  padding-y-sm" style="background-color:#fbf9f9;height:500px ">
            <center><h2>Add Menu</h2></center>
            <div class="table-responsive">


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"><input class="form-control" type="text" placeholder="Enter iteam Name"
                                               id="menuNAme"></th>
                        <th scope="col"><input class="form-control" type="number" placeholder="Enter iteam Rate"
                                               id="menuRate"></th>
                        <th scope="col"><select class="form-control" id="menuCat">
                                <option>All</option>
                                <option value="V">VEG</option>
                                <option value="N">NON VEG</option>
                            </select></th>

                        <th scope="col"><input class="form-control" type="text" placeholder="Paste here Image link"
                                               id="menuPic"></th>
                        <th scope="col">
                            <button class="btn btn-primary form-control" style="width:100%" id="menuBTN"> Add Now
                            </button>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Iteam Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Quantity</th>
                        <th scope="col" colspan="1">Rate</th>
                    </tr>
                    </thead>
                    <tbody id="menutable">
                    </tbody>
                </table>
            </div>
        </section>
        <br>
    </div>
<?php include('footer.php'); ?>
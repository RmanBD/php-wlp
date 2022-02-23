<?php include 'pages/includes/header.php'?>


    <section class="py-5 " >
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card arif">
                        <div class="card-header">
                            <h4 class="text-center">Log In Form</h4>
                        </div>
                        <div class="card-body pb-0">
                            <div class="">
                                <form action="action.php" method="post" >
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-8">
                                            <span><?php echo $raihan ;?></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Email</label>
                                        <div class="col-md-8">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label">Password</label>
                                        <div class="col-md-8">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label"></label>
                                        <div class="col-md-8">
                                            <input type="submit" name="loginBtn" class="btn btn-success btn-block" value="Log In">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'pages/includes/footer.php'?>
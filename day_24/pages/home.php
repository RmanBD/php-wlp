<?php //include 'pages/includes/header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Student information box</h4>
                    </div>

                    <div class="card-body pb-0">
                        <h1><?php echo $_SESSION['name']; ?></h1>
                        <div class="">

<!--                            <h2>-->
<!--                                --><?php
//                                session_start();
//                                echo $_SESSION['mobile'];
//
//                                unset($_SESSION['mobile']);
//                                echo $_SESSION['mobile'];
//                                ?>
<!--                            </h2>-->

                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <span><?php echo $raihan ;?></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Phone</label>
                                    <div class="col-md-8">
                                        <input type="number" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label">Image</label>
                                    <div class="col-md-8 px-0">
                                        <input type="file" name="image" class="col-md-12" accept="image/*">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Student Info">
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


<?php //include 'pages/includes/footer.php'?>

<?php include 'includes/header.php'; ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">

            <?php foreach ($products as $product)   {?>
                <div class="col-md-4 m-md-5">
                    <div class="card">
                        <img src="" alt="" class="card-img-top" />
                        <div class="card-body">
                            <h3>Product Name</h3>
                            <h4>TK. 1200</h4>
                            <a href="" class="btn btn-outline-success">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>

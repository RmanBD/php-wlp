<?php include 'pages/includes/header.php' ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php fopen($students as $student) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="" alt="" class="">
                        <div class="card-body">
                            <h2><?php echo $student['name'];?></h2>
                            <p><?php echo $student['email'];?></p>
                            <p><?php echo $student['phone'];?></p>
                            <a href="javascript:void(0)" class="btn btn-outline-success float-right"></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php' ?>

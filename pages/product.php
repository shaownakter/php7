<?php include  'include/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foeach($product as $product) {?>
            <div class="col-md4 mb-5">
                <div class="card">
                    <img src="assets/img<?php echo $product['image']; ?>" alt="" class="card-img-top" />
                    <div class="card-body">
                        <h4>product Name</h4>
                        <h4>TK.1200</h4>
                        <hr/>
                        <a href="" class="btn btn-outline-success">Detail</a>

                    </div>

                </div>

            </div>
        <?php} ?>

        </div>

    </div>

</section>
<?php include  'include/footer.php';?>


<?php include 'header.php'?>


<section class="mt-5">
    <div class="container">
        <div class="row">

            <?php foreach ($products as $product) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img src="assets/images/mobile.avif" class="img-fluid" alt="laptop">
                        </div>
                        <div class="card-body">
                            <h3>product-name</h3>
                            <h6>price</h6>
                            <a href="action.php?page=details&id=<?php echo $product['id']?>" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</section>

<?php include 'footer.php'?>